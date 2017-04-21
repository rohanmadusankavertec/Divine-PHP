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
        <title></title>
    </head>
    <body>

        <?php
        include './Header.php';
        
        
        
        include_once './src/DBConnection.php';
        $name = "";
        $img = "";
        $description = "";
        $price = "";
        $sql = "SELECT name,img,description,price FROM product where id='".$_REQUEST["product"]."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $img= $row["img"];
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
                                                <img id="MainContent_imgProductImage" class="img-responsive img-center" src="src/images/<?php echo $img; ?>">
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
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <h3 class="hidden-xs">
                                                <span id="MainContent_lblProductNameRight"><?php echo $name; ?></span></h3>
                                            <br>
                                            <p style="font-size: 0.9em;">
                                                <span id="MainContent_lblDescription"><?php echo $description; ?></span>
                                            </p>
                                            <p>
                                                Price : Rs.<?php echo $price; ?>
                                                <small>
                                                    <span id="MainContent_lblNotes"></span></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div style="min-width: 280px; max-width: 320px; margin-top: 15px;">
<!--                                                <h5 id="MainContent_h5SelectSize" class="text-warning">Select Size:</h5>
                                                <div>-->
<!--                                                    <table cellspacing="0" cellpadding="1" id="MainContent_gvProductvariations" style="width:100%;border-collapse:collapse;">
                                                        <tbody><tr>
                                                                <th class="ProductVarHideField" scope="col">Product Variation Name</th><th class="ProductVarHideField" scope="col">Product Variation Name</th><th class="ProductVarHideField" scope="col">Serving Size</th><th class="ProductVarHideField" scope="col">Price</th><th class="ProductVarHideField" scope="col">MinOrderQty</th><th class="ProductVarHideField" scope="col">MaxOrderQty</th><th class="ProductVarHideField" scope="col">&nbsp;</th><th class="ProductVarHideField" scope="col">&nbsp;</th><th class="ProductVarHideField" scope="col">PriceVal</th><th class="ProductVarHideField" scope="col">LeadTimeHoursForMinQty</th><th class="ProductVarHideField" scope="col">MaxLeadTimeQty</th><th class="ProductVarHideField" scope="col">AllowHeader</th>
                                                            </tr><tr title="Click to select" class="productVarRowStyle" onmouseover="this.style.cursor = 'pointer';this.style.backgroundColor = '#E0E0E0';" onmouseout="this.style.backgroundColor = '#ffffff';" onclick="javascript:__doPostBack('ctl00$MainContent$gvProductvariations', 'Select$0')" style="cursor: pointer; background-color: rgb(255, 255, 255);">
                                                                <td class="ProductVarHideField">Black Forest (1Kg)</td><td style="width:45%;">
                                                                    &nbsp;
                                                                    1Kg

                                                                </td><td style="width:30%;">Serves 12</td><td style="width:25%;">
                                                                    Rs. 3,840.00
                                                                </td><td class="ProductVarHideField">1</td><td class="ProductVarHideField">10</td><td class="ProductVarHideField">PCA1001V11</td><td class="ProductVarHideField" valign="middle"><input type="button" value="Select" onclick="javascript:__doPostBack('ctl00$MainContent$gvProductvariations', 'Select$0')"></td><td class="ProductVarHideField">3840.00</td><td class="ProductVarHideField">4</td><td class="ProductVarHideField">5</td><td class="ProductVarHideField">True</td>
                                                            </tr><tr title="Click to select" class="productVarRowStyle" onmouseover="this.style.cursor = 'pointer';this.style.backgroundColor = '#E0E0E0';" onmouseout="this.style.backgroundColor = '#ffffff';" onclick="javascript:__doPostBack('ctl00$MainContent$gvProductvariations', 'Select$1')" style="cursor: pointer; background-color: rgb(255, 255, 255);">
                                                                <td class="ProductVarHideField">Black Forest (Piece)</td><td style="width:45%;">
                                                                    &nbsp;
                                                                    Piece

                                                                </td><td style="width:30%;">Serves 1</td><td style="width:25%;">
                                                                    Rs. 320.00
                                                                </td><td class="ProductVarHideField">6</td><td class="ProductVarHideField">200</td><td class="ProductVarHideField">PCA1001V12</td><td class="ProductVarHideField" valign="middle"><input type="button" value="Select" onclick="javascript:__doPostBack('ctl00$MainContent$gvProductvariations', 'Select$1')"></td><td class="ProductVarHideField">320.00</td><td class="ProductVarHideField">4</td><td class="ProductVarHideField">100</td><td class="ProductVarHideField">False</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>-->
                                                <!--</div>-->
                                                <input type="hidden" name="ctl00$MainContent$hfSelIndx" id="MainContent_hfSelIndx">
                                                <input type="hidden" name="ctl00$MainContent$hfPID" id="MainContent_hfPID" value="PCA1001">
                                                <input type="hidden" name="ctl00$MainContent$hfProductVarID" id="MainContent_hfProductVarID">
                                                <input type="hidden" name="ctl00$MainContent$hfProductMainName" id="MainContent_hfProductMainName" value="Black Forest">
                                                <input type="hidden" name="ctl00$MainContent$hfProductVarName" id="MainContent_hfProductVarName">
                                                <input type="hidden" name="ctl00$MainContent$hfUnitPrice" id="MainContent_hfUnitPrice">
                                                <input type="hidden" name="ctl00$MainContent$hfMinQty" id="MainContent_hfMinQty">
                                                <input type="hidden" name="ctl00$MainContent$hfMaxQty" id="MainContent_hfMaxQty">
                                                <input type="hidden" name="ctl00$MainContent$hfLeadTimeHrsForMinQty" id="MainContent_hfLeadTimeHrsForMinQty">
                                                <input type="hidden" name="ctl00$MainContent$hfLeadTimeMaxQty" id="MainContent_hfLeadTimeMaxQty">
                                                <input type="hidden" name="ctl00$MainContent$hfAllowWording" id="MainContent_hfAllowWording">
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="MainContent_divAdToCartBtnSection" class="row">
                                        <div class="col-xs-12 col-md-12">

                                            <div>
                                                <div style="display: inline-block;">
                                                    <label for="MainContent_txtQty" id="MainContent_lblQty" class="text-warning">Qty.</label>
                                                    <input name="ctl00$MainContent$txtQty" type="text" maxlength="2" id="MainContent_txtQty" class="form-control OverrideformControlDisplay" style="width:50px;">
                                                    <input type="submit" name="ctl00$MainContent$btnAddToOrder" value="Add to Order" onclick="" id="MainContent_btnAddToOrder" class="btn btn-danger">
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
