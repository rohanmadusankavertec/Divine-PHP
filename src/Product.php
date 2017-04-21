<?php

include_once './DBConnection.php';
$data = $_REQUEST["action"];
//$data = $_POST["action"];
if ($data == "save") {


    $category = $_REQUEST["category"];
    $subcate = $_REQUEST["subcate"];
    $product = $_REQUEST["product"];
    $price = $_REQUEST["price"];
    $description = $_REQUEST["description"];
//    $image = $_REQUEST["image"];
    $filename = $_FILES['image']['name'];
    $dat = date('Y_m_d_H_i_s');
    $name = $dat . $filename;
//    echo $dat;
    $valid = 1;
    $targert = "images/" . basename($name);
    move_uploaded_file($_FILES["image"]['tmp_name'], $targert);

    $sql = "INSERT INTO product (name, description, price,img,subcategory_id,is_valid)
VALUES ('" . $product . "', '" . $description . "', '" . $price . "', '" . $name . "', '" . $subcate . "', '" . $valid . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location:../admin_product.php");
//        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
} else if ($data == "getcategory") {


    $category = $_REQUEST["category"];

    $sql = "SELECT subcategory FROM subcategory where category_id='".$category."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $row["subcategory"];
        }
    }
    $conn->close();
}else if ($data == "delete") {


    $id = $_REQUEST["id"];
    $sql = "Update product set is_valid='0' where id='".$id."'";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
}

