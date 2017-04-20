<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (isset($_SESSION['user_type'])) {
    if (!$_SESSION['user_type'] == "admin") {
        ?>

        <script>
            window.location = 'index.php';
        </script>

        <?php
    }
} else {
    ?>
    <script>
        window.location = 'index.php';
    </script>

    <?php
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-purple">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.html">Devine Foods</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <!-- #END# Tasks -->
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="admin/images/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['first']?></div>
                        <div class="email"><?php echo $_SESSION['email']?> </div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="admin_profile.php"><i class="material-icons">person</i>Profile</a></li>
                                <!--                            <li role="seperator" class="divider"></li>-->

                                <li><a href="src/Login.php?action=logout"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <?php
                        if(basename($_SERVER['PHP_SELF'])=="admin_dashboard.php"){
                           ?>
                            <li class="active">
                          <?php  
                        }else{
                            ?>
                            <li>
                          <?php  
                        }
                        ?>
                            <a href="admin_dashboard.php">
                                <i class="material-icons" >home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <?php
                        if(basename($_SERVER['PHP_SELF'])=="admin_product.php"){
                           ?>
                            <li class="active">
                          <?php  
                        }else{
                            ?>
                            <li>
                          <?php  
                        }
                        ?>
                            <a href="admin_product.php">
                                <i class="material-icons">cake</i>
                                <span>Products</span>
                            </a>
                        </li>
                        <?php
                        if(basename($_SERVER['PHP_SELF'])=="admin_orders.php"){
                           ?>
                            <li class="active">
                          <?php  
                        }else{
                            ?>
                            <li>
                          <?php  
                        }
                        ?>
                            <a href="admin_orders.php">
                                <i class="material-icons">event_available</i>
                                <span>Orders</span>
                            </a>
                        </li>
                        <?php
                        if(basename($_SERVER['PHP_SELF'])=="admin_users.php"){
                           ?>
                            <li class="active">
                          <?php  
                        }else{
                            ?>
                            <li>
                          <?php  
                        }
                        ?>
                            <a href="admin_users.php">
                                <i class="material-icons">person</i>
                                <span>Users</span>
                            </a>
                        </li>
                        <?php
                        if(basename($_SERVER['PHP_SELF'])=="admin_contact.php"){
                           ?>
                            <li class="active">
                          <?php  
                        }else{
                            ?>
                            <li>
                          <?php  
                        }
                        ?>
                            <a href="admin_contact.php">
                                <i class="material-icons">mail</i>
                                <span>Contact</span>
                            </a>
                        </li>

                        <?php
                        if(basename($_SERVER['PHP_SELF'])=="admin_admins.php"){
                           ?>
                            <li class="active">
                          <?php  
                        }else{
                            ?>
                            <li>
                          <?php  
                        }
                        ?>
                            <a href="admin_admins.php">
                                <i class="material-icons">group_add</i>
                                <span>Admins</span>
                            </a>
                        </li>
                        <?php
                        if(basename($_SERVER['PHP_SELF'])=="admin_profile.php"){
                           ?>
                            <li class="active">
                          <?php  
                        }else{
                            ?>
                            <li>
                          <?php  
                        }
                        ?>
                            <a href="admin_profile.php">
                                <i class="material-icons">layers</i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="src/Login.php?action=logout">
                                <i class="material-icons">https</i>
                                <span>Logout</span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2017 <a href="index.php">Divine Foods</a>.
                    </div>
                    <div class="version">
                        Web Solution By <a href="http://www.vertecitsolutions.com">Vertec IT Solutions</a>.
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <aside id="rightsidebar" class="right-sidebar">
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                        <ul class="demo-choose-skin">
                            <li data-theme="red">
                                <div class="red"></div>
                                <span>Red</span>
                            </li>
                            <li data-theme="pink">
                                <div class="pink"></div>
                                <span>Pink</span>
                            </li>
                            <li data-theme="purple" class="active">
                                <div class="purple"></div>
                                <span>Purple</span>
                            </li>
                            <li data-theme="deep-purple">
                                <div class="deep-purple"></div>
                                <span>Deep Purple</span>
                            </li>
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                                <span>Indigo</span>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                                <span>Blue</span>
                            </li>
                            <li data-theme="light-blue">
                                <div class="light-blue"></div>
                                <span>Light Blue</span>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                                <span>Cyan</span>
                            </li>
                            <li data-theme="teal">
                                <div class="teal"></div>
                                <span>Teal</span>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                                <span>Green</span>
                            </li>
                            <li data-theme="light-green">
                                <div class="light-green"></div>
                                <span>Light Green</span>
                            </li>
                            <li data-theme="lime">
                                <div class="lime"></div>
                                <span>Lime</span>
                            </li>
                            <li data-theme="yellow">
                                <div class="yellow"></div>
                                <span>Yellow</span>
                            </li>
                            <li data-theme="amber">
                                <div class="amber"></div>
                                <span>Amber</span>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                                <span>Orange</span>
                            </li>
                            <li data-theme="deep-orange">
                                <div class="deep-orange"></div>
                                <span>Deep Orange</span>
                            </li>
                            <li data-theme="brown">
                                <div class="brown"></div>
                                <span>Brown</span>
                            </li>
                            <li data-theme="grey">
                                <div class="grey"></div>
                                <span>Grey</span>
                            </li>
                            <li data-theme="blue-grey">
                                <div class="blue-grey"></div>
                                <span>Blue Grey</span>
                            </li>
                            <li data-theme="black">
                                <div class="black"></div>
                                <span>Black</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </aside>
            <!-- #END# Right Sidebar -->
        </section>
    </body>
</html>
