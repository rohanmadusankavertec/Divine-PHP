<?php

include_once './DBConnection.php';
$data = $_REQUEST["action"];
if ($data == "update") {

    $qty = $_REQUEST["qty"];
    $id = $_REQUEST["id"];
    $sql = "Update cart set qty='" . $qty . "' where id='" . $id . "'";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
}else if ($data == "delete") {

    $id = $_REQUEST["id"];
    $sql = "delete from cart where id='" . $id . "'";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
}