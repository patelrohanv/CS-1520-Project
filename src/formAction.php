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

    $sql = "INSERT";

    $result = mysql_query($sql, $conn);
    ?>