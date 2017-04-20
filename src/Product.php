<?php

include_once './DBConnection.php';
$data   = $_REQUEST["action"];
//$data = $_POST["action"];
if ($data == "save") {

    
    $category = $_REQUEST["category"];
    $subcate = $_REQUEST["subcate"];
    $product = $_REQUEST["product"];
    $price = $_REQUEST["price"];
    $description = $_REQUEST["description"];
//    $image = $_REQUEST["image"];
    $filename=$_FILES['image']['name'];
    $dat = date('Y/m/d/H/i/s');
    $name = $dat.$filename;
    echo $dat;
    $valid = 1;
    $targert ="images/".basename($name);
    move_uploaded_file($_FILES["image"]['tmp_name'], $targert);
    
    $sql = "INSERT INTO product (name, description, price,img,subcategory_id,is_valid)
VALUES ('" . $product . "', '" . $description . "', '" . $price . "', '" . $name . "', '" . $subcate . "', '" . $valid . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location:../admin_product.php");
//        echo "Success";
    } else {
        echo "Error ".mysqli_error($conn);
    }

    $conn->close();
}

