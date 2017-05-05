

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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="boostrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/mainmenu.css"/>

        <link rel="shortcut icon" href="img/divine.ico"/>

        <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">-->

        <!--<link rel="stylesheet" type="text/css" href="css/slider.css">-->
        <link href="css/homecss.css" rel="stylesheet"/>


        <style type="text/css">

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


                    <?php
                    if (isset($_SESSION['user_type'])) {
                        if ($_SESSION['user_type'] == "user") {
                            ?>
                            <span id="lblCartLinkOnPhone">Hi <?php echo $_SESSION['first'] ?></span>
                            <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                            <a href="src/Login.php?action=logout" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Logout</span></a>

                            <?php
                        } else {
                            ?>
                            <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                            <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                            <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                            
                            <?php
                        }
                    } else {
                        ?>
                        <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                        <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                        <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                            
                        <?php
                    }
                    ?>









                </div>
            </div>
            <div class="menubar" id="menubar1" style="font-family: brandon-grotesque-bold;">
                <nav>
                    <ul>


                        <li>
                            <a href="Cakes.php">Cakes</a>
                        </li>
                        <li>
                            <a href="Pastry&Bakery.php">Pastry & bakery</a>
                        </li>
                        <li>
                            <a href="Beverages.php">Beverages</a>
                        </li>
                        <li>
                            <a href="OurMenu.php">Our menu</a>
                        </li>
                        <li class="logo">
                            <a href="index.php">Divine Cake</a>
                        </li>
                        <li>
                            <a href="AboutUs.php">About Us</a>
                        </li>
                        <li>
                            <a href="DeliveryAreas.php">Delivery Areas</a>
                        </li>
                        <li>
                            <a href="FindUs.php">Find Us</a>
                        </li>
                        <li>
                            <a href="FAQ.php">FAQ</a>
                        </li>


                    </ul>
                </nav>
            </div>

            <div class="menubar2" id="menubar2">
                <center>
                    <a href="index.php" style="margin-left: 30%;">
                        <img src="img/logo-new-edited2.png" width="100" height="100"/>
                    </a>
                </center>
                <nav style="margin-top: -40px; margin-bottom: -60px;">
                    <ul>
                        <li>
                            <a href="Cakes.php">Cakes</a>
                        </li>
                        <li>
                            <a href="Pastry&Bakery.php">Pastry & bakery</a>
                        </li>
                        <li>
                            <a href="Beverages.php">Beverages</a>
                        </li>
                        <li>
                            <a href="OurMenu.php">Our menu</a>
                        </li>
                        <li>
                            <a href="AboutUs.php">About Us</a>
                        </li>
                        <li>
                            <a href="DeliveryAreas.php">Delivery Areas</a>
                        </li>
                        <li>
                            <a href="FindUs.php">Find Us</a>
                        </li>
                        <li>
                            <a href="FAQ.php">FAQ</a>
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

<!--                                    <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                                    <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                                    <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>-->



                                    <?php
                                    if (isset($_SESSION['user_type'])) {
                                        if ($_SESSION['user_type'] == "user") {
                                            ?>
                                            <span id="lblCartLinkOnPhone">Hi <?php echo $_SESSION['first'] ?></span>
                                            <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                                            <a href="src/Login.php?action=logout" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Logout</span></a>

                                            <?php
                                        } else {
                                            ?>
                                            <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                                            <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                                            <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                            
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                                        <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                                        <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                            
                                        <?php
                                    }
                                    ?>






                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="Cakes.php">Cakes</a>
                                </li>
                                <li>
                                    <a href="Pastry&Bakery.php">Pastry & bakery</a>
                                </li>
                                <li>
                                    <a href="Beverages.php">Beverages</a>
                                </li>
                                <li>
                                    <a href="OurMenu.php">Our menu</a>
                                </li>
                                <li>
                                    <a href="AboutUs.php">About Us</a>
                                </li>
                                <li>
                                    <a href="DeliveryAreas.php">Delivery Areas</a>
                                </li>
                                <li>
                                    <a href="FindUs.php">Find Us</a>
                                </li>
                                <li>
                                    <a href="FAQ.php">FAQ</a>
                                </li>


                            </ul>
                            <ul class="nav navbar-nav navbar-right visible-xs hidden-sm hidden-md hidden-lg">
                                <!--                                <li><a href="Login.php" class="visible-xs hidden-sm hidden-md hidden-lg">Register</a></li>
                                                                <li><a href="Login.php" class="visible-xs hidden-sm hidden-md hidden-lg">Log in</a></li>-->

                                <?php
                                if (isset($_SESSION['user_type'])) {
                                    if ($_SESSION['user_type'] == "user") {
                                        ?>
                                        <span id="lblCartLinkOnPhone">Hi <?php echo $_SESSION['first'] ?></span>
                                        <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                                        <a href="src/Login.php?action=logout" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Logout</span></a>

                                        <?php
                                    } else {
                                        ?>
                                        <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                                        <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                                        <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                            
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-log-in"></span> <span id="lblCartLinkOnPhone1">Login</span></a>
                                    <a href="Login.php" class="btn btn-link"><span class="glyphicon glyphicon-user"></span> <span id="lblCartLinkOnPhone">Register</span></a>
                                    <a href="ShoppingCart.php" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPhone">Cart</span></a>
                            
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>
                        <!--                        <div class="hidden-xs visible-sm visible-md visible-lg" style="margin-top: -100px; margin-right: -10px; float: right;">
                                                    <div id="UpdatePanelCartTotalBadgePad">
                                                        <a href="ShoppingCart.php" id="linkCartCount" class="btn btn-link"><span class="glyphicon glyphicon-shopping-cart"></span> <span id="lblCartLinkOnPad">Cart</span></a>
                                                    </div>                        
                                                </div>-->
                    </div>
                </div>

            </div>



        </div>
    </body>
</html>
