<?php
    include_once 'user.php';
    include_once 'db.php'; 
    $con = new DBConnector();
    $pdo = $con->connectToDB();
    $event = isset($_POST['event'])?$_POST['event']:"";
    if($event == "changePassword")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = new User($email, $password);
        echo $user->changePassword($pdo);
    }
?> 