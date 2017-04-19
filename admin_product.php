<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        

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
</head>

<body class="theme-purple">
    <!-- Page Loader -->
    <?php
    include './admin_header.php';
    ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Products
                  </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Product Registration
                                </h2>

                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick">
                                            <option value="">-- Select Category --</option>
                                            <option value="1">Cakes</option>
                                            <option value="2">Pastry & Bakery</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick">
                                            <option value="">-- Select Sub Category --</option>
                                            <option value="1">Butter Cakes</option>
                                            <option value="2">Fruit Juice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Product Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="form-control" placeholder="Price" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Description" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix demo-button-sizes">
                                
                                        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2" style="float: right;">
                                    <button type="button" class="btn btn-primary waves-effect">Save</button>
                                </div>
                                
                            </div>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Product Details
                            </h2>
                            
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Sub category</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Cake</td>
                                        <td>Butter cake</td>
                                        <td>Butter cake</td>
                                        <td>250</td>
                                        <td>Description here</td>
                                        <td>
                                            <button type="button" class="btn btn-warning waves-effect">Update</button>
                                            <button type="button" class="btn btn-danger waves-effect">Delete</button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
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
