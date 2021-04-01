<?php
    require_once("dbconnect.php");
    session_start();
    if(isset($_POST["submit"])){
        $id=$_SESSION["id"];
        $food_name=$_POST["food_item"];
        $number=$_POST["quantity"];
        $sql="INSERT into orders(cust_id,food,quantity) VALUES('1','$food_name','$number')";
        mysqli_query($link,$sql);
        header("Location:main.php");
    }
    ?>