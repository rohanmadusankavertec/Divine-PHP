<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="boostrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/mainmenu.css"/>

        <link rel="shortcut icon" href="img/divine.ico"/>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

        <!--<link rel="stylesheet" type="text/css" href="css/slider.css">-->
        <link href="css/homecss.css" rel="stylesheet"/>
        <style type="text/css">

            #footer {
                position: absolute;
                bottom: -185px;
                width: 100%;
                height: 170px;
                padding-top: 5px;
            }
            article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
                display: block;
            }
            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            article, aside, footer, header, hgroup, main, nav, section {
                display: block;
            }

            html {
                font-size: 10px;
                -webkit-tap-highlight-color: rgba(0,0,0,0);
            }

            html {
                font-family: sans-serif;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }


            :before, :after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            :before, :after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            @media screen and (min-width: 0px) and (max-width: 700px) {
                #menubar1 { display: none; }   /* hide it elsewhere */
                #menubar2 { display: none; }   
                #menubar3 { display: block; }   
                #submenuforci { display: none; }   
            }
            @media screen and (min-width: 701px) and (max-width: 1200px) {
                #menubar1 { display: none; }   /* hide it elsewhere */
                #menubar2 { display: block; }   
                #menubar3 { display: none; }
                #submenuforci { display: block; }
            }

            @media screen and (min-width: 1201px) and (max-width: 10000px) {
                #menubar1 { display: block; }  /* show it on small screens */
                #menubar2 { display: none; }  
                #menubar3 { display: none; }
                #submenuforci { display: block; }

            }

        </style>
    </head>
    <body>
        <div class="container" >
            <div class="nav navbar-right" style="float: right; padding: 10px 10px 0 0;" id="submenuforci">
                <div id="UpdatePanelCartTotalBadgePhone">

                    <a href="Login.html" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                    <a href="Login.html" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                    <a href="ShoppingCart.html" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>

                </div>
            </div>
            <div class="menubar" id="menubar1" style="font-family: brandon-grotesque-bold;">
                <nav>
                    <ul>
                        <li>
                            <a href="AboutUs.html">About Us</a>
                        </li>
                        <li>
                            <a href="OurMenu.html">Our menu</a>
                        </li>
                        <li>
                            <a href="Cakes.html">Cakes</a>
                        </li>
                        <li>
                            <a href="Pastry&Bakery.html">Pastry & bakery</a>
                        </li>
                        <li class="logo">
                            <a href="index.html">Divine Cake</a>
                        </li>

                        <li>
                            <a href="DeliveryAreas.html">Delivery Areas</a>
                        </li>



                        <li>
                            <a href="Outlets.html">Outlets</a>
                        </li>
                        <li>
                            <a href="FAQ.html">FAQ</a>
                        </li>
                        <li>
                            <a href="Contact.html">Contact</a>
                        </li>


                    </ul>
                </nav>
            </div>

            <div class="menubar2" id="menubar2">
                <center>
                    <a href="index.html" style="margin-left: 30%;">
                        <img src="img/logo-new-edited2.png" width="100" height="100"/>
                    </a>
                </center>
                <nav style="margin-top: -40px; margin-bottom: -60px;">
                    <ul>
                        <li>
                            <a href="AboutUs.html">About Us</a>
                        </li>
                        <li>
                            <a href="OurMenu.html">Our menu</a>
                        </li>
                        <li>
                            <a href="Cakes.html">Cakes</a>
                        </li>
                        <li>
                            <a href="Pastry&Bakery.html">Pastry & bakery</a>
                        </li>

                        <li>
                            <a href="DeliveryAreas.html">Delivery Areas</a>
                        </li>



                        <li>
                            <a href="Outlets.html">Outlets</a>
                        </li>
                        <li>
                            <a href="FAQ.html">FAQ</a>
                        </li>
                        <li>
                            <a href="Contact.html">Contact</a>
                        </li>


                    </ul>
                </nav>
            </div>


            <div class="menubar3" id="menubar3"  style="width: 100%;">
                <div class="navbar navbar-default hidden-print" style="z-index:1; width: 110%;margin-left: -5%;">
                    <div class="container">
                        <a href="index.html" class="navbar-brand">
                            <img id="ImageLogo" src="img/logo-new-edited2.png" alt="Divine" style="border-style:None;height:80px;" /></a>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="nav navbar-right visible-xs hidden-sm hidden-md hidden-lg" style="float: right; padding: 10px 10px 0 0;">
                                <div id="UpdatePanelCartTotalBadgePhone">

                                    <a href="Login.html" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                                    <a href="Login.html" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                                    <a href="ShoppingCart.html" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>

                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="AboutUs.html">About Us</a>
                                </li>
                                <li>
                                    <a href="OurMenu.html">Our menu</a>
                                </li>
                                <li>
                                    <a href="Cakes.html">Cakes</a>
                                </li>
                                <li>
                                    <a href="Pastry&Bakery.html">Pastry & bakery</a>
                                </li>

                                <li>
                                    <a href="DeliveryAreas.html">Delivery Areas</a>
                                </li>
                                <li>
                                    <a href="Outlets.html">Outlets</a>
                                </li>

                                <li>
                                    <a href="Cakes.html">Price Guide</a>
                                </li>
                                <li>
                                    <a href="Contact.html">Contact</a>
                                </li>


                            </ul>
                            <ul class="nav navbar-nav navbar-right visible-xs hidden-sm hidden-md hidden-lg">
                                <li><a href="Login.html" class="visible-xs hidden-sm hidden-md hidden-lg">Register</a></li>
                                <li><a href="Login.html" class="visible-xs hidden-sm hidden-md hidden-lg">Log in</a></li>
                            </ul>
                        </div>
                        <div class="hidden-xs visible-sm visible-md visible-lg" style="margin-top: -100px; margin-right: -10px; float: right;">
                            <div id="UpdatePanelCartTotalBadgePad">
                                <a href="ShoppingCart.html" id="linkCartCount" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPad">Cart</span></a>
                            </div>                        
                        </div>
                    </div>
                </div>

            </div>



        </div>

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







                        <!--    <div class="col-xs-12 col-sm-5 col-md-5">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="col-xs-12 col-sm-12 col-md-12 HomePageContentInnerContentWrap">
                                        <div class="HomePageContentBlock" style="height: 430px;">
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
                                                    From birthday and wedding cakes to simple desserts and sweet treats, our delectable range cater to any occasion.  
                                                    <a href="Cakes.html">More Info</a>
                                                </p>
                                            </div>
                                            <div class="visible-xs" >
                                                <br />
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-5">
                                <div class="col-xs-12 col-sm-12 col-md-12">
    
    
                                    <div class="col-xs-12 col-sm-12 col-md-12 HomePageContentInnerContentWrap">
                                        <div class="HomePageContentBlock" style="height: 430px;">
                                            <div class="HomePageContentInnerContentTitle">
                                                <a href="Catering.html">
                                                    <h3>Event Catering</h3>
                                                </a>
                                            </div>
                                            <a href="Catering.html">
                                                <div style="width: 100%; height: 220px; background: #fff url('img/home_image02.png') no-repeat top center;">
                                                </div>
                                            </a>
                                            <div class="HomePageContentInnerContentText" style="font-size: 17px;letter-spacing: 1px;">
                                                <p>
                                                    With the ability to customize your own menu, our team always deliver delicious food that will capture your imagination and exceed expectations.  
                                                    <a href="Cakes.html">More Info</a>
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
    
                            <div class="col-xs-12 col-sm-5 col-md-5">
                                <div class="col-xs-12 col-sm-12 col-md-12">
    
                                    <div class="col-xs-12 col-sm-12 col-md-12 HomePageContentInnerContentWrap" >
                                        <div class="HomePageContentBlock" style="height: 430px;">
                                            <div class="HomePageContentInnerContentTitle">
                                                <a href="OnlineMenu.html">
                                                    <h3>Order Online</h3>
                                                </a>
                                            </div>
                                            <a href="OnlineMenu.html">
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
                        -->




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






