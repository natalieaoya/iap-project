<?php
    include_once 'user.php';
    include_once 'db.php'; 
    $con = new DBConnector();
    $pdo = $con->connectToDB();
    $event = isset($_POST['event'])?$_POST['event']:"";
    if($event == "register")
    {       
        $fullName = $_POST['name'];
        $email = $_POST['email'];  
        $password = $_POST['password']; 
        $cityOfResidence = $_POST['cityOfResidence'];
        $profile=$_FILES["profile_photo"];
        $original_file_name=$_FILES["profile_photo"]["name"];
        $file_tmp_location=$_FILES["profile_photo"]["tmp_name"];
        $file_path="profiles/";
        if(move_uploaded_file($file_tmp_location,$file_path.$original_file_name)){
            $user = new User($email, $password);
            $user->setFullName($fullName);
            $user->setCityOfResidence($cityOfResidence);
            $user->setProfile($original_file_name);
            echo $user->register($pdo); 
        }
    }
    ?>