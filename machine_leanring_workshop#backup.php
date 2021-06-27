<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>Robotics & Artificial Intelligence Training Academy</title>
        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
        <link rel="manifest" href="assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">
        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="assets/css/theme.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="assets/css/registration_page_css.css" rel="stylesheet" />

    </head>

    <body>
        <!-- ===============================================-->
        <!--    Main Content-->
        <main class="main" id="top" >
        <!-- ===============================================-->
        <!-- NAVIGATION MENU & FEATURED UNIVERSITIES -->
        <?php include('sections/header.php'); ?>
        <!-- ===============================================-->
        <section class="bg-10" id="courses">
            <div class="container">
                <div class="row">
                <div id="container"></div>

                <script>
                /**
                * Define the version of the Google Pay API referenced when creating your
                * configuration
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|apiVersion in PaymentDataRequest}
                */
                const baseRequest = {
                apiVersion: 2,
                apiVersionMinor: 0
                };

                /**
                * Card networks supported by your site and your gateway
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
                * @todo confirm card networks supported by your site and gateway
                */
                const allowedCardNetworks = ["MASTERCARD", "VISA"];

                /**
                * Card authentication methods supported by your site and your gateway
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
                * @todo confirm your processor supports Android device tokens for your
                * supported card networks
                */
                const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

                /**
                * Identify your gateway and your site's gateway merchant identifier
                *
                * The Google Pay API response will return an encrypted payment method capable
                * of being charged by a supported gateway after payer authorization
                *
                * @todo check with your gateway on the parameters to pass
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#gateway|PaymentMethodTokenizationSpecification}
                */
                const tokenizationSpecification = {
                type: 'PAYMENT_GATEWAY',
                parameters: {
                    'gateway': 'example',
                    'gatewayMerchantId': 'exampleGatewayMerchantId'
                }
                };

                /**
                * Describe your site's support for the CARD payment method and its required
                * fields
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
                */
                const baseCardPaymentMethod = {
                type: 'CARD',
                parameters: {
                    allowedAuthMethods: allowedCardAuthMethods,
                    allowedCardNetworks: allowedCardNetworks
                }
                };

                /**
                * Describe your site's support for the CARD payment method including optional
                * fields
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
                */
                const cardPaymentMethod = Object.assign(
                {},
                baseCardPaymentMethod,
                {
                    tokenizationSpecification: tokenizationSpecification
                }
                );

                /**
                * An initialized google.payments.api.PaymentsClient object or null if not yet set
                *
                * @see {@link getGooglePaymentsClient}
                */
                let paymentsClient = null;

                /**
                * Configure your site's support for payment methods supported by the Google Pay
                * API.
                *
                * Each member of allowedPaymentMethods should contain only the required fields,
                * allowing reuse of this base request when determining a viewer's ability
                * to pay and later requesting a supported payment method
                *
                * @returns {object} Google Pay API version, payment methods supported by the site
                */
                function getGoogleIsReadyToPayRequest() {
                return Object.assign(
                    {},
                    baseRequest,
                    {
                        allowedPaymentMethods: [baseCardPaymentMethod]
                    }
                );
                }

                /**
                * Configure support for the Google Pay API
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|PaymentDataRequest}
                * @returns {object} PaymentDataRequest fields
                */
                function getGooglePaymentDataRequest() {
                const paymentDataRequest = Object.assign({}, baseRequest);
                paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
                paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
                paymentDataRequest.merchantInfo = {
                    // @todo a merchant ID is available for a production environment after approval by Google
                    // See {@link https://developers.google.com/pay/api/web/guides/test-and-deploy/integration-checklist|Integration checklist}
                    merchantId: 'BCR2DN6TR76Z3PYK',
                    merchantName: 'Robaita'
                };

                paymentDataRequest.callbackIntents = ["PAYMENT_AUTHORIZATION"];

                return paymentDataRequest;
                }

                /**
                * Return an active PaymentsClient or initialize
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/client#PaymentsClient|PaymentsClient constructor}
                * @returns {google.payments.api.PaymentsClient} Google Pay API client
                */
                function getGooglePaymentsClient() {
                if ( paymentsClient === null ) {
                    paymentsClient = new google.payments.api.PaymentsClient({
                        environment: 'TEST',
                    paymentDataCallbacks: {
                        onPaymentAuthorized: onPaymentAuthorized
                    }
                    });
                }
                return paymentsClient;
                }

                /**
                * Handles authorize payments callback intents.
                *
                * @param {object} paymentData response from Google Pay API after a payer approves payment through user gesture.
                * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentData object reference}
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentAuthorizationResult}
                * @returns Promise<{object}> Promise of PaymentAuthorizationResult object to acknowledge the payment authorization status.
                */
                function onPaymentAuthorized(paymentData) {
                        return new Promise(function(resolve, reject){
                    // handle the response
                    processPayment(paymentData)
                    .then(function() {
                    resolve({transactionState: 'SUCCESS'});
                    })
                    .catch(function() {
                    resolve({
                        transactionState: 'ERROR',
                        error: {
                        intent: 'PAYMENT_AUTHORIZATION',
                        message: 'Insufficient funds',
                        reason: 'PAYMENT_DATA_INVALID'
                        }
                    });
                        });
                });
                }

                /**
                * Initialize Google PaymentsClient after Google-hosted JavaScript has loaded
                *
                * Display a Google Pay payment button after confirmation of the viewer's
                * ability to pay.
                */
                function onGooglePayLoaded() {
                const paymentsClient = getGooglePaymentsClient();
                paymentsClient.isReadyToPay(getGoogleIsReadyToPayRequest())
                    .then(function(response) {
                        if (response.result) {
                        addGooglePayButton();
                        }
                    })
                    .catch(function(err) {
                        // show error in developer console for debugging
                        console.error(err);
                    });
                }

                /**
                * Add a Google Pay purchase button alongside an existing checkout button
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#ButtonOptions|Button options}
                * @see {@link https://developers.google.com/pay/api/web/guides/brand-guidelines|Google Pay brand guidelines}
                */
                function addGooglePayButton() {
                const paymentsClient = getGooglePaymentsClient();
                const button =
                    paymentsClient.createButton({onClick: onGooglePaymentButtonClicked});
                document.getElementById('container').appendChild(button);
                }

                /**
                * Provide Google Pay API with a payment amount, currency, and amount status
                *
                * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#TransactionInfo|TransactionInfo}
                * @returns {object} transaction info, suitable for use as transactionInfo property of PaymentDataRequest
                */
                function getGoogleTransactionInfo() {
                return {
                        displayItems: [
                        {
                        label: "Subtotal",
                        type: "SUBTOTAL",
                        price: "1.00",
                        },
                    {
                        label: "Tax",
                        type: "TAX",
                        price: "1.00",
                        }
                    ],
                    countryCode: 'IN',
                    currencyCode: "INR",
                    totalPriceStatus: "FINAL",
                    totalPrice: "1.00",
                    totalPriceLabel: "Total"
                };
                }

                /**
                * Show Google Pay payment sheet when Google Pay payment button is clicked
                */
                function onGooglePaymentButtonClicked() {
                const paymentDataRequest = getGooglePaymentDataRequest();
                paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

                const paymentsClient = getGooglePaymentsClient();
                paymentsClient.loadPaymentData(paymentDataRequest);
                }

                /**
                * Process payment data returned by the Google Pay API
                *
                * @param {object} paymentData response from Google Pay API after user approves payment
                * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentData|PaymentData object reference}
                */
                function processPayment(paymentData) {
                        return new Promise(function(resolve, reject) {
                        setTimeout(function() {
                                // @todo pass payment token to your gateway to process payment
                                paymentToken = paymentData.paymentMethodData.tokenizationData.token;

                        resolve({});
                    }, 3000);
                });
                }</script>
                <script async
                src="https://pay.google.com/gp/p/js/pay.js"
                onload="onGooglePayLoaded()"></script>
                </div>
            </div>
        </section>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        </main>
        <!-- ===============================================-->
        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="assets/js/theme.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    </body>

</html>
      

