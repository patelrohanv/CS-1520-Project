<?php
    $firstName = $_REQUEST["first_name"];
    $lastName = $_REQUEST["last_name"];
    $phoneNumber = $_REQUEST["phone"];
    $email = $_REQUEST["email"];
    $message = $_REQUEST["message"];

    $uname = "root";
    $pword = "root";



    //make the database connection
    $db = mysqli_connect('localhost','$uname','$pword','mysql') or die('Error connecting to MySQL server.');

    $query = "INSERT INTO contact (first_name, last_name, phone, email, message) VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$message')";
    mysqli_query($db, $query) or die('Error querying database.');
?>