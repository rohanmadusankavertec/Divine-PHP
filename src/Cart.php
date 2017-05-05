<?php

session_start();
include_once './DBConnection.php';
$data = $_REQUEST["action"];
if ($data == "update") {

    $qty = $_REQUEST["qty"];
    $id = $_REQUEST["id"];
    $sql = "Update cart set qty='" . $qty . "' where product_id='" . $id . "' and user_id='" . $_SESSION['user_id'] . "'";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
} else if ($data == "delete") {

    $id = $_REQUEST["id"];
    $sql = "delete from cart where product_id='" . $id . "' and user_id='" . $_SESSION['user_id'] . "'";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
} else if ($data == "addtocart") {

//    session_start();
    if (isset($_SESSION['user_type'])) {
        if (!$_SESSION['user_type'] == "user") {
            header("Location: ../Login.php");
        } else {


            $qty = $_REQUEST["qty"];
            $id = $_REQUEST["id"];
            $measure = $_REQUEST["measure"];
            $sql = "insert into cart (product_id,qty,measure,user_id) values ('" . $id . "','" . $qty . "','" . $measure . "','" . $_SESSION['user_id'] . "')";

            if ($conn->query($sql) === TRUE) {
                header("Location: ../ShoppingCart.php");
            } else {
                echo "Error <$id>" . mysqli_error($conn);
            }

            $conn->close();
        }
    } else {

        if (isset($_SESSION['session_cart'])) {
            $arr_json = $_SESSION['session_cart'];
            $arr = json_decode($arr_json);
        } else {
            $arr = array();
        }

        $qty = $_REQUEST["qty"];
        $itm = $_REQUEST["id"];
        $mea = "";
        if (isset($_REQUEST["measure"])) {
            $mea = $_REQUEST["measure"];
        }



        $cartitems = $itm . ";;;;" . $qty . ";;;;" . $mea;
        array_push($arr, $cartitems);

        $arr_json = json_encode($arr);
        $_SESSION['session_cart'] = $arr_json;






//         $arr_json2 = $_SESSION['session_cart'];
//            $ci = json_decode($arr_json2);
//        
//        for ($index = 0; $index < sizeof($ci); $index++) {
//            $obj =(String) $ci[$index];
//            echo $obj;
//        }
        header("Location: ../ShoppingCart.php");
    }
} else if ($data == "deletesession") {
    $id = $_REQUEST["id"];

    if (isset($_SESSION['session_cart'])) {
        $arr_json = $_SESSION['session_cart'];
        $arr = json_decode($arr_json);
    }
    $arr_json2 = $_SESSION['session_cart'];
    $ci = json_decode($arr_json2);
    $arr = array();
    for ($index = 0; $index < sizeof($ci); $index++) {
        $obj = (String) $ci[$index];
//        echo $obj;

        $parr = split(";;;;", $obj);

        if ($id != $parr[0]) {
            $cartitems = $parr[0] . ";;;;" . $parr[1] . ";;;;" . $parr[2];
            array_push($arr, $cartitems);
        }
    }
    $arr_json = json_encode($arr);
    $_SESSION['session_cart'] = $arr_json;
    echo 'Success';
}