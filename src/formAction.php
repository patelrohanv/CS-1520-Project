<?php
    $firstName = $_REQUEST["first_name"];
    $lastName = $_REQUEST["last_name"];
    $phoneNumber = $_REQUEST["phone"];
    $email = $_REQUEST["email"];
    $message = $_REQUEST["message"];

    $uname = "root";
    $pword = "root";



    //make the database connection
    $conn = mysql_connect("localhost", "$uname", "$pword");
    mysql_select_db("contact", $conn);

    mysql_query("INSERT INTO contact (first_name, last_name, phone, email, message) VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$message')");
    ?>