<?php

    session_start();
    if(isset($_SESSION['first_name'])) {
        echo $_SESSION['first_name'];
    } 

?>