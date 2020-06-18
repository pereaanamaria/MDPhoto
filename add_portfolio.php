<?php 
    session_start();
    include('dbh.php');
    $source=$_POST['path'];
    $source_square=$_POST['square_path'];
    $category=$_POST['category'];
    $category_ro=$_POST['category_ro'];

    $sql=sprintf("INSERT INTO photo_portfolio (source,source_square,category,category_ro) VALUES ('%s','%s','%s','%s')",$source,$source_square,$category,$category_ro);
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    header("Location: add_photos.php");