<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/divine.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DIVINE | FOODS</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="admin/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="admin/plugins/animate-css/animate.css" rel="stylesheet" />

        <link href="admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <link href="admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <!-- JQuery DataTable Css -->
        <link href="admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Custom Css -->
        <link href="admin/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="admin/css/themes/all-themes.css" rel="stylesheet" />
        
        
        
        
        <script type="text/javascript">
            function getAjaxObject() {
                var xmlHttp;
                if (window.XMLHttpRequest) {
                    xmlHttp = new XMLHttpRequest();
                } else
                {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                return xmlHttp;
            }
            function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
            
            function Update() {
               swal("Good job!", "You clicked the button!", "success");
                document.getElementById("outputmsg").className = "hidden";

                var first = document.getElementById("first").value;
                var last = document.getElementById("last").value;
                var nic = document.getElementById("nic").value;
                var gender = document.getElementById("gender").value;
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                var rpassword = document.getElementById("rpassword").value;
                var email = document.getElementById("email").value;
                if (first === "") {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please Enter the First Name ...";
                } else if (last === "") {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please Enter the Last Name ...";
                } else if (nic === "") {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please Enter the NIC Number ...";
                } else if (gender === "") {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please select the gender ...";
                } else if (email === "") {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please Enter the Email Address ...";
                } else if (!validateEmail(email)) {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please Enter a Valid Email ...";
                }else if (username === "") {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please Enter the Username ...";
                } else if (password === "") {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please Enter the Password ...";
                } else if (rpassword === "") {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Please Enter the Repeat Password ...";
                } else if (password !== rpassword) {
                    document.getElementById("outputmsg").className = "alert alert-warning";
                    document.getElementById("outputmsg").innerHTML = "Passwords did not matched ...";
                } else {
                    var xmlHttp = getAjaxObject();
                    xmlHttp.onreadystatechange = function ()
                    {
                        if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                        {
                            var reply = xmlHttp.responseText;
                            if (reply === "Success") {
                                swal("Good job!", "Updated Profile Successfully!", "success");
                                setTimeout("window.location = 'admin_profile.php';", "3000");
                            } else {
                                swal("Error!", "Something went wronge :)", "error");
                            }
                        }
                    };
                    xmlHttp.open("POST", "src/Admins.php?action=update&first=" + first + "&last=" + last + "&nic=" + nic + "&gender=" + gender + "&username=" + username + "&password=" + password  + "&email=" + email, true);
                    xmlHttp.send();
                }
            }
        </script>
        
        
        
    </head>
    <body class="theme-purple">
        <!-- Page Loader -->
        <?php
        include './admin_header.php';
        include_once './src/DBConnection.php';
        $first = "";
        $last = "";
        $nic = "";
        $gender = "";
        $email = "";
        $username = "";
        $password = "";
        $sql = "SELECT id,first,last,nic,gender,username,email,password FROM admin where id='".$_SESSION["user_id"]."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $first = $row["first"];
                $last = $row["last"];
                $nic = $row["nic"];
                $gender = $row["gender"];
                $email = $row["email"];
                $username = $row["username"];
                $password = $row["password"];
            }
        }
        $conn->close();
        ?>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Profile</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    My Profile
                                </h2>

                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="hidden" id="outputmsg">
                                </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="first" class="form-control" placeholder="First Name" value="<?php echo $first; ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="last" class="form-control" placeholder="Last Name" value="<?php echo $last; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="nic" class="form-control" placeholder="NIC" value="<?php echo $nic; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick" id="gender">
                                            <option value="">-- Select Gender --</option>

                                            <?php
                                            if ($gender == "1") {
                                                ?>
                                                <option value="1" selected="">Male</option>
                                                <option value="0">Female</option>

                                                <?php
                                            } else if ($gender == "0") {
                                                ?>
                                                <option value="1">Male</option>
                                                <option value="0" selected="">Female</option>
                                                <?php
                                            } else {
                                                ?>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                                
                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>"  />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" id="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" id="rpassword" class="form-control" placeholder="Repeat Password"  value="<?php echo $password; ?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix demo-button-sizes">

                                        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2" style="float: right;">
                                            <button type="button" class="btn btn-primary waves-effect" onclick="Update();">Update</button>
                                        </div>

                                    </div>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Jquery Core Js -->
        <script src="admin/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="admin/plugins/node-waves/waves.js"></script>

         <!-- SweetAlert Plugin Js -->
    <script src="admin/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="admin/js/pages/ui/dialogs.js"></script>
         <!-- Bootstrap Notify Plugin Js -->
    <script src="admin/plugins/bootstrap-notify/bootstrap-notify.js"></script>
        
        <!-- Custom Js -->
        <script src="admin/js/admin.js"></script>

        <!-- Demo Js -->
        <script src="admin/js/demo.js"></script>
    </body>
</html>
