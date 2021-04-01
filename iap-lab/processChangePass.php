<?php
    include_once 'user.php';
    include_once 'db.php'; 
    $con = new DBConnector();
    $pdo = $con->connectToDB();
    $event = isset($_POST['event'])?$_POST['event']:"";
    if($event == "changePassword") 
    {      
        $currentPassword = $_POST['cpassword'];
        $newPassword = $_POST['npassword'];
        $user = new User($fullNameS, $password);
        echo $user->changePassword($pdo);
    }
?> 