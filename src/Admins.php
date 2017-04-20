<?php
include_once './DBConnection.php';
$data   = $_REQUEST["action"];
//$data = $_POST["action"];
if ($data == "save") {

    $first = $_REQUEST["first"];
    $last = $_REQUEST["last"];
    $nic = $_REQUEST["nic"];
    $gender = $_REQUEST["gender"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $email = $_REQUEST["email"];
    $sql = "INSERT INTO admin (first, last, nic,gender,username,password,email)
VALUES ('" . $first . "', '" . $last . "', '" . $nic . "', '" . $gender . "', '" . $username . "', '" . $password . "', '" . $email . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error ".mysqli_error($conn);
    }

    $conn->close();
}else if ($data == "update") {
    $first = $_REQUEST["first"];
    $last = $_REQUEST["last"];
    $nic = $_REQUEST["nic"];
    $gender = $_REQUEST["gender"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $email = $_REQUEST["email"];
    $sql = "UPDATE admin SET first='" . $first . "',last='" . $last . "',nic='" . $nic . "',gender='" . $gender . "',username='" . $username . "',password='" . $password . "',email='" . $email . "'";
    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error ".mysqli_error($conn);
    }
    $conn->close();
}