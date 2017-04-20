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

            function Save() {

                document.getElementById("outputmsg").className = "hidden";
                document.getElementById("errormsg").className = "hidden";
                var first = document.getElementById("first").value;
                var last = document.getElementById("last").value;
                var nic = document.getElementById("nic").value;
                var gender = document.getElementById("gender").value;
                var subject = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                var rpassword = document.getElementById("rpassword").value;

                document.getElementById("firste").innerHTML = "";
                document.getElementById("laste").innerHTML = "";
                document.getElementById("emaile").innerHTML = "";
                document.getElementById("contacte").innerHTML = "";
                document.getElementById("subjecte").innerHTML = "";
                document.getElementById("messagee").innerHTML = "";
                if (first === "") {
                    document.getElementById("firste").innerHTML = "Please Enter the First Name ...";
                } else if (last === "") {
                    document.getElementById("laste").innerHTML = "Please Enter the Last Name ...";
                } else if (nic === "") {
                    document.getElementById("emaile").innerHTML = "Please Enter the NIC Number ...";
                } else if (contact === "") {
                    document.getElementById("contacte").innerHTML = "Please Enter the Contact no ...";
                } else if (subject === "") {
                    document.getElementById("subjecte").innerHTML = "Please Enter the Subject ...";
                } else if (message === "") {
                    document.getElementById("messagee").innerHTML = "Please Enter the Messages ...";
                } else {

                    var xmlHttp = getAjaxObject();
                    xmlHttp.onreadystatechange = function ()
                    {
                        if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                        {
                            var reply = xmlHttp.responseText;
                            if (reply === "Success") {

                                document.getElementById("successmsg").className = "alert alert-success";
                            } else {
                                document.getElementById("errormsg").className = "alert alert-danger";
                            }
                        }
                    };

                    xmlHttp.open("POST", "src/Admins.php?action=save&first=" + first + "&last=" + last + "&email=" + email + "&contact=" + contact + "&subject=" + subject + "&message=" + message, true);
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
        ?>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Admin</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Register an Admin
                                </h2>

                            </div>
                            <div class="body">
                                <div class="hidden" id="outputmsg">
                                        <strong>Success !</strong> Admin Saved Successfully ...
                                    </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="first" class="form-control" placeholder="First Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="last" class="form-control" placeholder="Last Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nic" class="form-control" placeholder="NIC" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick" name="gender">
                                            <option value="">-- Select Gender --</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="username" class="form-control" placeholder="Username" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="password" class="form-control" placeholder="Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="rpassword" class="form-control" placeholder="Repeat Password" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix demo-button-sizes">
                                        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2" style="float: right;">
                                            <button type="button" onclick="Save()" class="btn btn-primary waves-effect">Save</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Admin Details
                                </h2>

                            </div>
                            <div class="body">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>NIC</th>
                                            <th>Gender</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT id,first,last,nic,gender,username FROM admin";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $row["id"] ?></td>
                                                    <td><?php echo $row["first"] ?></td>
                                                    <td><?php echo $row["last"] ?></td>
                                                    <td><?php echo $row["nic"] ?></td>
                                                    <td><?php if ($row["gender"] === "1") {
                                            echo "Male";
                                        } else {
                                            echo "Female";
                                        } ?></td>
                                                    <td><?php echo $row["username"] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning waves-effect">Update</button>
                                                    </td>
                                                </tr>




                                                <?php
                                            }
                                        }
                                        $conn->close();
                                        ?>








                                    </tbody>
                                </table>
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

        <!-- Jquery DataTable Plugin Js -->
        <script src="admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

        <!-- Custom Js -->
        <script src="admin/js/admin.js"></script>
        <script src="admin/js/pages/tables/jquery-datatable.js"></script>

        <!-- Demo Js -->
        <script src="admin/js/demo.js"></script>
    </body>
</html>
