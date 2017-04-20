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
        ?>




    <center>
        <div id="MainContent_bgTopLarge" class="hidden-xs" style="height: 500px; width:93%; overflow: hidden;  z-index: -5; background: #fff url('img/PageImage9.png') no-repeat top center;"></div>
    </center>
    <div class="visible-xs" style="height:320px;padding:0;z-index:-5;margin-top:-125px;background:#fff;" ></div>
    <div class="container InnerPageContentBlock" style="font-size: 16px;letter-spacing: 1px; width: 91%">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="InnerPageContentTitleWrap" style="width: 270px;">
                    <h1>Shopping Cart</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 InnerPageContentInnerContentWrap">
                <div class="row">
                    <div class="col-xs-12">
                        <div data-val-validationgroup="valgroupCartItems" id="MainContent_valSummary" class="text-danger alert alert-danger ValidationSummaryBlock" data-valsummary="true" style="display:none;">

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="row visible-sm visible-md visible-lg">
                            <div class="col-xs-12 col-sm-5 col-md-5 text-center" style="border-bottom: solid 1px #d3d3d3;">
                                <h4>Item</h4>
                            </div>
                            <div class="col-xs-6 col-sm-2 col-md-2" style="border-bottom: solid 1px #d3d3d3;">
                                <h4>Quantity</h4>
                            </div>
                            <div class="col-xs-6 col-sm-2 col-md-2" style="border-bottom: solid 1px #d3d3d3;">
                                <h4>Item Price</h4>
                            </div>
                            <div class="col-xs-6 col-sm-2 col-md-2" style="border-bottom: solid 1px #d3d3d3;">
                                <h4>Item Total</h4>
                            </div>
                            <div class="col-xs-6 col-sm-1 col-md-1" style="border-bottom: solid 1px #d3d3d3;">
                                <h4>Delete</h4>
                            </div>
                        </div>
                        <div style="margin-top: 10px;">


                            <div class="row">

                                <div class="col-xs-12 col-sm-3 col-sm-push-2 col-md-3 col-md-push-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <strong>Black Forest (1Kg)</strong><br>
                                    <div>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-sm-pull-3 col-md-2 col-md-pull-3">
                                    <img id="MainContent_lvCartItems_ctrl0_imgProductThumb_0" class="cartimage" src="img/home_image01.png">
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon">Qty.</span>
                                        <span>
                                            <input name="" type="text" value="2" maxlength="2" id="MainContent_lvCartItems_ctrl0_txtQty_0" class="form-control input-sm" style="width:50px;text-align: center; font-weight: bold; font-size: 1em;">
                                            <a id="MainContent_lvCartItems_ctrl0_lnkbtnUpdateQty_0" class="btn btn-link btn-sm" href="javascript:__doPostBack('ctl00$MainContent$lvCartItems$ctrl0$ctl00$lnkbtnUpdateQty','')">Update</a></span>
                                    </div>
                                    <!--<span data-val-controltovalidate="MainContent_lvCartItems_ctrl0_txtQty_0" data-val-errormessage="All items in your cart require a valid quantity" data-val-display="Dynamic" data-val-validationgroup="valgroupCartItems" id="MainContent_lvCartItems_ctrl0_rfvItemQty_0" class="text-danger" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="display:none;">Required</span><span data-val-controltovalidate="MainContent_lvCartItems_ctrl0_txtQty_0" data-val-errormessage="All items in your cart require a valid quantity" data-val-display="Dynamic" data-val-validationgroup="valgroupCartItems" id="MainContent_lvCartItems_ctrl0_regExQty_0" class="text-danger" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="[0-9]+" style="display:none;">Invalid</span>-->

                                    <input type="hidden" name="" id="MainContent_lvCartItems_ctrl0_hfMinQty_0" value="1">
                                    <input type="hidden" name="" id="MainContent_lvCartItems_ctrl0_hfMaxQty_0" value="10">
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="hidden-xs">Rs. 3,840.00</div>
                                    <div class="visible-xs">Item Price: Rs.3,840.00</div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="hidden-xs">Rs. 7,680.00</div>
                                    <div class="visible-xs">Item Total: Rs.7,680.00</div>
                                </div>
                                <div class="col-xs-12 col-sm-1 col-md-1" style="padding-left: 0; padding-right: 0;">
                                    <a id="MainContent_lvCartItems_ctrl0_lnkbtnRemove_0" class="btn btn-link btn-sm" href="javascript:__doPostBack('ctl00$MainContent$lvCartItems$ctrl0$ctl00$lnkbtnRemove','')"><span class="glyphicon glyphicon-remove-sign"></span><br>Remove</a>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-12 col-sm-3 col-sm-push-2 col-md-3 col-md-push-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <strong>Black Forest (1Kg)</strong><br>
                                    <div>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-sm-pull-3 col-md-2 col-md-pull-3">
                                    <img id="MainContent_lvCartItems_ctrl0_imgProductThumb_0" class="cartimage" src="img/home_image01.png">
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon">Qty.</span>
                                        <span>
                                            <input name="" type="text" value="2" maxlength="2" id="MainContent_lvCartItems_ctrl0_txtQty_0" class="form-control input-sm" style="width:50px;text-align: center; font-weight: bold; font-size: 1em;">
                                            <a id="MainContent_lvCartItems_ctrl0_lnkbtnUpdateQty_0" class="btn btn-link btn-sm" href="javascript:__doPostBack('ctl00$MainContent$lvCartItems$ctrl0$ctl00$lnkbtnUpdateQty','')">Update</a></span>
                                    </div>
                                    <!--<span data-val-controltovalidate="MainContent_lvCartItems_ctrl0_txtQty_0" data-val-errormessage="All items in your cart require a valid quantity" data-val-display="Dynamic" data-val-validationgroup="valgroupCartItems" id="MainContent_lvCartItems_ctrl0_rfvItemQty_0" class="text-danger" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="display:none;">Required</span><span data-val-controltovalidate="MainContent_lvCartItems_ctrl0_txtQty_0" data-val-errormessage="All items in your cart require a valid quantity" data-val-display="Dynamic" data-val-validationgroup="valgroupCartItems" id="MainContent_lvCartItems_ctrl0_regExQty_0" class="text-danger" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="[0-9]+" style="display:none;">Invalid</span>-->

                                    <input type="hidden" name="" id="MainContent_lvCartItems_ctrl0_hfMinQty_0" value="1">
                                    <input type="hidden" name="" id="MainContent_lvCartItems_ctrl0_hfMaxQty_0" value="10">
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="hidden-xs">Rs. 3,840.00</div>
                                    <div class="visible-xs">Item Price: Rs.3,840.00</div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="hidden-xs">Rs. 7,680.00</div>
                                    <div class="visible-xs">Item Total: Rs.7,680.00</div>
                                </div>
                                <div class="col-xs-12 col-sm-1 col-md-1" style="padding-left: 0; padding-right: 0;">
                                    <a id="MainContent_lvCartItems_ctrl0_lnkbtnRemove_0" class="btn btn-link btn-sm" href="javascript:__doPostBack('ctl00$MainContent$lvCartItems$ctrl0$ctl00$lnkbtnRemove','')"><span class="glyphicon glyphicon-remove-sign"></span><br>Remove</a>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-xs-12 col-sm-3 col-sm-push-2 col-md-3 col-md-push-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <strong>Black Forest (1Kg)</strong><br>
                                    <div>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-sm-pull-3 col-md-2 col-md-pull-3">
                                    <img id="MainContent_lvCartItems_ctrl0_imgProductThumb_0" class="cartimage" src="img/home_image01.png">
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon">Qty.</span>
                                        <span>
                                            <input name="" type="text" value="2" maxlength="2" id="MainContent_lvCartItems_ctrl0_txtQty_0" class="form-control input-sm" style="width:50px;text-align: center; font-weight: bold; font-size: 1em;">
                                            <a id="MainContent_lvCartItems_ctrl0_lnkbtnUpdateQty_0" class="btn btn-link btn-sm" href="javascript:__doPostBack('ctl00$MainContent$lvCartItems$ctrl0$ctl00$lnkbtnUpdateQty','')">Update</a></span>
                                    </div>
                                    <!--<span data-val-controltovalidate="MainContent_lvCartItems_ctrl0_txtQty_0" data-val-errormessage="All items in your cart require a valid quantity" data-val-display="Dynamic" data-val-validationgroup="valgroupCartItems" id="MainContent_lvCartItems_ctrl0_rfvItemQty_0" class="text-danger" data-val="true" data-val-evaluationfunction="RequiredFieldValidatorEvaluateIsValid" data-val-initialvalue="" style="display:none;">Required</span><span data-val-controltovalidate="MainContent_lvCartItems_ctrl0_txtQty_0" data-val-errormessage="All items in your cart require a valid quantity" data-val-display="Dynamic" data-val-validationgroup="valgroupCartItems" id="MainContent_lvCartItems_ctrl0_regExQty_0" class="text-danger" data-val="true" data-val-evaluationfunction="RegularExpressionValidatorEvaluateIsValid" data-val-validationexpression="[0-9]+" style="display:none;">Invalid</span>-->

                                    <input type="hidden" name="" id="MainContent_lvCartItems_ctrl0_hfMinQty_0" value="1">
                                    <input type="hidden" name="" id="MainContent_lvCartItems_ctrl0_hfMaxQty_0" value="10">
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="hidden-xs">Rs. 3,840.00</div>
                                    <div class="visible-xs">Item Price: Rs.3,840.00</div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <br>
                                    <span class="visible-sm visible-md visible-lg"></span>
                                    <div class="hidden-xs">Rs. 7,680.00</div>
                                    <div class="visible-xs">Item Total: Rs.7,680.00</div>
                                </div>
                                <div class="col-xs-12 col-sm-1 col-md-1" style="padding-left: 0; padding-right: 0;">
                                    <a id="MainContent_lvCartItems_ctrl0_lnkbtnRemove_0" class="btn btn-link btn-sm" href="javascript:__doPostBack('ctl00$MainContent$lvCartItems$ctrl0$ctl00$lnkbtnRemove','')"><span class="glyphicon glyphicon-remove-sign"></span><br>Remove</a>
                                </div>

                            </div>












                        </div>
                        <hr style="margin-bottom: 0px;">
                    </div>
                </div>

                <div class="row clearfix" style="margin-top: 10px;">
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <div>
                            <!--
                            <p>
                                Calculate estimate Sheet<br />
                            </p>
                            -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div style="border: 1px solid #d3d3d3; padding-left: 4px; padding-bottom: 4px;">
                            <div class="row CartTotalsMargin">
                                <div class="col-xs-5 col-sm-6 col-md-6">Sub Total</div>
                                <div class="col-xs-7 col-sm-6 col-md-6">
                                    <span id="MainContent_lblCartSubTotal">: Rs. 7,680.00</span>
                                </div>
                            </div>
                            <div id="MainContent_divTotalsDiscount" class="row CartTotalsMargin" style="display:none;">
                                <div class="col-xs-5 col-sm-6 col-md-6">Discount</div>
                                <div class="col-xs-7 col-sm-6 col-md-6">
                                    <span id="MainContent_lblCartDiscount">: Rs. 0.00</span>
                                </div>
                            </div><div id="MainContent_divDiscountedTotal" class="row CartTotalsMargin" style="display:none;">
                                <div class="col-xs-5 col-sm-6 col-md-6">Discounted Total</div>
                                <div class="col-xs-7 col-sm-6 col-md-6">
                                    <span id="MainContent_lblCartDiscountedTotal">: Rs. 7,680.00</span>
                                </div>
                            </div>
                            <div class="row CartTotalsMargin">
                                <div class="col-xs-5 col-sm-6 col-md-6">Delivery Estimate</div>
                                <div class="col-xs-7 col-sm-6 col-md-6">
                                    <span id="MainContent_lblCartDeliveryEstimate">: Rs. 0.00</span>
                                </div>
                            </div>
                            <div class="row CartTotalsMargin">
                                <div class="col-xs-5 col-sm-6 col-md-6"><strong>Order Total</strong></div>
                                <div class="col-xs-7 col-sm-6 col-md-6">
                                    <strong>
                                        <span id="MainContent_lblCartOrderTotal">: Rs. 7,680.00</span></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="ctl00$MainContent$hfCouponCode" id="MainContent_hfCouponCode"><input type="hidden" name="ctl00$MainContent$hfTimeRequired" id="MainContent_hfTimeRequired" value="4"><input type="hidden" name="ctl00$MainContent$hfTimeRequiredCheckout" id="MainContent_hfTimeRequiredCheckout"><input type="hidden" name="ctl00$MainContent$hfSubTotal" id="MainContent_hfSubTotal" value="7680.00"><input type="hidden" name="ctl00$MainContent$hfDiscPer" id="MainContent_hfDiscPer"><input type="hidden" name="ctl00$MainContent$hfDiscount" id="MainContent_hfDiscount"><input type="hidden" name="ctl00$MainContent$hfDelivery" id="MainContent_hfDelivery"><input type="hidden" name="ctl00$MainContent$hfDeliveryText" id="MainContent_hfDeliveryText">
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-xs-12 col-md-12 text-right">
                        <a id="MainContent_lnkbtnProceedToCheckout" class="btn btn-default btn-danger" href='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$MainContent$lnkbtnProceedToCheckout", "", true, "valgroupCartItems", "", false, true))'>Proceed to Checkout  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>


            </div>
        </div>
        <div class="row clearfix" style="margin-bottom: 40px">
            &nbsp;
        </div>
        <div id="MainContent_divEditWordingPanelOpener"></div>
        <div id="MainContent_PanelEditWordingOnTop" style="display: none; position: fixed; z-index: 100001;">

            <div class="modal-dialog" style="max-width:420px;">
                <div class="modal-content">
                    <br>
                    <div style="min-width: 300px; max-width: 400px; padding:10px 10px;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="padding: 3px 5px 5px 5px;">
                                    <h3>Edit Wording</h3>
                                    <input type="hidden" name="ctl00$MainContent$hfEditWordingProductVarID" id="MainContent_hfEditWordingProductVarID">
                                    <br>
                                    Wording:<br>
                                    <input name="ctl00$MainContent$txtEditWording" type="text" maxlength="50" id="MainContent_txtEditWording" class="form-control"><br>
                                    <div style="float: right; padding-right: 5px;">
                                        <a id="MainContent_lnkBtnCloseEditWording" class="btn btn-danger" href="javascript:__doPostBack('ctl00$MainContent$lnkBtnCloseEditWording','')"><b>X</b>&nbsp;Cancel</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a id="MainContent_lnkBtnSaveEditWording" class="btn btn-danger" href="javascript:__doPostBack('ctl00$MainContent$lnkBtnSaveEditWording','')"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="MainContent_divEditWordingPanelCloser"></div>
            </div>

        </div>

        <div id="MainContent_divNoOrdersOpener"></div>
        <div id="MainContent_PanelNoOrders" style="display: none; position: fixed; z-index: 100001;">

            <div class="modal-dialog">
                <div class="modal-content">
                    <br>
                    <div class="modal-body text-center">
                        Online ordering is unavailable at this time.<br>
                        <br>
                        You could place your order by phone on 0112573321 or 0112574299
                    </div>
                    <div class="modal-footer">
                        <div>
                            <a id="MainContent_lnkbtnNoOrdersClose" class="btn btn-danger" href="javascript:__doPostBack('ctl00$MainContent$lnkbtnNoOrdersClose','')"><b>X</b>&nbsp;Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="MainContent_divNoOrdersCloser"></div>

        </div>

        <div id="MainContent_ModalPopupExtenderEditWording_backgroundElement" class="modalBg" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div><div id="MainContent_ModalPopupExtenderNoOrders_backgroundElement" class="modalBg" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div></div>


    <?php
    include './Footer.php';
    ?>
</body>
</html>
