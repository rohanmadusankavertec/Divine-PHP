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
            function getSubcategory() {
                $("#subcate").empty();
                var id = document.getElementById("category").value;
                var s1 = document.getElementById("subcate");
                var t1 = document.createElement("option");
                t1.value = "0";
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
                        getProducts(1);
                    }
                };
                xmlHttp.open("POST", "src/Product.php?action=getsubcategory&id=" + id, true);
                xmlHttp.send();
            }

            var currentpage = 1;
            var totalpages = 0;


            function getProducts(page) {
                currentpage = page;
                $("#products").empty();
                $("#paginationsection").empty();
                var cat = document.getElementById("category").value;
                var sub = document.getElementById("subcate").value;
                var p = document.getElementById("products");
                var pagination = document.getElementById("paginationsection");
                var xmlHttp = getAjaxObject();
                xmlHttp.onreadystatechange = function ()
                {
                    if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                    {
                        var Obj = JSON.parse(this.responseText);
                        for (x in Obj.product) {
                            var old = p.innerHTML;
                            var productHTML = "";
                            if (Obj.product[x][3] === null) {
                                productHTML = "<div class='col-xs-12 col-sm-12 col-md-6' style='margin: 10px 0 10px 0;'><div class='row'><div class='col-sm-12 col-md-12'><div style='width: 180px; float: left'><input type='image' class='productItemImageimg' src='img/no-image-available.jpg' /></div><div style='margin-left: 183px; padding-top: 20px;'><a href='Product.php?product=" + Obj.product[x][0] + "'><h4>" + Obj.product[x][1] + "</h4></a><div class='text-sm' style='margin-bottom:12px;'> Rs. " + Obj.product[x][2] + "</div><a href='Product.php?product=" + Obj.product[x][0] + "'><u>Details & Pricing</u></a> </div></div></div></div>";
                            } else {
                                productHTML = "<div class='col-xs-12 col-sm-12 col-md-6' style='margin: 10px 0 10px 0;'><div class='row'><div class='col-sm-12 col-md-12'><div style='width: 180px; float: left'><input type='image' class='productItemImageimg' src='src/images/" + Obj.product[x][3] + "' /></div><div style='margin-left: 183px; padding-top: 20px;'><a href='Product.php?product=" + Obj.product[x][0] + "'><h4>" + Obj.product[x][1] + "</h4></a><div class='text-sm' style='margin-bottom:12px;'> Rs. " + Obj.product[x][2] + "</div><a href='Product.php?product=" + Obj.product[x][0] + "'><u>Details & Pricing</u></a> </div></div></div></div>";
                            }

                            p.innerHTML = old + productHTML;
                        }

                        totalpages = Obj.pages;
                        if (Obj.pages == 0) {
                        } else {
                            var ul = document.createElement("ul");
                            ul.className = "pagination";


                            var lie = document.createElement("li");
                            var ae = document.createElement("a");
                            ae.innerHTML = "&laquo;";
                            ae.href = "javascript:previousePage();";
                            lie.appendChild(ae);
                            ul.appendChild(lie);

                            for (var i = 0; i < Obj.pages; i++) {

                                var pn = parseInt(i) + parseInt(1);
                                var lie = document.createElement("li");

                                if ((i + 1) == currentpage) {
                                    lie.className = "active";
                                }



                                var ae = document.createElement("a");
                                ae.innerHTML = i + 1;
                                ae.href = "javascript:getProducts('" + pn + "');";
                                lie.appendChild(ae);
                                ul.appendChild(lie);

                            }

                            var lie = document.createElement("li");
                            var ae = document.createElement("a");
                            ae.innerHTML = "&raquo;";
                            ae.href = "javascript:nextPage();";
                            lie.appendChild(ae);
                            ul.appendChild(lie);

                            pagination.appendChild(ul);
                        }

                    }
                };
                xmlHttp.open("POST", "src/Product.php?action=getproducts&category=" + cat + "&subcategory=" + sub + "&page=" + page, true);
                xmlHttp.send();
            }

            function nextPage() {
                if (currentpage == totalpages) {
                    getProducts(currentpage);

                } else {
                    getProducts(currentpage + 1);
                }
            }
            function previousePage() {
                if (currentpage == 1) {
                    getProducts(1);

                } else {
                    getProducts(currentpage - 1);
                }
            }
        </script>
    </head>
    <body onload="getProducts(1);">

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
                        <!--                        <div id="MainContent_PanelSearch" >
                        
                                                    <div class="input-group">
                                                        <input name="ctl00$MainContent$txtSearch" type="text" id="MainContent_txtSearch" class="form-control input-sm" />
                                                        <span class="input-group-btn">
                                                            <a id="MainContent_lnkbtnSearch" class="btn btn-default btn-sm" href="javascript:__doPostBack(&#39;ctl00$MainContent$lnkbtnSearch&#39;,&#39;&#39;)"><span class="glyphicon glyphicon-search"></span> Search</a>
                                                        </span>
                                                    </div>
                        
                                                </div>                        -->
                    </div>
                </div>
                <div class="row row-offcanvas row-offcanvas-left">
                    <div class="col-xs-6 col-sm-4 col-md-3 sidebar-offcanvas" id="sidebar" role="navigation">
                        <div id="MainContent_Categories" class="accordion">
                            <!--<input type="hidden" name="ctl00$MainContent$Categories_AccordionExtender_ClientState" id="MainContent_Categories_AccordionExtender_ClientState" value="0" />-->
                            <div id="MainContent" class="accordionHeaderSelected">

                                <a id="MainContent_lnkBtnMainCatHead_0" >Search Food</a>

                            </div>
                            <div id="MainContent" class="accordionContent" style="display:block;">

                                <!--<a id="MainContent_rptMenu_0_lnkBtnGroup_0" >All Cakes</a>-->
                                Category
                                <select id="category" class="form-control" onchange="getSubcategory();">
                                    <option selected="selected" value="0">--All Categories--</option>
                                    <option value="1">Cakes</option>
                                    <option value="2">Pastry & Bakery</option>
                                </select>


                                <br>

                                Sub Category
                                <select id="subcate" class="form-control" onchange="getProducts(1);">
                                    <option selected="selected" value="0">--All Sub Categories--</option>


                                </select>
                                <br>

                                <!--                                        Product
                                                                        <select id="product" class="form-control">
                                                                            <option selected="selected" value="">--All Products--</option>
                                                                            
                                
                                                                        </select>-->

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
                                <div class="visible-sm"><br /></div>
                                <br />
                                <hr />

                                <div class="row clearfix" id="products">


                                </div>

                                <div id="paginationsection">
                                    <hr />
                                    <!--                                    <ul class = "pagination">
                                                                            <li><a href = "#">&laquo;</a></li>
                                                                            <li><a href = "#">1</a></li>
                                                                            <li><a href = "#">2</a></li>
                                                                            <li><a href = "#">3</a></li>
                                                                            <li><a href = "#">4</a></li>
                                                                            <li><a href = "#">5</a></li>
                                                                            <li><a href = "#">&raquo;</a></li>
                                                                        </ul>-->
                                </div>





                                <!--                                <div style="float: right;">
                                                                    <span id="MainContent_lvProducts_DataPagerOnlineProductsBottom"><a class="aspNetDisabled pagerButtonsBack">First</a>&nbsp;<a class="aspNetDisabled pagerButtonsBack">Previous</a>&nbsp;<span>1</span>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl01$ctl01&#39;,&#39;&#39;)">2</a>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl01$ctl02&#39;,&#39;&#39;)">3</a>&nbsp;<a href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl01$ctl03&#39;,&#39;&#39;)">4</a>&nbsp;<a class="pagerButtonsForward" href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl02$ctl00&#39;,&#39;&#39;)">Next</a>&nbsp;<a class="pagerButtonsForward" href="javascript:__doPostBack(&#39;ctl00$MainContent$lvProducts$DataPagerOnlineProductsBottom$ctl02$ctl01&#39;,&#39;&#39;)">Last</a>&nbsp;</span>
                                                                </div>-->


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
