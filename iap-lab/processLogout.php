<?php
    include_once 'user.php';
    include_once 'db.php'; 
    $con = new DBConnector();
    $pdo = $con->connectToDB();
    session_unset();
    session_destroy();
    header("Location:login.php");
?>