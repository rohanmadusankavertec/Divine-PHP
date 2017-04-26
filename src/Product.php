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
} else if ($data == "getsubcategory") {


    $category = $_REQUEST["id"];

    $sql = "SELECT id,subcategory FROM subcategory where category_id='" . $category . "'";
    $result = $conn->query($sql);
    $arr = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

//            $myObj->id = $row["id"];
//            $myObj->name = $row["subcategory"];
            $pro = array($row["id"], $row["subcategory"]);


            array_push($arr, $pro);
        }
    }
    $myJSON = json_encode($arr);
    echo $myJSON;
    $conn->close();
} else if ($data == "delete") {


    $id = $_REQUEST["id"];
    $sql = "Update product set is_valid='0' where id='" . $id . "'";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
} else if ($data == "update") {


    $id = $_REQUEST["id"];
//    echo $id;
    $category = $_REQUEST["category"];
    $subcate = $_REQUEST["subcate"];
    $product = $_REQUEST["product"];
    $price = $_REQUEST["price"];
    $description = $_REQUEST["description"];
    $oimg = $_REQUEST["oldimg"];
//    echo "OLD IMAGE ".$oimg;
//    $image = $_REQUEST["image"];
    $filename = $_FILES['image']['name'];
//    echo 'NEW IMG'.$filename;
    $dat = date('Y_m_d_H_i_s');
    $name = $dat . $filename;
//    echo $dat;
    $valid = 1;
    $targert = "images/" . basename($name);
    move_uploaded_file($_FILES["image"]['tmp_name'], $targert);

    if ($filename == "") {
//        echo "New image is empty";
        $name = $oimg;
    }


    $sql = "update product set name='" . $product . "',description='" . $description . "',price='" . $price . "',img='" . $name . "',subcategory_id='" . $subcate . "' where id='" . $id . "'";


//    $sql = "INSERT INTO product (name, description, price,img,subcategory_id,is_valid)
//VALUES ('" . $product . "', '" . $description . "', '" . $price . "', '" . $name . "', '" . $subcate . "', '" . $valid . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location:../admin_product.php");
//        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
} else if ($data == "getproducts") {


    $category = $_REQUEST["category"];
    $subcategory = $_REQUEST["subcategory"];
    $page2 = $_REQUEST["page"];

    $num_rec_per_page = 10;


    if (isset($page2)) {
        $page = $page2;
    } else {
        $page = 1;
    }
    $start_from = ($page - 1) * $num_rec_per_page;

    $sql = "SELECT p.id,p.name,p.price,p.img FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where p.is_valid='1' ";

    if ($category != "0") {
        $sql.="and c.id='" . $category . "' ";
    }
    if ($subcategory != "0") {
        $sql.="and s.id='" . $subcategory . "' ";
    }
    $sql.="LIMIT $start_from, $num_rec_per_page";



//    $sql = "SELECT p.id,p.name,p.price,p.img FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where p.is_valid='1' and s.id='" . $subcategory . "' and c.id='" . $category . "' LIMIT $start_from, $num_rec_per_page";
//$sql = "SELECT * FROM product LIMIT $start_from, $num_rec_per_page"; 
    $rs_result = $conn->query($sql); //run the query
    $arr = array();

    while ($row = $rs_result->fetch_assoc()) {

        $pro = array($row["id"], $row["name"], $row["price"], $row["img"]);


        array_push($arr, $pro);
    }
//    $sql = "SELECT p.id,c.category,s.subcategory,p.name,p.price,p.description FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where p.is_valid='1' and s.id='" . $subcategory . "' and c.id='" . $category . "'";

    $sql = "SELECT p.id,p.name,p.price,p.img FROM product p inner join subcategory s on p.subcategory_id=s.id inner join category c on c.id=s.category_id where p.is_valid='1' ";

    if ($category != "0") {
        $sql.="and c.id='" . $category . "' ";
    }
    if ($subcategory != "0") {
        $sql.="and s.id='" . $subcategory . "' ";
    }

    $rs_result = $conn->query($sql); //run the query
    $total_records = $rs_result->num_rows;  //count number of records

    $total_pages = ceil($total_records / $num_rec_per_page);
    $arr2 = array($total_pages);
    $myObj = new stdClass();
    $myObj->product = $arr;
    $myObj->pages = $arr2;
    
    $myJSON = json_encode($myObj);
    echo $myJSON;
    $conn->close();
}

