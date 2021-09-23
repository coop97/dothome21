<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardTitle = $_POST['boardTitle'];
    $boardContent = $_POST['boardContent'];

    //echo $boardTitle, $boardContent;

    $boardTitle = $connect -> real_eacape_string($boardTitle);
    $boardContent = $connect -> real_eacape_string($boardContent);
    $boardView = 0;
    $regTime = time();
    $memberID = $_SESSION['myMemberID'];
?>