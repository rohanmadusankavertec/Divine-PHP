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
                        <h1>Pastry & Bakery</h1>
                    </div>
                </div>
            </div>
            <div class="row InnerPageContentInnerContentWrap" style="font-size: 16px;letter-spacing: 1px;">
                <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                    <div class="row">
                        <div class="col-xs-12 col-md-6" style="border-right: solid 1px #ededed">
                            <div id="MainContent_UpdatePanelForm">
                                <img src="img/ham_cheese_bun.jpg" width="100%" height="100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>
                                <h2>Bread</h2>
                                <br /><br >
                                <table>
                                    <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Bread' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
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
                        <div class="col-xs-12 col-md-6">

                            <h2>Pizza</h2>
                            <br /><br >
                            <table>
                                <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Pizza' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
                                        </tr>


                                        <?php
                                    }
                                }
                                $conn->close();
                                ?>
                                
                            </table>
                        </div>
                        <div class="col-xs-12 col-md-6"style="border-left: solid 1px #ededed">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>
                                <div id="MainContent_UpdatePanelForm">
                                    <img src="img/chicken-pizza.jpeg" width="100%" height="100%"/>
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
                                <img src="img/eggroll.jpg" width="100%" height="100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>
                                <h2>Patties, Rolls & Cutlets</h2>
                                <br /><br >
                                <table>
                                    <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Patties, Rolls & Cutlets' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
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

                            <h2>Cocktail Items</h2>
                            <br /><br >
                            <table>
                                <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Cocktail Items' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
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
                                    <img src="img/Chicken_BBQ_kebab.jpg" width="100%" height="100%"/>
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
                                <img src="img/Vol-Au-Vent.jpg" width="100%" height="100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>
                                <h2>Pastries & Pies</h2>
                                <br /><br >
                                <table>
                                    <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Pastries & Pies' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
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
                        <div class="col-xs-12 col-md-6">

                            <h2>Other Savouries</h2>
                            <br /><br >
                            <table>
                                <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Other Savouries' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
                                        </tr>


                                        <?php
                                    }
                                }
                                $conn->close();
                                ?>
                                

                            </table>
                        </div>
                        <div class="col-xs-12 col-md-6" style="border-left: solid 1px #ededed">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>

                                <div id="MainContent_UpdatePanelForm">
                                    <img src="img/csm_stuffed_capsicum.jpg" width="100%" height="100%"/>
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
                                <img src="img/fried_rice.jpg" width="100%" height="100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>
                                <h2>Rice</h2>
                                <br /><br >
                                <table>
                                    <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Rice' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
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
                        <div class="col-xs-12 col-md-6">

                            <h2>Hot Dogs & Burgers</h2>
                            <br /><br >
                            <table>
                                <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Hot Dogs & Burgers' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
                                        </tr>


                                        <?php
                                    }
                                }
                                $conn->close();
                                ?>
                                

                            </table>
                        </div>
                        <div class="col-xs-12 col-md-6" style="border-left: solid 1px #ededed">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>

                                <div id="MainContent_UpdatePanelForm">
                                    <img src="img/hot_dogs.jpg" width="100%" height="100%"/>
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
                                <img src="img/platters.jpg" width="100%" height="100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>
                                <h2>Platters</h2>
                                <br /><br >
                                <table>
                                    <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Platters' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
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
                        <div class="col-xs-12 col-md-6">

                            <h2>Beverages, Ice Cream & Fruit Salad</h2>
                            <br /><br >
                            <table>
                                <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Beverages, Ice Cream & Fruit Salad' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
                                        </tr>


                                        <?php
                                    }
                                }
                                $conn->close();
                                ?>

                            </table>
                        </div>
                        <div class="col-xs-12 col-md-6" style="border-left: solid 1px #ededed">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>

                                <div id="MainContent_UpdatePanelForm">
                                    <img src="img/juice.jpg" width="100%" height="100%"/>
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
                                <img src="img/juice (1).jpg" width="100%" height="100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <div class="col-xs-12 col-md-12">
                                <div class="visible-xs">
                                    <br />
                                    <hr />
                                    <br />
                                </div>
                                <h2>Fresh Juice</h2>
                                <br /><br >
                                <table>
                                    <?php
                                        include './src/DBConnection.php';
                                $sql = "SELECT p.id,p.name,p.price FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where s.subcategory='Fresh Juice' and c.category='Pastry & Bakery' and p.is_valid='1'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td style="width: 300px;"><a href="Product.php?product=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></td><td></td><td>Rs.<?php echo number_format((float)$row["price"], 0, '.', '');?></td>
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
            
            
            

        </div>


        <?php
        include './Footer.php';
        ?>
    </body>
</html>
