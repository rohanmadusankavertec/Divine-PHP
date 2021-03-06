<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <link rel="shortcut icon" href="img/divine.ico"/>

        <title>DIVINE | FOODS</title>
<!--        <script type="text/javascript" src="js/jquery.elevatezoom.js"/>
        <script type="text/javascript" src=""/>-->
        <script src="js/jquery.elevatezoom.js"></script>
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        <script>
            $("#productimg").elevateZoom({tint: true, tintColour: '#F90', tintOpacity: 0.5});
        </script>
    </head>
    <body>

        <?php
        include './Header.php';



        include_once './src/DBConnection.php';
        $name = "";
        $img = "";
        $description = "";
        $price = "";
        $sql = "SELECT name,img,description,price FROM product where id='" . $_REQUEST["product"] . "'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $img = $row["img"];
                $description = $row["description"];
                $price = $row["price"];
            }
        }
        $conn->close();
        ?>





    <center>
        <div id="MainContent_bgTopLarge" class="hidden-xs" style="height: 500px; width:93%; overflow: hidden;  z-index: -5; background: #fff url('img/PageImage9.png') no-repeat top center;"></div>
    </center>
    <div class="visible-xs" style="height:320px;padding:0;z-index:-5;margin-top:-125px;background:#fff;" ></div>
    <div class="container InnerPageContentBlock" style="font-size: 16px;letter-spacing: 1px; width: 91%">
        <div class="row">
            <div class="col-xs-6 col-sm-4">
                <div class="InnerPageContentTitleWrap" style="width: 250px;">
                    <h1>Product Details</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 InnerPageContentInnerContentWrap">
                <div class="row">
                    <div id="MainContent_UpdatePanelProductDetails">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ol id="MainContent_olBreadCrumbs" class="breadcrumb">
                                        <li><a href="../../../../../OnlineMenu">Online Menu</a></li>


                                        <li class="active">
                                            <span id="MainContent_lblProductNameBreadCrumb"><?php echo $name; ?></span></li>
                                    </ol>
                                    <h3 class="visible-xs">
                                        <span id="MainContent_lblProductNameLeft"><?php echo $name; ?></span></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 thumbnail">
                                            <div class="text-center">

                                                <?php
                                                if ($img == "") {
                                                    ?>
                                                    <img id="productimg" class="img-responsive img-center" src="img/no-image-available.jpg">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img id="productimg" class="img-responsive img-center" src="src/images/<?php echo $img; ?>">
                                                    <?php
                                                }
                                                ?>
                                            </div>
<!--                                            <small>Images are for illustration purposes only, and may not represent actual size or quantity.</small>
                                            <br>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div data-val-validationgroup="valGroupProductDetails" id="MainContent_valSummary" class="text-danger alert alert-danger ValidationSummaryBlock" data-valsummary="true" style="display:none;">

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <h3 class="hidden-xs">
                                                <span id="MainContent_lblProductNameRight"><?php echo $name; ?></span></h3>
                                            <br>
                                            <p style="font-size: 0.9em;">
                                                <span id="MainContent_lblDescription"><?php echo $description; ?></span>
                                            </p>
                                            <p>
                                                <strong>Price : Rs.<?php echo number_format((float) $price, 2, '.', ''); ?></strong>
                                                <small>
                                                    <span id="MainContent_lblNotes"></span></small>
                                            </p>
                                        </div>
                                    </div>

                                    <div id="MainContent_divAdToCartBtnSection" class="row">
                                        <div class="col-xs-12 col-md-12">

                                            <div>
                                                <div style="display: inline-block;">
                                                    <form method="POST" action="src/Cart.php?action=addtocart">
                                                        <select name="measure" class="form-control OverrideformControlDisplay" style="width: 100px; margin-bottom: 10px;">
                                                            <option value="0.5">500g</option>
                                                            <option value="1.0">1Kg</option>
                                                            <option value="1.5">1.5Kg</option>
                                                            <option value="2.0">2Kg</option>
                                                            <option value="2.5">2.5Kg</option>
                                                            <option value="3.0">3Kg</option>
                                                        </select>
                                                        <label for="MainContent_txtQty" id="MainContent_lblQty" class="text-warning">Qty.</label>
                                                        <input type="hidden" value="<?php echo $_GET["product"]; ?>" name="id"/>
                                                        <input name="qty" type="text" maxlength="4" id="qty" class="form-control OverrideformControlDisplay" style="width:60px;">
                                                        
                                                        <br/>
                                                        <br/>
                                                        
                                                        
                                                        
                                                        
                                                        <input type="submit" name="ctl00$MainContent$btnAddToOrder" value="Add to Cart" onclick="" class="btn btn-danger">
                                                    </form>
                                                </div>
                                                <small><span id="MainContent_lblMinQtyDisplay"></span></small>
                                                <br>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix" style="margin-bottom: 40px">
            &nbsp;
        </div>
    </div>

    <?php
    include './Footer.php';
    ?>
</body>
</html>
