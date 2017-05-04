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
                            <?php
                                include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Cake' and c.category='Cakes' and p.is_valid='1'";
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
                                
                                <?php
                                include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Divine Christmas Collection' and c.category='Cakes' and p.is_valid='1'";
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
                            <?php
                                include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Gateau' and c.category='Cakes' and p.is_valid='1'";
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
                             <?php
                                include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Dessert' and c.category='Cakes' and p.is_valid='1'";
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
                            <?php
                                include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Cup Cakes and other delights' and c.category='Cakes' and p.is_valid='1'";
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
