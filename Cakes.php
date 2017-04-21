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
        <div id="MainContent_bgTopLarge" class="hidden-xs" style="height: 500px; width:93%; overflow: hidden;  z-index: -5; background: #fff url('img/PageImage3.jpg') no-repeat top center;"></div>
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
                    <div class="col-xs-12 col-md-6" style="border-right: solid 1px #ededed">
                        <div id="MainContent_UpdatePanelForm">
                            <img src="img/butter-cake.jpg" width="100%" height="100%"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Divine Signature Collection</h2>
                            <br /><br >
                            <table>


                                <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Divine Signature Collection' and c.category='Cakes' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 2, '.', '');?></td>
                                        </tr>


                                        <?php
                                    }
                                }
                                $conn->close();
                                ?>





<!--                                <tr>
                                    <td style="width: 300px;"><a href="Product.html">Butter Cake</a></td><td></td><td>Rs.680.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Chocolate Cake</a></td><td></td><td>Rs.760.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Chocolate Cherry BrandyCake</a></td><td></td><td>Rs.1,110.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Chocolate Fudge Cake</a></td><td></td><td>Rs.970.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Coffee Cake</a></td><td></td><td>Rs.760.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Date Cake with Butterscotch topping</a></td><td></td><td>Rs.1,150.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Lemon Curd Cake</a></td><td></td><td>Rs.830.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Love Cake</a></td><td></td><td>Rs.1,160.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Orange Cake</a></td><td></td><td>Rs.760.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Ribbon Cake</a></td><td></td><td>Rs.760.00</td>
                                </tr>-->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-6" style="border-right: solid 1px #ededed">

                        <h2>Cake</h2>
                        <br /><br >
                        <table>
                            <tr>
                                <td style="width: 300px;"><a href="Product.html">Butter Cake</a></td><td></td><td>Rs.680.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Butterscotch Cake</a></td><td></td><td>Rs.890.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Carrot Cake</a></td><td></td><td>Rs.1,200.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Cake</a></td><td></td><td>Rs.760.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Cake with Roasted Nuts</a></td><td></td><td>Rs.1,010.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Cherry Brandy Cake</a></td><td></td><td>Rs.1,110.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Fudge Cake</a></td><td></td><td>Rs.970.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Mud Cake</a></td><td></td><td>Rs.1,010.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Coffee Cake</a></td><td></td><td>Rs.760.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Coffee Cake with Roasted Nuts</a></td><td></td><td>Rs.1,010.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Date Cake</a></td><td></td><td>Rs.1,050.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Date Cake with Butterscotch topping</a></td><td></td><td>Rs.1,150.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Fruit Cake</a></td><td></td><td>Rs.1,050.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Jaggery Cake</a></td><td></td><td>Rs.900.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Lemon Curd Cake</a></td><td></td><td>Rs.830.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Love Cake</a></td><td></td><td>Rs.1,160.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Love Cake (without alcohol)</a></td><td></td><td>Rs.1,160.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Mocha Cake</a></td><td></td><td>Rs.760.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Orange Cake</a></td><td></td><td>Rs.760.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Red Velvet Cake</a></td><td></td><td>Rs.1,200.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Ribbon Cake</a></td><td></td><td>Rs.760.00</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <div id="MainContent_UpdatePanelForm">
                                <img src="img/lemon_cake.jpg" width="100%" height="100%"/>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>











        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-6" style="border-right: solid 1px #ededed">
                        <div id="MainContent_UpdatePanelForm">
                            <img src="img/Christmas_pudding.jpg" width="100%" height="100%"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Divine Christmas Collection</h2>
                            <br /><br >
                            <table>
                                <tr>
                                    <td style="width: 300px;"><a href="Product.html">Breudher </a></td><td></td><td>Rs.850.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Christmas Pudding</a></td><td></td><td>Rs.1,800.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Mince Pies</a></td><td></td><td>Rs.100.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Rich Cake Gift Basket</a></td><td></td><td>Rs.2,550.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Rich Cake Gift Box</a></td><td></td><td>Rs.2,050.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Rich Cake with almond paste</a></td><td></td><td>Rs.1,950.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Rich Cake without almond paste</a></td><td></td><td>Rs.1,850.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Yule Log</a></td><td></td><td>Rs.1,000.00</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>










        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-6" style="border-right: solid 1px #ededed">

                        <h2>Gateau</h2>
                        <br /><br >
                        <table>
                            <tr>
                                <td style="width: 300px;"><a href="Product.html">Black Forest Gateau</a></td><td></td><td>Rs.1,860.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Butterscotch Nut Meringue</a></td><td></td><td>Rs.2,750.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Gateau</a></td><td></td><td>Rs.1,500.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Swiss Roll</a></td><td></td><td>Rs.550.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Devil Chocolate Mousse Cake</a></td><td></td><td>Rs.2,500.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">La Bomba</a></td><td></td><td>Rs.1,980.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Mixed Fruit Gateau</a></td><td></td><td>Rs.1,750.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Mocha Gateau</a></td><td></td><td>Rs.1,450.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Pineapple Gateau</a></td><td></td><td>Rs.1,540.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Strawberry Valentine Cake</a></td><td></td><td>Rs.1,500.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Vanilla Swiss Roll</a></td><td></td><td>Rs.550.00</td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>


                            <div id="MainContent_UpdatePanelForm">
                                <img src="img/Mixed_fruit_gateau.jpeg" width="100%" height="100%"/>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-6" style="border-right: solid 1px #ededed">
                        <div id="MainContent_UpdatePanelForm">
                            <img src="img/Strawberry-cheesecake-recipe.jpg" width="100%" height="100%"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>
                            <h2>Dessert</h2>
                            <br /><br >
                            <table>
                                <tr>
                                    <td style="width: 300px;"><a href="Product.html">Blueberry Cheese Cake</a> </td><td></td><td>Rs.1,950.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Chocolate Biscuit Pudding</a></td><td></td><td>Rs.1,550.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Chocolate Meringue</a></td><td></td><td>Rs.1,250.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Chocolate Mousse</a></td><td></td><td>Rs.1,550.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Cold Cheese Cake</a></td><td></td><td>Rs.1,100.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Frozen Vanilla Mousse</a></td><td></td><td>Rs.1,000.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Passionfruit Bavarian</a></td><td></td><td>Rs.1,230.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Strawberry Cheese Cake</a></td><td></td><td>Rs.130.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Tiramisu</a></td><td></td><td>Rs.1,450.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Blueberry Cheese Cake Cup</a></td><td></td><td>Rs.160.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Strawberry Cheese Cake Cup</a></td><td></td><td>Rs.130.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Chocolate Biscuit Pudding Cup</a></td><td></td><td>Rs.110.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Chocolate Mousse Cup</a></td><td></td><td>Rs.110.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Tiramisu Cup</a></td><td></td><td>Rs.140.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Cold Cheese Cake Cup</a></td><td></td><td>Rs.110.00</td>
                                </tr>
                                <tr>
                                    <td><a href="Product.html">Fruit Trifle Cup</a></td><td></td><td>Rs.110.00</td>
                                </tr>








                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-6" style="border-right: solid 1px #ededed">

                        <h2>Cup Cakes and other delights</h2>
                        <br /><br >
                        <table>
                            <tr>
                                <td style="width: 300px;"><a href="Product.html">Chocolate Cup Cake</a></td><td></td><td>Rs.100.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Vanilla Cup Cake</a></td><td></td><td>Rs.100.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Mud Cup Cake</a></td><td></td><td>Rs.160.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Red Velvet Cup Cake</a></td><td></td><td>Rs.120.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Fudge Brownie</a></td><td></td><td>Rs.100.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Red Velvet Brownie</a></td><td></td><td>Rs.180.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Apple Pie</a></td><td></td><td>Rs.150.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Apple Crumble</a></td><td></td><td>Rs.150.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Eclair</a></td><td></td><td>Rs.100.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Caramel Bar</a></td><td></td><td>Rs.100.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Lemon Bar</a></td><td></td><td>Rs.120.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Doughnut</a></td><td></td><td>Rs.100.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Cherry Gateau</a></td><td></td><td>Rs.180.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Club Gateau</a></td><td></td><td>Rs.180.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Pineapple Gateau</a></td><td></td><td>Rs.180.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Chocolate Gateau</a></td><td></td><td>Rs.150.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">Thala </a></td><td></td><td>Rs.540.00</td>
                            </tr>
                            <tr>
                                <td><a href="Product.html">French Cookies</a></td><td></td><td>Rs.190.00</td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="col-xs-12 col-md-12">
                            <div class="visible-xs">
                                <br />
                                <hr />
                                <br />
                            </div>

                            <div id="MainContent_UpdatePanelForm">
                                <img src="img/chocolate-cup-cake.jpg" width="100%" height="100%"/>
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
