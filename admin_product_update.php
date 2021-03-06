<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <?php
include_once './src/DBConnection.php';





        $sql = "SELECT p.id,s.category_id,p.subcategory_id,p.name,p.price,p.description,p.img FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where p.id='".$_REQUEST["product"]."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $pid= $row["id"];
                $cat= $row["category_id"];
                $subcat= $row["subcategory_id"];
                $name= $row["name"];
                $price= $row["price"];
                $description= $row["description"];
                $img= $row["img"];
            }
        }
        $conn->close();
?>
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
            function Delete(id) {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this Product!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel !",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }, function (isConfirm) {
                    if (isConfirm) {
                        var xmlHttp = getAjaxObject();
                        xmlHttp.onreadystatechange = function ()
                        {
                            if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                            {
                                var reply = xmlHttp.responseText;
                                if (reply === "Success") {
                                    swal("Good job!", "Deleted Product Successfully!", "success");
                                    setTimeout("window.location = 'admin_product.php';", "3000");
                                } else {
                                    swal("Error!", "Something went wronge :)", "error");
                                }
                            }
                        };
                        xmlHttp.open("POST", "src/Product.php?action=delete&id=" + id, true);
                        xmlHttp.send();
                    } else {
                        swal("Cancelled", "Your Product is safe :)", "error");
                    }
                });
            }





            function getSubcategory() {
                $("#subcate").empty();
                var id = document.getElementById("category").value;
                var s1 = document.getElementById("subcate");
                var t1 = document.createElement("option");

                t1.value = "";
                t1.innerHTML = "-- Select Sub Category --";
                s1.appendChild(t1);

                var xmlHttp = getAjaxObject();
                xmlHttp.onreadystatechange = function ()
                {
                    if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                    {
                        var Obj = JSON.parse(this.responseText);
                        for (x in Obj) {
                            var t1 = document.createElement("option");
                            t1.value = Obj[x][0];
                            t1.innerHTML = Obj[x][1];
                            s1.appendChild(t1);
                        }
                    }
                };
                xmlHttp.open("POST", "src/Product.php?action=getsubcategory&id=" + id, true);
                xmlHttp.send();
            }

            
            function setSelect(){
                document.getElementById("category").value=<?php echo $cat;?>;
                getSubcategory();
                setTimeout("document.getElementById('subcate').value=<?php echo $subcat;?>;",500);
                 
            }
        </script>
    </head>


    <body class="theme-purple" onload="setSelect()">
        <!-- Page Loader -->
        <?php
        include_once './admin_header.php';
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
                                    <form action = "src/Product.php?action=update" method = "POST" enctype = "multipart/form-data">
                                        <input type="hidden" value="<?php echo $pid;?>" name="id"/>
                                        <div class="col-sm-6">
                                            <select class="form-control show-tick" name="category" id="category" required onchange="getSubcategory()">
                                                <option value="">-- Select Category --</option>
                                                <option value="1">Cakes</option>
                                                <option value="2">Pastry & Bakery</option>
                                            </select>
                                                
                                            <span style="color: red;" id="categorys"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control show-tick" name="subcate" id="subcate" required>
                                                <option value="">-- Select Sub Category --</option>
                                            </select>
                                            <span style="color: red;" id="subcates"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="<?php echo $name;?>" name="product" id="product" class="form-control" placeholder="Product Name" required="required"/>
                                                </div>
                                            </div>
                                            <span style="color: red;" id="products"></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" value="<?php echo $price;?>" name="price" id="price" class="form-control" placeholder="Price" required="required"/>
                                                </div>
                                            </div>
                                            <span style="color: red;" id="prices"></span>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="<?php echo $description;?>" name="description" id="description" class="form-control" placeholder="Description" required="required"/>
                                                </div>
                                            </div>
                                            <span style="color: red;" id="descriptions"></span>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" name="image" id="image" class="form-control" />
                                                    <label class="form-control" >Image Size 460*356</label>
                                                    <input type="hidden" value="<?php echo $img;?>" name="oldimg"/>
                                                </div>
                                            </div>
                                            <span style="color: red;" id="images"></span>
                                        </div>
                                        <div class="row clearfix demo-button-sizes">

                                            <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2" style="float: right;">
                                                <!--<button type="button" class="btn btn-primary waves-effect">Save</button>-->
                                                <input type="submit" value="Update" class="btn btn-primary waves-effect"/>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Examples -->
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="admin/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <!--<script src="admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>-->

        <!-- Slimscroll Plugin Js -->
        <script src="admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="admin/plugins/node-waves/waves.js"></script>

        <!-- Custom Js -->
        <script src="admin/js/admin.js"></script>
        <!--<script src="admin/js/pages/tables/jquery-datatable.js"></script>-->

        <!-- SweetAlert Plugin Js -->
        <script src="admin/plugins/sweetalert/sweetalert.min.js"></script>

        <!-- Custom Js -->
        <script src="admin/js/pages/ui/dialogs.js"></script>

        <!-- Demo Js -->
        <script src="admin/js/demo.js"></script>
    </body>
</html>
