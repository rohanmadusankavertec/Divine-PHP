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
            <div class="col-xs-6 col-sm-4">
                <div class="InnerPageContentTitleWrap" style="width: 250px;">
                    <h1>Our Menu</h1>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-md-12 InnerPageContentInnerContentWrap">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <h2 class="hidden-xs hidden-sm hidden-md">Our Menu</h2>
                        <h3 class="hidden-lg">Our Menu</h3>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-5 text-left">
                        <div style="margin-top: 5px; margin-left:0; color: silver">
                            <h3>
                                <span id="MainContent_lblMenutitle">Cakes & Sweet Treats</span></h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-4 text-right">
                        <div id="MainContent_PanelSearch" >

                            <div class="input-group">
                                <input name="ctl00$MainContent$txtSearch" type="text" id="MainContent_txtSearch" class="form-control input-sm" />
                                <span class="input-group-btn">
                                    <a id="MainContent_lnkbtnSearch" class="btn btn-default btn-sm" href="javascript:__doPostBack(&#39;ctl00$MainContent$lnkbtnSearch&#39;,&#39;&#39;)"><span class="glyphicon glyphicon-search"></span> Search</a>
                                </span>
                            </div>

                        </div>                        
                    </div>
                </div>
                <div class="row row-offcanvas row-offcanvas-left">
                    <div class="col-xs-6 col-sm-4 col-md-3 sidebar-offcanvas" id="sidebar" role="navigation">
                        <div id="MainContent_Categories" class="accordion">
                            <input type="hidden" name="ctl00$MainContent$Categories_AccordionExtender_ClientState" id="MainContent_Categories_AccordionExtender_ClientState" value="0" /><div id="MainContent" class="accordionHeaderSelected">

                                <a id="MainContent_lnkBtnMainCatHead_0" href="javascript:__doPostBack(&#39;ctl00$MainContent$Categories_Pane_0_header$lnkBtnMainCatHead&#39;,&#39;&#39;)">Cakes & Sweet Treats</a>

                            </div>
                            <div id="MainContent" class="accordionContent" style="display:block;">

                                <ul>

                                    <li>
                                        <a id="MainContent_rptMenu_0_lnkBtnGroup_0" >All Cakes</a>
                                    </li>



                                </ul>

                            </div>


                        </div>

                        <br />
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <p class="pull-left visible-xs" style="margin-top: 20px;">
                            <button type="button" class="btn btn-warning btn-xs" data-toggle="offcanvas"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Categories Menu</button>
                        </p>
                        <br />
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <br />

                                <!--                                <div class="text-right" style="float: right;">
                                                                    <div>
                                                                        <span>
                                                                            <span class="btn btn-link ConsolidateItemsToOnePage" title="Enabling this shows all items in a the selected category in one page."><input id="MainContent_lvProducts_chkShowAllInOnePage" type="checkbox" name="ctl00$MainContent$lvProducts$chkShowAllInOnePage" onclick="javascript:setTimeout( & #39; __doPostBack(\ & #39; ctl00$MainContent$lvProducts$chkShowAllInOnePage\ & #39; , \ & #39; \ & #39; ) & #39; , 0)" /><label for="MainContent_lvProducts_chkShowAllInOnePage"> Show all in one page.</label></span>
                                                                        </span>
                                                                        <span class="hidden-xs">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        </span>
                                                                        <span>
                                                                            <span id="MainContent_lvProducts_DataPagerOnlineProductsTop"><a class="aspNetDisabled pagerButtonsBack">First</a>&nbsp;<a class="aspNetDisabled pagerButtonsBack">Previous</a>&nbsp;<span>1</span>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsTop$ctl01$ctl01&#39;,&#39;&#39;)">2</a>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsTop$ctl01$ctl02&#39;,&#39;&#39;)">3</a>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsTop$ctl01$ctl03&#39;,&#39;&#39;)">4</a>&nbsp;<a class="pagerButtonsForward" href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsTop$ctl02$ctl00&#39;,&#39;&#39;)">Next</a>&nbsp;<a class="pagerButtonsForward" href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsTop$ctl02$ctl01&#39;,&#39;&#39;)">Last</a>&nbsp;</span>
                                                                        </span>
                                                                    </div>
                                                                </div>-->
                                <div class="visible-sm"><br /></div>
                                <br />
                                <hr />

                                <div class="row clearfix">

                                    <div class="col-xs-12 col-sm-12 col-md-6" style="margin: 10px 0 10px 0;">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div style="width: 180px; float: left">
                                                    <input type="image" name="" id="MainContent_lvProducts_ctrl0_imgbtnProductThumb_0" class="productItemImageimg" src="products/product_01.jpeg" alt="Black Forest" />
                                                </div>
                                                <div style="margin-left: 183px; padding-top: 20px;">
                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnProductName_0" href=""><h4>Black Forest</h4></a>
                                                    <div class="text-sm" style="margin-bottom:12px;">
                                                        1Kg, Piece
                                                    </div>

                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnCheckPrice_0" href="Product.html"><u>Details & Pricing</u></a>
                                                </div>
                                                <input type="hidden" name="" id="MainContent_lvProducts_ctrl0_hfProductCode_0" value="PCA1001" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6" style="margin: 10px 0 10px 0;">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div style="width: 180px; float: left">
                                                    <input type="image" name="" id="MainContent_lvProducts_ctrl0_imgbtnProductThumb_1" class="productItemImageimg" src="products/product_02.jpg" alt="Caramel Cake" />
                                                </div>
                                                <div style="margin-left: 183px; padding-top: 20px;">
                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnProductName_1" href=""><h4>Caramel Cake</h4></a>
                                                    <div class="text-sm" style="margin-bottom:12px;">
                                                        Large, Small, Piece
                                                    </div>

                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnCheckPrice_1" href="Product.html"><u>Details & Pricing</u></a>
                                                </div>
                                                <input type="hidden" name="" id="MainContent_lvProducts_ctrl0_hfProductCode_1" value="PCA1002" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6" style="margin: 10px 0 10px 0;">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div style="width: 180px; float: left">
                                                    <input type="image" name="" id="MainContent_lvProducts_ctrl0_imgbtnProductThumb_1" class="productItemImageimg" src="products/product_03.jpg" alt="Caramel Cake" />
                                                </div>
                                                <div style="margin-left: 183px; padding-top: 20px;">
                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnProductName_1" href=""><h4>Caramel Cake</h4></a>
                                                    <div class="text-sm" style="margin-bottom:12px;">
                                                        Large, Small, Piece
                                                    </div>

                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnCheckPrice_1" href="Product.html"><u>Details & Pricing</u></a>
                                                </div>
                                                <input type="hidden" name="" id="MainContent_lvProducts_ctrl0_hfProductCode_1" value="PCA1002" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6" style="margin: 10px 0 10px 0;">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div style="width: 180px; float: left">
                                                    <input type="image" name="" id="MainContent_lvProducts_ctrl0_imgbtnProductThumb_1" class="productItemImageimg" src="products/product_04.jpg" alt="Caramel Cake" />
                                                </div>
                                                <div style="margin-left: 183px; padding-top: 20px;">
                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnProductName_1" href=""><h4>Caramel Cake</h4></a>
                                                    <div class="text-sm" style="margin-bottom:12px;">
                                                        Large, Small, Piece
                                                    </div>

                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnCheckPrice_1" href="Product.html"><u>Details & Pricing</u></a>
                                                </div>
                                                <input type="hidden" name="" id="MainContent_lvProducts_ctrl0_hfProductCode_1" value="PCA1002" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6" style="margin: 10px 0 10px 0;">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div style="width: 180px; float: left">
                                                    <input type="image" name="" id="MainContent_lvProducts_ctrl0_imgbtnProductThumb_1" class="productItemImageimg" src="products/product_05.jpg" alt="Caramel Cake" />
                                                </div>
                                                <div style="margin-left: 183px; padding-top: 20px;">
                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnProductName_1" href=""><h4>Caramel Cake</h4></a>
                                                    <div class="text-sm" style="margin-bottom:12px;">
                                                        Large, Small, Piece
                                                    </div>

                                                    <a id="MainContent_lvProducts_ctrl0_lnkbtnCheckPrice_1" href="Product.html"><u>Details & Pricing</u></a>
                                                </div>
                                                <input type="hidden" name="" id="MainContent_lvProducts_ctrl0_hfProductCode_1" value="PCA1002" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                <!--                                <div style="float: right;">
                                                                    <span id="MainContent_lvProducts_DataPagerOnlineProductsBottom"><a class="aspNetDisabled pagerButtonsBack">First</a>&nbsp;<a class="aspNetDisabled pagerButtonsBack">Previous</a>&nbsp;<span>1</span>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl01$ctl01&#39;,&#39;&#39;)">2</a>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl01$ctl02&#39;,&#39;&#39;)">3</a>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl01$ctl03&#39;,&#39;&#39;)">4</a>&nbsp;<a class="pagerButtonsForward" href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl02$ctl00&#39;,&#39;&#39;)">Next</a>&nbsp;<a class="pagerButtonsForward" href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl02$ctl01&#39;,&#39;&#39;)">Last</a>&nbsp;</span>
                                                                </div>-->


                                <input type="hidden" name="ctl00$MainContent$hfCatID" id="MainContent_hfCatID" />
                                <input type="hidden" name="ctl00$MainContent$hfCatName" id="MainContent_hfCatName" />
                                <input type="hidden" name="ctl00$MainContent$hfGroupName" id="MainContent_hfGroupName" />
                                <input type="hidden" name="ctl00$MainContent$hfConsolidateToAPage" id="MainContent_hfConsolidateToAPage" value="False" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <?php
    include './Footer.php';
    ?>
</body>
</html>
