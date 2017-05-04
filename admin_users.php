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

        <!-- JQuery DataTable Css -->
        <link href="admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Custom Css -->
        <link href="admin/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="admin/css/themes/all-themes.css" rel="stylesheet" />
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
                    <h2>Users</h2>
                </div>
                
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    User Details
                                </h2>

                            </div>
                            <div class="body">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Contact No</th>
                                            <th>Address</th>
                                            <!--<th>Action</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        <?php
                                        $sql = "SELECT id,first_name,last_name,email,contact_no,address FROM user";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $row["id"] ?></td>
                                                    <td><?php echo $row["first_name"] ?></td>
                                                    <td><?php echo $row["last_name"] ?></td>
                                                    <td><?php echo $row["email"] ?></td>
                                                    <td><?php echo $row["contact_no"] ?></td>
                                                    <td><?php echo $row["address"] ?></td>
<!--                                                    <td>
                                                        <button type="button" class="btn btn-warning waves-effect">Update</button>
                                                    </td>-->
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
