<?php
$data   = filter_input(INPUT_POST, 'action', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
//$data = $_POST["action"];
if ($data == "save") {

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
        echo "Error ".mysqli_error($conn);
    }

    $conn->close();
}