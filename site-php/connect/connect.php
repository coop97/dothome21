<?php
    $host = "localhost";
    $user = "coop97";
    $pass = "dksro6990!!";
    $db = "coop97";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    }else {
        // echo "Database Connect True";
    }
?>