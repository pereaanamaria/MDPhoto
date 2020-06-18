<?php
session_start();
include 'dbh.php';

$dest = $_POST['email'];

$sql="SELECT * FROM users WHERE email='$dest'";
$result=$conn->query($sql);

if(!$row=$result->fetch_assoc()) {
    header("Location:admin.php?info=inexistent_user");
} else {

    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['email'] = "mdphoto@contact.com";
    $_SESSION['dest'] = $dest;
    header("Location:admin_chat.php");
    
}