<!--
                        <div class="col-xs-12 col-sm-4 col-md-4 HomePageContentInnerContentWrap">
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



                        <div class="col-xs-12 col-sm-4 col-md-4 HomePageContentInnerContentWrap">
                            <div class="HomePageContentBlock" style="height: 410px;">
                                <div class="HomePageContentInnerContentTitle">
                                    <a href="Catering.html">
                                        <h3>Event Catering</h3>
                                    </a>
                                </div>
                                <a href="Catering.html">
                                    <div style="width: 100%; height: 220px; background: #fff url('img/home_image02.png') no-repeat top center;">
                                    </div>
                                </a>
                                <div class="HomePageContentInnerContentText" style="font-size: 17px;letter-spacing: 1px;">
                                    <p>
                                        With the ability to customize your own menu, our team always deliver delicious food that will capture your imagination and exceed expectations.  <a href="Catering.html">More Info</a>
                                    </p>
                                </div>
                                <div class="visible-xs">
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-4 col-md-4 HomePageContentInnerContentWrap">
                            <div class="HomePageContentBlock" style="height: 410px;">
                                <div class="HomePageContentInnerContentTitle">
                                    <a href="OnlineMenu.html">
                                        <h3>Order Online</h3>
                                    </a>
                                </div>
                                <a href="OnlineMenu.html">
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
                        </div>-->



                    </div>
                </div>
            </div>



        </div>
    </div>






    <footer id="footer">
        <div id="fb-root" class=" fb_reset">
            <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                <div>
                </div>
            </div>
            <div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div>

                </div>
            </div></div>
        <div class="container">
            <div class="footer-content">
                <div class="hidden-xs"><br></div>
                <div class="visible-lg"><br></div>
                <div class="text-center hidden-print" style="font-size: 16px;letter-spacing: 1px; ">
                    <ul>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 0; border-right: 1px solid #808080;"><a href="index.html">Home</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 0; border-right: 1px solid #808080;"><a href="OurMenu.html">Our Menu</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 10px; border-right: 1px solid #808080;"><a href="Cakes.html">Cakes</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 10px; border-right: 1px solid #808080;"><a href="Pastry&Bakery.html">Pastry & Bakery</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 10px; border-right: 1px solid #808080;"><a href="DeliveryAreas.html">Delivery Areas</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 10px; border-right: 1px solid #808080;"><a href="Outlets.html">Outlets</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 10px; border-right: 1px solid #808080;"><a href="Policies.html">Policies</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 10px; border-right: 1px solid #808080;"><a href="FAQ.html">FAQ</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 10px; border-right: 1px solid #808080;"><a href="Contact.html">Contact</a></li>
                        <li style="display: inline; list-style-type: none; padding: 0 10px 0 10px; "><a href="AboutUs.html">About Us</a></li>
                    </ul>

                </div><br>
                <p class="text-center" style="font-size: 12px;letter-spacing: 1px;color:#d7cfc1;">
                    <small> Divine Foods (Pvt) Ltd. No 32,  Queen's Rd, Colombo, Sri Lanka.  Tel: (+94) 11 2 583598</small>
                    <br>
                	<small>© 2017 Copyright Divine Foods | Web Solution By <a href="http://vertecitsolutions.com" target="_blank">vertecitsolutions.com</a></small>
                
                
                
                </p>
            </div>
        </div>
    </footer>
    </body>
</html>
