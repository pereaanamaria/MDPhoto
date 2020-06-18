<?php
session_start();
include 'dbh.php';

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$dest = $_SESSION['dest'];

$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['dest'] = $dest;
header("Location:admin_chat.php");