<?php

include_once './DBConnection.php';
$data = $_REQUEST["action"];
//$data = $_POST["action"];
if ($data == "save") {

    $first = $_REQUEST["first"];
    $last = $_REQUEST["last"];
    $email = $_REQUEST["email"];
    $contact = $_REQUEST["contact"];
    $address = $_REQUEST["address"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $sql = "INSERT INTO user (first_name, last_name,contact_no, email,address,username,password)
VALUES ('" . $first . "', '" . $last . "', '" . $contact . "', '" . $email . "', '" . $address . "', '" . $username . "', '" . $password . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error " . mysqli_error($conn);
    }

    $conn->close();
} else if ($data == "login") {
    session_start();
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $sql = "SELECT * from user where username='".$username."' and password='".$password."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
            
            if($row["first_name"]!=""){
                $_SESSION['user_id'] = $row["id"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['first'] = $row["first_name"];
                $_SESSION['user_type'] = "user";
                echo "1";
                break;
            }
            
        }
    }
    
    
    
    
    $sql = "SELECT * from admin where username='".$username."' and password='".$password."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
            if($row["first"]!=""){
                $_SESSION['user_id'] = $row["id"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['first'] = $row["first"];
                $_SESSION['user_type'] = "admin";
                echo "2";
            }
            
        }
    }
    
    
    
    
    $conn->close();
}