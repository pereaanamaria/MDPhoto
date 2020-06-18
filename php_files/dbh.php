<?php
    $db_server = "localhost";
    $db_port = "3306";
    $db_pass = "parola_db";
    $db_name = "db_pw";
    $db_user = "root";

    $conn = mysqli_connect($db_server, $db_user, $db_pass,$db_name);
    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
