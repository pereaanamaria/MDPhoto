<?php
    session_start();
    include 'dbh.php';

    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $dest = $_SESSION['dest'];
    $message = $_POST['message'];


    $sql=sprintf("INSERT INTO posts (email,dest,`message`) VALUES ('%s','%s','%s')",$email,$dest,$message);
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    if($email=="mdphoto@contact.com") {
        $_SESSION['first_name'] = $first_name;
	    $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['dest'] = $dest;
        header("Location: admin_chat.php");
    } else {
        $_SESSION['first_name'] = $first_name;
	    $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['dest'] = $dest;
        header("Location: user.php");
    }