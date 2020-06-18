<?php 
    session_start();
    include('dbh.php');
    $image_adr=$_POST['path'];
    $category=$_POST['category'];
    $category_ro=$_POST['category_ro'];

    $sql=sprintf("INSERT INTO photo_index (image_adr,category,category_ro) VALUES ('%s','%s','%s')",$image_adr,$category,$category_ro);
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    header("Location: add_photos.php");