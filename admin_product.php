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
    <script>
    function sendData(){
        var category = document.getElementById("category").value;
        var subcate = document.getElementById("subcate").value;
        var product = document.getElementById("product").value;
        var price = document.getElementById("price").value;
        var description = document.getElementById("description").value;
        var image = document.getElementById("image").value;
        
        alert(category);
        alert(subcate);
        alert(product);
        alert(price);
        alert(description);
        alert(image);
                if (category === "") {
                    document.getElementById("categorys").innerHTML = "Please Select the category Name ...";
                } else if (subcate === "") {
                    document.getElementById("subcates").innerHTML = "Please Select the Sub category ...";
                } else if (product === "") {
                    document.getElementById("products").innerHTML = "Please Enter the product name ...";
                } else if (price === "") {
                    document.getElementById("prices").innerHTML = "Please Enter the Price ...";
                } else if (description === "") {
                    document.getElementById("descriptions").innerHTML = "Please Enter the Description ...";
                } else if (image === "") {
                    document.getElementById("images").innerHTML = "Please Enter the image ...";
                
                } else {
        
                    var xmlHttp = getAjaxObject();
                    xmlHttp.onreadystatechange = function ()
                    {
                        if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                        {
                            document.getElementById("submitbtn").removeAttribute("disabled");
                            var reply = xmlHttp.responseText;
                            if (reply === "Success") {


                                document.getElementById("category").value = "";
                                document.getElementById("subcate").value = "";
                                document.getElementById("product").value = "";
                                document.getElementById("price").value = "";
                                document.getElementById("description").value = "";
                                document.getElementById("image").value = "";




                                document.getElementById("successmsg").className = "alert alert-success";
                            } else {
                                document.getElementById("errormsg").className = "alert alert-danger";
                            }
                        }
                    };

                    xmlHttp.open("POST", "src/Product.php?action=save&category=" + category + "&subcate=" + subcate + "&product=" + product + "&price=" + price + "&description=" + description + "&image=" + image, true);
                    xmlHttp.send();
        
        
    }
    
    </script>
    
</head>

    
<body class="theme-purple">
    <!-- Page Loader -->
    <?php
    include './admin_header.php';
    
    include_once './DBConnection.php';
    $result = mysql_query("SELECT * FROM product ");
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
                                    <form action = "src/Product.php?action=save" method = "POST" enctype = "multipart/form-data">
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick" name="category" id="category">
                                            <option value="">-- Select Category --</option>
                                            <option value="1">Cakes</option>
                                            <option value="2">Pastry & Bakery</option>
                                        </select>
                                        <span style="color: red;" id="categorys"></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick" name="subcate" id="subcate">
                                            <option value="">-- Select Sub Category --</option>
                                            <option value="1">Butter Cakes</option>
                                            <option value="2">Fruit Juice</option>
                                        </select>
                                        <span style="color: red;" id="subcates"></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="product" id="product" class="form-control" placeholder="Product Name" />
                                            </div>
                                        </div>
                                        <span style="color: red;" id="products"></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="price" id="price" class="form-control" placeholder="Price" />
                                            </div>
                                        </div>
                                        <span style="color: red;" id="prices"></span>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="description" id="description" class="form-control" placeholder="Description" />
                                            </div>
                                        </div>
                                        <span style="color: red;" id="descriptions"></span>
                                    </div>
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="image" id="image" class="form-control" />
                                            </div>
                                        </div>
                                            <span style="color: red;" id="images"></span>
                                    </div>
                                    <div class="row clearfix demo-button-sizes">
                                
                                        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2" style="float: right;">
                                            <!--<button type="button" class="btn btn-primary waves-effect">Save</button>-->
                                            <input type="submit" value="ADD" class="btn btn-primary waves-effect"/>
                                </div>
                                
                            </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="hidden" id="successmsg" >
                                        <strong>Success !</strong> Message Sent Successfully ...
                                    </div>
                                    <div class="hidden" id="errormsg">
                                        <strong>Error !</strong> Something went wrong. Please try again later.
                                    </div>
                                        </div>
                                    </div>
                                    </form>
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
                                    <?php
                                    while( $row = mysql_fetch_assoc( $result ) ){
                                                                              
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['category']; ?></td>
                                        <td><?php echo $row['product']; ?></td>
                                        <td><?php echo $row['This']; ?></td>
                                        <td><?php echo $row['This']; ?></td>
                                        <td><?php echo $row['This']; ?></td>
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
                                    <?php
                                    } 
                                    ?>
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
