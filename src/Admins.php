<?php
include_once './DBConnection.php';
$data   = $_REQUEST["action"];
//$data = $_POST["action"];
if ($data == "save") {

    $first = $_REQUEST["first"];
    $last = $_REQUEST["last"];
    $email = $_REQUEST["email"];
    $contact = $_REQUEST["contact"];
    $subject = $_REQUEST["subject"];
    $message = $_REQUEST["message"];
    $sql = "INSERT INTO contact (first, last, email,contact,subject,message)
VALUES ('" . $first . "', '" . $last . "', '" . $email . "', '" . $contact . "', '" . $subject . "', '" . $message . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error ".mysqli_error($conn);
    }

    $conn->close();
}