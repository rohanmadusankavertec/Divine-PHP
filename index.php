<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        
        <?php 
        include './Header.php';
        ?>
        
        <center>
        <!--                <div class="sliderimg">
                        </div>-->


        <div class="w3-content w3-section" style="max-width:91%; overflow: hidden;">

            <img class="mySlides w3-animate-fading" src="img/homebanner1.png" style="width:auto; height: 700px;margin-left: -20%;">
            <img class="mySlides w3-animate-fading" src="img/homebanner2.png" style="width:auto; height: 700px;margin-left: -20%;">
            <img class="mySlides w3-animate-fading" src="img/homebanner3.png" style="width:auto; height: 700px;margin-left: -20%;">
            <img class="mySlides w3-animate-fading" src="img/homebanner4.png" style="width:auto; height: 700px;margin-left: -20%;">
            <img class="mySlides w3-animate-fading" src="img/homebanner5.png" style="width:auto; height: 700px;margin-left: -20%;">
        </div>





        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 9000);
            }
        </script>



    </center>


    <div class="container">
        <div id="MainContent_UpdatePanel1">

            <div class="row">
                <div class="col-xs-6 col-sm-4">

                </div>
            </div>
            <div class="row">


                <!--<div class="visible-md" >-->
                <div ></div>
                <!--</div>-->



                <div class="col-xs-12 col-sm-12 col-md-12 HomePageContentBlockWrap text-center">
                    <div class="row text-center" style="align-items: center;">








                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="HomePageContentBlock" style="height: 410px;">
                                <div class="HomePageContentInnerContentTitle">
                                    <a href="Cakes.html">
                                        <h3>Cakes & Sweet Treats</h3>
                                    </a>
                                </div>
                                <a href="Cakes.html">
                                    <div style="width: 100%; height: 220px; background: #fff url('img/home_image01.png') no-repeat top center;">
                                    </div>
                                </a>
                                <div class="HomePageContentInnerContentText" style="font-size: 17px;letter-spacing: 1px;">
                                    <p>
                                        From birthday and wedding cakes to simple desserts and sweet treats, our delectable range cater to any occasion.  <a href="Cakes.html">More Info</a>
                                    </p>
                                </div>
                                <div class="visible-xs" >
                                    <br />
                                    <br />
                                </div>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="HomePageContentBlock" style="height: 410px;">
                                <div class="HomePageContentInnerContentTitle">
                                    <a href="Cakes.html">
                                        <h3>Event Catering</h3>
                                    </a>
                                </div>
                                <a href="Cakes.html">
                                    <div style="width: 100%; height: 220px; background: #fff url('img/home_image02.png') no-repeat top center;">
                                    </div>
                                </a>
                                <div class="HomePageContentInnerContentText" style="font-size: 17px;letter-spacing: 1px;">
                                    <p>
                                        With the ability to customize your own menu, our team always deliver delicious food that will capture your imagination and exceed expectations.  <a href="Cakes.html">More Info</a>
                                    </p>
                                </div>
                                <div class="visible-xs">
                                    <br />
                                    <br />
                                </div>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="HomePageContentBlock" style="height: 410px;">
                                <div class="HomePageContentInnerContentTitle">
                                    <a href="OurMenu.html">
                                        <h3>Order Online</h3>
                                    </a>
                                </div>
                                <a href="OurMenu.html">
                                    <div style="width: 100%; height: 220px; background: #fff url('img/home_image03.png') no-repeat top center;">
                                    </div>
                                </a>
                                <div class="HomePageContentInnerContentText" style="font-size: 17px;letter-spacing: 1px;">
                                    <p>
                                        Place your order for delivery or take-away with our fast and secure online ordering feature.
                                    </p>
                                </div>
                                <div class="visible-xs">
                                    <br />
                                    <br />
                                </div>
                            </div>
                            </div>
                        </div>







                    </div>
                </div>
            </div>



        </div>
    </div>
    <?php 
    include './Footer.php';
        ?>
    </body>
</html>
