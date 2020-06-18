<?php

session_start();
include 'dbh.php';

$email=$_POST['email'];
$password = $_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' AND `password`=MD5('$password')";
$result=$conn->query($sql);
//$row=$result->fetch_assoc()

if(!$row=$result->fetch_assoc()) {
    header("Location:contact.html?info=error");
} else {
    if($email=="mdphoto@contact.com") {
        header("Location:admin.php");
    } else {
        $_SESSION['first_name'] = $row["first_name"];
	    $_SESSION['last_name'] = $row["last_name"];
        $_SESSION['email'] = $email;
        $_SESSION['dest'] = "mdphoto@contact.com";
        header("Location: user.php");
    }
    
}