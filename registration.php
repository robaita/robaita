<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:locale" content="en_US" /><meta property="og:type" content="article" />
        <meta property="og:title" content="Workshop Registration- Robaita" />
        <meta property="og:url" content="https://www.robaita.com/machine_leanring_workshop.php/" />
        <meta property="og:site_name" content="robaita" />
        <meta property="article:publisher" content="https://www.facebook.com/RoboticsAndAITrainingAcademy/" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Workshop Registration- Robaita" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="-1" />
        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>Workshop Registration- Robaita</title>
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

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
        <!-- Create the model and add it as division -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
        <!-- For alert box -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
        <script>

        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
        // To show the model
        // jQuery(document).ready(function($){
        // $('#myModal').modal('show');
        // });

        // Validate extensions
        var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
        function Validate(oForm) {
            var arrInputs = oForm.getElementsByTagName("input");
            for (var i = 0; i < arrInputs.length; i++) {
                var oInput = arrInputs[i];
                if (oInput.type == "file") {
                    var sFileName = oInput.value;
                    if (sFileName.length > 0) {
                        var blnValid = false;
                        for (var j = 0; j < _validFileExtensions.length; j++) {
                            var sCurExtension = _validFileExtensions[j];
                            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                                blnValid = true;
                                break;
                            }
                        }
                        
                        if (!blnValid) {
                            // xdialog.alert("Sorry, the image is not valid, allowed extensions are: " + _validFileExtensions.join(", "));
                            // alert("Sorry, the image is not valid, allowed extensions are: " + _validFileExtensions.join(", "));
                            swal("Image Extension Error","Sorry, the image is not valid, allowed extensions are: " + _validFileExtensions.join(", "),"warning");
                            return false;
                        }
                    }
                }
            }
        
            return true;
        }

        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>
    <?php
        // if (!isset($_SESSION)) {
        //     session_start();
        //     }
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $contactErr = $studentErr = $collegeErr = "";
        $name = $email = $contact= $gender = $student = $college_name =$course_name = $passing_year = $ml_knowledge = $know = "";

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

            // VALIDATE Student
            if (empty($_POST["student"])) {
                $studentErr = "Please select one of the option";
            } 
            else {$student = test_input($_POST["student"]);
                  $student = preg_replace("/[^A-Za-z]/","",$student); }

            // VALIDATE Gender
            if (empty($_POST["gender"])) {
                $genderErr = "Please select the Gender";
            } 
            else {$gender = test_input($_POST["gender"]); 
                  $gender = preg_replace("/[^A-Za-z]/","",$gender);}

            // VALIDATE College
            if (empty($_POST["college_name"])) {
                $collegeErr = "Please select the College Name";
            } 
            else {
                $college_name = test_input($_POST["college_name"]); 
                $college_name = preg_replace("/[^A-Za-z0-9 ]/","",$college_name); }

            // VALIDATE course
            if (!empty($_POST["course"])) {
                $course_name = test_input($_POST["course"]);
                $course_name = preg_replace("/[^A-Za-z.]/","",$course_name);
            } 

            // VALIDATE passing year
            if (!empty($_POST["passing_year"])) {
                $passing_year = test_input($_POST["passing_year"]);
                $passing_year = preg_replace("/[^A-Za-z0-9]/","",$passing_year);
            } 
            
            // VALIDATE ml knowledge
            if (!empty($_POST["ml_knowledge"])) {
                $ml_knowledge = test_input($_POST["ml_knowledge"]);
                $ml_knowledge = preg_replace("/[^A-Za-z0-9]/","",$ml_knowledge);
            }

            // // VALIDATE Know about workshop
            if (!empty($_POST["know"])) {
                $know = test_input($_POST["know"]);
                $know = preg_replace("/[^A-Za-z0-9., ]/","",$know);
            }
            
            
        } // FORM CLOSED HERE

        // FILTER OUT BAD CHARACTERS
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
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
                <form method="post" onsubmit="return Validate(this);" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="container">
                    <h1>Registration</h1>
                    <p>Please fill in this form to register for the workshop. In case you face any problem please reach out to us at contact@robaita.com</p>
                    <?php
                    // ALL THE GOOD DATA WOULD COME HERE
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($nameErr=="" and $emailErr=="" and $genderErr=="" and $contactErr=="" and $studentErr=="" and $collegeErr==""){
                        // echo '<div class="alert success"> 
                        // <strong>Thank you for registering with us. You will soon receive an email on your registered mail id.</strong>
                        // </div>';
                        
                        // echo "Name:".$name.time()."<br>";
                        // echo "Email:".$email."<br>";
                        // echo "Contact Number:".$contact."<br>";
                        // echo "Student:".$student."<br>";
                        // echo "Gender:".$gender."<br>";
                        // echo "College Name:".$college_name."<br>";
                        // echo "Course Name:".$course_name."<br>";
                        // echo "Passing Year:".$passing_year."<br>";
                        // echo "ML Knowledge:".$ml_knowledge."<br>";
                        // echo "Know:".$know."<br>";

                        $file_path = "stored_files/".date("d-m-Y")."/";
                        $image_path = "stored_receipts/".date("d-m-Y")."/";
                        if (!is_dir($file_path)) {
                            mkdir($file_path, 0777, true);
                            mkdir($image_path, 0777, true);
                        }
                        $file_name =$file_path.$name."_".time().".txt";
                        $myfile = fopen($file_name, "w") or die("Unable to open file!");
                        fwrite($myfile, "Candidate Name: ".$name."\n");
                        fwrite($myfile, "Email: ".$email."\n");
                        fwrite($myfile, "Contact Number: ".$contact."\n");
                        fwrite($myfile, "Student Status: ".$student."\n");
                        fwrite($myfile, "Gender: ".$gender."\n");
                        fwrite($myfile, "College Name: ".$college_name."\n");
                        fwrite($myfile, "Course Name: ".$course_name."\n");
                        fwrite($myfile, "Passing Year: ".$passing_year."\n");
                        fwrite($myfile, "ML Knowledge: ".$ml_knowledge."\n");
                        fwrite($myfile, "How you know about us: ".$know."\n");
                        fclose($myfile);

                        // Save image
                        // $target_dir = "stored_receipts/".date("d-m-Y")."/";
                        // echo $_FILES["receipt_id"]["name"];
                        $target_file = $image_path . basename($_FILES["receipt_id"]["name"]);
                        // echo $target_file;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        $target_file = $image_path . $name."_".time().".".$imageFileType;
                        // echo $target_file;
                        $uploadOk = 1;
                        
                        // // Check if image file is a actual image or fake image
                        // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        // if($check !== false) {
                        //     // echo "File is an image - " . $check["mime"] . ".";
                        //     $uploadOk = 1;
                        // } else {
                        //     // echo "File is not an image.";
                        //     echo '<script>swal("Sorry!", "This is not a supported image.", "alert");</script>';
                        //     $uploadOk = 0;
                        // }// CHECK END

                        // Check file size
                        if ($_FILES["receipt_id"]["size"] > 5000000) {
                            echo '<script>swal("Sorry!", "Your image is too large, please go back to upload another image.", "warning");</script>';
                            // echo "Sorry, your file is too large.";
                            $uploadOk = 0;
                        } // END

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 1) {
                            if (move_uploaded_file($_FILES["receipt_id"]["tmp_name"], $target_file)) { 
                            // $output = "The file ". htmlspecialchars( basename( $_FILES["receipt_id"]["name"])). " has been uploaded.";
                            // echo '<script>swal("Thank You!", $output, "success");</script>';
                            echo '<script>swal("Thank You!", "You have registered successfully. You will soon receive an email on your registered mail id.", "success");</script>';
                            } else {
                            echo '<script>swal("Sorry!", "Your image is not uploaded, please try again.", "alert");</script>';
                            }
                        } // END

                        // Clear cache and check filesize again
                        // $_SESSION['postdata'] = $_POST;
                        // unset($_POST);
                        // exit;   
                    }  // IF NO ERROR
                } // FORM SUBMISSION ENDS
                    // if (@$_SESSION['postdata']){
                    //     $_POST=$_SESSION['postdata'];
                    //     unset($_SESSION['postdata']);
                    //     }      
                    ?>
                    <hr>

                    <b>Full Name *</b> <span class="error"> <?php echo $nameErr;?></span>
                    <input type="text" placeholder="Enter Full Name" name="name" id="name" required>

                    <b>Email *</b> <span class="error"> <?php echo $emailErr;?></span>
                    <input type="text" placeholder="Enter email" name="email" id="email" required>

                    <b>Mobile Number *</b> <span class="error"><?php echo $contactErr;?></span>
                    <input type="text" placeholder="Enter Mobile Number (10 digits)" name="mobile" id="mobile" required>
                    <label for="gender"><b>Gender *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="gender">Male &nbsp;&nbsp;</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="gender">Female</label><span class="error">  <?php echo $genderErr;?></span>
                    <br>

                    <label for="student"><b>Student *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                    <input type="radio" id="student" name="student" value="student">
                    <label for="student">Yes &nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" id="passed_out" name="student" value="passed_out">
                    <label for="student">Passed Out</label><span class="error"> <?php echo $studentErr;?></span>
                    <br>
                    <!-- <input type="password" placeholder="Enter Password" name="psw" id="psw" required> -->

                    <label for="college_name"><b>College Name *</b></label><span class="error">  <?php echo $collegeErr;?></span>
                    <input type="text" placeholder="College Name" name="college_name" id="college_name" required>

                    <label for="psw-repeat"><b>Courses *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                    <select name="course" id="course">
                        <option value="btech">B.Tech</option>
                        <option value="mtech">M.Tech</option>
                        <option value="bca">BCA</option>
                        <option value="mca">MCA</option>
                        <option value="bba">BBA</option>
                        <option value="mba">MBA</option>
                        <option value="others">Others</option>
                    </select>
                    <br>

                    <label for="year"><b>Year *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                    <select name="passing_year" id="passing_year">
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                        <option value="others">Passed out</option>
                    </select>
                    <br>

                    <label for="ml_knowledge"><b>Machine Leanring Knowledge *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                    <select name="ml_knowledge" id="ml_knowledge">
                        <option value="no">No Knowledge</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advance">Advance</option>
                    </select>
                    <br>

                    <label for="know"><b>How you hear about this workshop?</b></label>
                    <input type="text" placeholder="How you hear about this workshop" name="know" id="know">

                    <label for="receipt"><b>Upload Payement Receipt *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><input type="file" id="receipt_id" accept="image/*" name="receipt_id" required>
                    <a class="image-link" href="assets/img/gallery/sample_receipt.jpeg">Example Receipt</a>
                    <hr>
                    <p>By registering for the workshop, you agree to our <a href="./terms_condition.php">Terms & Privacy</a>.</p>

                    <div class="g-recaptcha" data-sitekey="6LeVxy0bAAAAAFLWipIXY0k2Qz8RTDJrgKNRrq4a"></div>
                    <button  data-toggle="modal" data-target="#myModal" type="submit" class="registerbtn">Register</button>
                    </div>

                    </form>
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
      

