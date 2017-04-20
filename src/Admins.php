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
    $sql = "INSERT INTO admin (first, last, nic,gender,username,password)
VALUES ('" . $first . "', '" . $last . "', '" . $nic . "', '" . $gender . "', '" . $username . "', '" . $password . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error ".mysqli_error($conn);
    }

    $conn->close();
}