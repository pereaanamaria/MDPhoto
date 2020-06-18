<?php
include 'dbh.php';
session_start();
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$res = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'") or die(mysqli_error($link));
$randurires = mysqli_num_rows($res);

$emailVer = test_input($email);
    
    if(!filter_var($emailVer,FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.html?info=invalid_email_format");
    } else if($randurires) {
        header("Location: contact.html?info=email_exists_already");
    } else {
        $sql="INSERT INTO users (first_name, last_name, email, `password`) VALUES ('$first_name','$last_name','$email',MD5('$password'))";
        $result=$conn->query($sql) or die(mysqli_error($conn));

        $_SESSION['first_name'] = $first_name;
		$_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['dest'] = "mdphoto@contact.com";
        header("Location: user.php");
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
