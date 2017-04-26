<?php
session_start();
if (isset($_SESSION['user_type'])) {
    if (!$_SESSION['user_type'] == "user") {
        ?>

        <script>
            window.location = 'Login.php';
        </script>

        <?php
    }
} else {
    ?>
    <script>
        window.location = 'Login.php';
    </script>

    <?php
}
?>
    <?php
                                            include './src/DBConnection.php';
                                            $sql = "SELECT price,qty from cart c inner join product p on c.product_id=p.id where c.user_id='" . $_SESSION["user_id"] . "'";
                                            $result = $conn->query($sql);
                                            $total=0.0;
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
//                                                    echo $row["price"];
//                                                    echo $row["qty"];
                                                    $total=  floatval($total)+(floatval($row["price"])*floatval($row["qty"]));
                                                }
                                            }
//                                            echo $total;
                                            $conn->close();
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

        <script type="text/javascript">
            
            function UpdateCart(id) {
                var qty = document.getElementById("qty" + id).value;
                if (qty !== "") {
                    var xmlHttp = getAjaxObject();
                    xmlHttp.onreadystatechange = function ()
                    {
                        if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                        {
                            var reply = xmlHttp.responseText;
                            if (reply === "Success") {
                                window.location = 'ShoppingCart.php';
                            }
                        }
                    };
                    xmlHttp.open("POST", "src/Cart.php?action=update&id=" + id + "&qty=" + qty, true);
                    xmlHttp.send();
                }
            }
            function Total(){
                var stot= <?php echo $total;?>;
                var loc=document.getElementById("location").value;
                document.getElementById("delivery").innerHTML=":Rs. "+loc;
                document.getElementById("gtot").innerHTML=":Rs. "+(parseFloat(stot)+parseFloat(loc));
                
            }
        </script>


    </head>
    <body onload="Total();">

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
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                    <div class="col-xs-12 col-md-7" style="border-right: solid 1px #ededed">
                        <div id="MainContent_UpdatePanelForm">

                            <h4>Checkout Details</h4>
                            <br />
                            <br />
                            <div data-val-validationGroup="valGroupContactUs" id="MainContent_valSummary" class="text-danger alert alert-danger ValidationSummaryBlock" data-valsummary="true" style="display:none;">

                            </div>
                            <div class="form-horizontal" style="font-size: 16px;letter-spacing: 1px; ">

                                <div class="form-group FormFieldSpacing">
                                    <label for="MainContent_txtMessage" id="MainContent_lblMessage" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <label id="MainContent_lblMessage" class="col-md-12 control-label" style="text-align: left;">Rohan Madusanka</label>
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label for="MainContent_txtMessage" id="MainContent_lblMessage" class="col-md-3 control-label">Delivery Address</label>
                                    <div class="col-md-9">
                                        <textarea style="font-size: 14px;" name="message" rows="5" cols="20" id="message" class="form-control input-sm" placeholder="(Plain text only)">No 123, Galle Road, Colombo.</textarea>
                                        <span style="color: red;" id="messagee"></span>
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label for="MainContent_ddlSubject" id="MainContent_lblSubject" class="col-md-3 control-label">Region / State</label>
                                    <div class="col-md-9">
                                        <select id="location" class="form-control" onchange="Total();">
                                            <option selected="selected" value="0">Please select Region / State..</option>
                                            <option value="350">Colombo 01</option>
                                            <option value="250">Colombo 02</option>
                                            <option value="200">Colombo 03</option>
                                            <option value="200">Colombo 04</option>
                                            <option value="350">Colombo 05</option>
                                            <option value="350">Colombo 06</option>
                                            <option value="250">Colombo 07</option>
                                            <option value="350">Colombo 08</option>
                                            <option value="350">Colombo 10</option>
                                            <option value="350">Colombo 11</option>
                                            <option value="350">Colombo 12</option>
                                            <option value="450">Colombo 13</option>
                                            <option value="450">Colombo 14</option>
                                            <option value="450">Colombo 15</option>
                                            <option value="400">Dehiwala</option>
                                            <option value="350">Kirulapone</option>
                                            <option value="450">Nawala</option>
                                            <option value="450">Rajagiriya </option>
                                            <option value="400">Nugegoda </option>
                                            <option value="400">Kohuwala </option>
                                            <option value="400">Mount Lavinia </option>
                                            <option value="700">Rathmalana  </option>
                                            <option value="700">Malabe  </option>
                                            <option value="700">Waththala  </option>
                                            <option value="600">Kolonnawa   </option>
                                            <option value="1200">Export Promotion Zone, Biyagama   </option>

                                        </select>
                                        <span style="color: red;" id="subjecte"></span>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5"  style="font-size: 16px;letter-spacing: 1px; ">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div style="border: 1px solid #d3d3d3; padding-left: 4px; padding-bottom: 4px; margin-top: 100px;">
                            <div class="row CartTotalsMargin">
                                <div class="col-xs-5 col-sm-6 col-md-6">Sub Total</div>
                                <div class="col-xs-7 col-sm-6 col-md-6">
                                    <span id="MainContent_lblCartSubTotal">: Rs. <?php echo $total;?></span>
                                </div>
                            </div>

                            <div class="row CartTotalsMargin">
                                <div class="col-xs-5 col-sm-6 col-md-6">Delivery Estimate</div>
                                <div class="col-xs-7 col-sm-6 col-md-6">
                                    <span id="delivery">: Rs. 00.00</span>
                                    </div>
                            </div>
                            <div class="row CartTotalsMargin">
                                <div class="col-xs-5 col-sm-6 col-md-6"><strong>Order Total</strong></div>
                                <div class="col-xs-7 col-sm-6 col-md-6">
                                    <strong>
                                        <span id="gtot">: Rs. 0000.00</span></strong>
                                </div>
                            </div>
                        </div>
                            <div class="form-group FormFieldSpacing" style="margin-top: 20px;">
                                    <input class="form-group btn-danger" id="submitbtn" type="button" onclick="Send()" value="Order" style="float: right;border-radius: 3px; margin-right: 20px;"/>

                                </div>
                    </div>
                    </div>
                </div>
        <div class="row clearfix" style="margin-bottom: 40px">
            &nbsp;
        </div>
        </div>
    </div>


    <?php
    include './Footer.php';
    ?>
</body>
</html>
