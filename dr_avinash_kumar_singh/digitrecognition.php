<!DOCTYPE html>

<html lang="en">

<!-- bs4 css -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"/>

	

<!-- css pie -->

<link rel="stylesheet" href="css/digitrecognition-pie.css">



<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<!-- Popper JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>



<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>



<!-- TensorFlow.js script -->

<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest"> </script>



	

<!-- canvas script -->

<script src="js/digitrecognition-fabric.js"></script>


<!-- main script -->

<script src = "js/digit_recognition_config.js" > </script>
<script src = "js/clipart_recognition-pie.js">     </script>	


<!-- main css -->

<link rel = "stylesheet" href="css/digitrecognition-main.css" >



<?php include 'header.php';?>



<div id="main">

    <div id="research" class="page">

        <!-- First Section - Research -->

        <div class="pageheader">

            <div class="headercontent">

                <div class="section-container">

                    <h2 class="title">Handwritten Digit Recognition</h2>

                    <div class="row">

                        <div class="col" style ='margin-left:100px;'>

                            <h4 id ='status' >Loading Model... it may take few seconds </h4>	  

                            <canvas id="canvas" width="300" height="300" class="canvas" style="border:1px solid #b9bfc9;margin-top:25px;"></canvas>

                            <div class="btn-group" style = 'margin-top:40px; '>

                            <input type="range" min="5" max="20" value="10" class="slider" id="myRange" style ='margin-top:20px;'>

                            </br>

                            <button type="button" class="btn btn-outline-primary" onclick ='erase()' disabled>Clear</button>

                            </div>   

                        </div>

                    <div class="col">

                        <section style="margin-top:120px">
                            <h3> Predicted Classes...</h3>
                            <div class="pieID pie"></div>

                            <ul class="pieID legend">

                                <li>

                                    <em id = "sym1"></em>

                                    <span id = "prob1" ></span>

                                </li>

                                <li>

                                    <em id = "sym2"></em>

                                    <span id = "prob2"></span>

                                </li>

                                <li>

                                    <em id = "sym3"></em>

                                    <span id = "prob3"></span>

                                </li>


                            </ul>

                        </section>

                    </div>

                </div>  

                </body>

                

                <script>

                    console.log('starting');

                    start('en')

                </script>

                

            </div>

        </div>



    </div>

</div>

</html>



