<!DOCTYPE html>
<html class="no-js" lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Contact us - Robaita" />
        <meta property="og:url" content="https://www.robaita.com/contact_us.php/" />
        <meta property="og:site_name" content="robaita" />
        <meta property="article:publisher" content="https://www.facebook.com/RoboticsAndAITrainingAcademy/" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Contact us - Robaita" />
        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>Contact us - Robaita</title>
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
        <link href="assets/css/contact_us.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link href="assets/css/registration_page_css.css" rel="stylesheet" /> -->

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>

        <?php

        // define variables and set to empty values
        $nameErr = $emailErr = $contactErr = $messageErr = "";
        $name = $email = $contact= $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // VALIDATE CANDIDATE NAME
            // echo $_POST["name"];
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } 
            else {
                $name = test_input($_POST["name"]);
                // echo $name."<br>";
                $name = preg_replace("/[^A-Za-z0-9.!? ]/","",$name);
                // echo $name."<br>";
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                  }
            }
            
            // VALIDATE EMAIL ID
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                $email = preg_replace("/[^A-Za-z0-9@.]/","",$email);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                  }
                
            }

            // // VALIDATE MOBILE NUMBER
            if (empty($_POST["mobile"])) {
                $contactErr = "Mobile Number is required";
            } else {
                $contact = test_input($_POST["mobile"]);
                $contact = preg_replace("/[^0-9]/","",$contact);
                if (!validate_phone_number($contact)) {
                    $contactErr = "Invalid Mobile Number";
                  }
            }

            // VALIDATE Message
            // echo $_POST["name"];
            if (empty($_POST["message"])) {
                $messageErr = "Name is required";
            } 
            else {
                $message = test_input($_POST["message"]);
                // echo $name."<br>";
                // $message = preg_replace("/[^A-Za-z0-9. ]/","",$message);
            }


            // If there is no error
            if ($nameErr=="" and $emailErr=="" and $contactErr=="" and $messageErr=="" ){
                $to_email = "contact@robaita.com";
                $subject = $name;
                // Always set content-type when sending HTML email
                // $headers = "MIME-Version: 1.0" . "\r\n";
                // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                // $headers .= 'From: <'.$email.'>' . "\r\n";
                // $headers .= 'Cc: myboss@example.com' . "\r\n";

                $headers = "From: ".$email."\r\n";
                $headers .= "Reply-To: contact@robaita.com\r\n";
                $headers .= "Return-Path: ".$email."\r\n";
                // $headers .= "CC: sombodyelse@example.com\r\n";
                // $headers .= "BCC: hidden@example.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=utf-8\r\n";
                $headers .= "X-Priority: 3\r\n";
                $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

                // $headers = array(
                //     'From' => $email,
                //     'Reply-To' => $email,
                //     'X-Mailer' => 'PHP/' . phpversion()
                // );

                //check if the email address is invalid $secure_check
                $secure_check = sanitize_my_email($to_email);
                if ($secure_check == false) {
                    echo '<script>swal("Sorry!", "You have entered invalid email id.", "alert");</script>';
                } else { //send email 
                    mail($to_email, $subject, $message, $headers);
                    echo '<script>swal("Thank You!", "We received your message, will get back to you soon.", "success");</script>';
                    // echo "This email is sent using PHP Mail";
                }
            }
            // else{
            //     echo '<script>swal("Sorry!", "We have problem processing your request, please try again.", "alert");</script>';
            // }


        } // POST ENDS HERE

        // Sanitize email
        function sanitize_my_email($field) {
            $field = filter_var($field, FILTER_SANITIZE_EMAIL);
            if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }
        // FILTER OUT BAD CHARACTERS
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data,ENT_QUOTES);
            return $data;
            }
    
        // VALIDATE PHONE NUMBER
        function validate_phone_number($phone)
        {
            // Allow +, - and . in phone number
            $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
            // Remove "-" from number
            $phone_to_check = str_replace("-", "", $filtered_phone_number);
            // Check the lenght of number
            // This can be customized if you want phone number from a specific country
            if (strlen($phone_to_check) !=10) {
                return false;
            } else {
            return true;
            }
        }
        ?>
        <!-- ===============================================-->
        <!--    Main Content-->
        <main class="main" id="top" >
        <!-- ===============================================-->
        <!-- NAVIGATION MENU & FEATURED UNIVERSITIES -->
        <?php include('sections/new_header.php'); ?>
        <!-- ===============================================-->
        <section class="bg-10" id="courses">
            <div class="container">
                <div class="row">
                    <!-- Contact Start -->
                    <div class="container_new">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <label for="fname">Full Name *</label> <span class="error"><?php echo $nameErr;?></span>
                            <input type="text" id="fname" name="name" placeholder="Your name.." required>

                            <label for="lname">Email id *</label> <span class="error"><?php echo $emailErr;?></span>
                            <input type="text" id="lname" name="email" placeholder="Email id.." required>

                            <label for="country">Mobile Number *</label> <span class="error"><?php echo $contactErr;?></span>
                            <input type="text" id="mobile" name="mobile" placeholder="Mobile number (10 digits)" required>

                            <label for="subject">Message *</label> <span class="error"><?php echo $messageErr;?></span>
                            <textarea id="subject" name="message" placeholder="Your Message.." style="height:170px" required></textarea>

                            <div class="g-recaptcha" data-sitekey="6LeVxy0bAAAAAFLWipIXY0k2Qz8RTDJrgKNRrq4a"></div>

                            <input type="submit" value="Submit">
                        </form>
                        </div>
                    </div>
                    <!-- Contact End -->
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
      

