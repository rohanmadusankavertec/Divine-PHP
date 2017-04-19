<?php

$action = $_POST["action"];
if ($action == "save") {

    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];




    $sql = "INSERT INTO contact (first, last, email,contact,subject,message)
VALUES ('" . $first . "', '" . $last . "', '" . $email . "', '" . $contact . "', '" . $subject . "', '" . $message . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error";
    }

    $conn->close();
}