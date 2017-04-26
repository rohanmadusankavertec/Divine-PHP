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

    session_start();
    if (isset($_SESSION['user_type'])) {
        if (!$_SESSION['user_type'] == "user") {
            header("Location: ../Login.php");
        } else {


            $qty = $_REQUEST["qty"];
            $id = $_REQUEST["id"];
            $sql = "insert into cart (product_id,qty,user_id) values ('" . $id . "','" . $qty . "','" . $_SESSION['user_id'] . "')";

            if ($conn->query($sql) === TRUE) {
                header("Location: ../ShoppingCart.php");
            } else {
                echo "Error <$id>" . mysqli_error($conn);
            }

            $conn->close();
        }
    } else {
        header("Location: ../Login.php");
    }
}