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
    
    
            function getProducts(category,subcategory,element) {
                var p=document.getElementById(element);
                p.innerHTML="";
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

                        

                    }
                };
                xmlHttp.open("POST", "src/Product.php?action=getallproducts&category="+category+"&subcategory="+subcategory , true);
                xmlHttp.send();
            }
            function LoadProducts(){
            getProducts("Cakes","Divine Signature Collection","dscollection");
            getProducts("Cakes","Cake","cakediv");
            getProducts("Cakes","Divine Christmas Collection","christmascollection");
            getProducts("Cakes","Gateau","gateau");
            getProducts("Cakes","Dessert","dessert");
            getProducts("Cakes","Cup Cakes and other delights","ccaod");
            
            }
        </script>
    </head>
    <body onload="LoadProducts();">

        <?php
        include './Header.php';
        ?>

    <center>
        <div id="MainContent_bgTopLarge" class="hidden-xs" style="height: 500px; width:93%; overflow: hidden;  z-index: -5; background: #fff url('img/PageImage4.jpg') no-repeat top center;"></div>
    </center>
    <div class="visible-xs" style="height:320px;padding:0;z-index:-5;margin-top:-125px;background:#fff;" ></div>
    <div class="container InnerPageContentBlock" style="font-size: 16px;letter-spacing: 1px; width: 91%">
        <div class="row">
            <div class="col-xs-6 col-sm-4">
                <div class="InnerPageContentTitleWrap" style="width: 250px;">
                    <h1>Cakes</h1>
                </div>
            </div>
        </div>



        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Divine Signature Collection</h2>
                            <br /><br >
                            <div id="dscollection"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Cakes</h2>
                            <br /><br >
                            <div id="cakediv"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Divine Christmas Collection</h2>
                            <br /><br >
                            <div id="christmascollection"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Gateau</h2>
                            <br /><br >
                            <div id="gateau"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Dessert</h2>
                            <br /><br >
                            <div id="dessert"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Cup Cakes and other delights</h2>
                            <br /><br >
                            <div id="ccaod"></div>
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
