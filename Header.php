<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <!-- Latest compiled and minified CSS -->
         <?php
         define("LAYOUT_URL","http://localhost/divine/");
         ?>
        <link rel="stylesheet" href="<?php echo LAYOUT_URL;?>boostrap/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="boostrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="<?php echo LAYOUT_URL;?>css/mainmenu.css"/>

        <link rel="shortcut icon" href="<?php echo LAYOUT_URL;?>img/divine.ico"/>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

        <!--<link rel="stylesheet" type="text/css" href="css/slider.css">-->
        <link href="<?php echo LAYOUT_URL;?>css/home.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container" >
            <div class="nav navbar-right" style="float: right; padding: 10px 10px 0 0;" id="submenuforci">
                <div id="UpdatePanelCartTotalBadgePhone">

                    <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                    <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                    <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>

                </div>
            </div>
            <div class="menubar" id="menubar1" style="font-family: brandon-grotesque-bold;">
                <nav>
                    <ul>
                        <li>
                            <a href="AboutUs.php">About Us</a>
                        </li>
                        <li>
                            <a href="OurMenu.php">Our menu</a>
                        </li>
                        <li>
                            <a href="Cakes.php">Cakes</a>
                        </li>
                        <li>
                            <a href="Pastry&Bakery.php">Pastry & bakery</a>
                        </li>
                        <li class="logo">
                            <a href="index.php">Divine Cake</a>
                        </li>

                        <li>
                            <a href="DeliveryAreas.php">Delivery Areas</a>
                        </li>



                        <li>
                            <a href="Outlets.php">Outlets</a>
                        </li>
                        <li>
                            <a href="FAQ.php">FAQ</a>
                        </li>
                        <li>
                            <a href="Contact.php">Contact</a>
                        </li>


                    </ul>
                </nav>
            </div>

            <div class="menubar2" id="menubar2">
                <center>
                    <a href="index2.html" style="margin-left: 30%;">
                        <img src="img/logo-new-edited2.png" width="100" height="100"/>
                    </a>
                </center>
                <nav style="margin-top: -40px; margin-bottom: -60px;">
                    <ul>
                        <li>
                            <a href="AboutUs.php">About Us</a>
                        </li>
                        <li>
                            <a href="OurMenu.php">Our menu</a>
                        </li>
                        <li>
                            <a href="Cakes.php">Cakes</a>
                        </li>
                        <li>
                            <a href="Pastry&Bakery.php">Pastry & bakery</a>
                        </li>

                        <li>
                            <a href="DeliveryAreas.php">Delivery Areas</a>
                        </li>



                        <li>
                            <a href="Outlets.php">Outlets</a>
                        </li>
                        <li>
                            <a href="FAQ.php">FAQ</a>
                        </li>
                        <li>
                            <a href="Contact.php">Contact</a>
                        </li>


                    </ul>
                </nav>
            </div>


            <div class="menubar3" id="menubar3"  style="width: 100%;">
                <div class="navbar navbar-default hidden-print" style="z-index:1; width: 110%;margin-left: -5%;">
                    <div class="container">
                        <a href="index.php" class="navbar-brand">
                            <img id="ImageLogo" src="img/logo-new-edited2.png" alt="Divine" style="border-style:None;height:80px;" /></a>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="nav navbar-right visible-xs hidden-sm hidden-md hidden-lg" style="float: right; padding: 10px 10px 0 0;">
                                <div id="UpdatePanelCartTotalBadgePhone">

                                    <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                                    <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                                    <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>

                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="AboutUs.php">About Us</a>
                                </li>
                                <li>
                                    <a href="OurMenu.php">Our menu</a>
                                </li>
                                <li>
                                    <a href="Cakes.php">Cakes</a>
                                </li>
                                <li>
                                    <a href="Pastry&Bakery.php">Pastry & bakery</a>
                                </li>

                                <li>
                                    <a href="DeliveryAreas.php">Delivery Areas</a>
                                </li>
                                <li>
                                    <a href="Outlets.php">Outlets</a>
                                </li>

                                <li>
                                    <a href="Cakes.php">Price Guide</a>
                                </li>
                                <li>
                                    <a href="Contact.php">Contact</a>
                                </li>


                            </ul>
                            <ul class="nav navbar-nav navbar-right visible-xs hidden-sm hidden-md hidden-lg">
                                <li><a href="Login.php" class="visible-xs hidden-sm hidden-md hidden-lg">Register</a></li>
                                <li><a href="Login.php" class="visible-xs hidden-sm hidden-md hidden-lg">Log in</a></li>
                            </ul>
                        </div>
                        <div class="hidden-xs visible-sm visible-md visible-lg" style="margin-top: -100px; margin-right: -10px; float: right;">
                            <div id="UpdatePanelCartTotalBadgePad">
                                <a href="ShoppingCart.php" id="linkCartCount" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPad">Cart</span></a>
                            </div>                        
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </body>
</html>
