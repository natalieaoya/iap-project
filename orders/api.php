<?php
header("Content-Type:application/json");
if (isset($_GET['order_id']) && $_GET['order_id']!="") {
 include('db.php');
 $order_id = $_GET['order_id'];
 $result = mysqli_query(
 $con,
 "SELECT * FROM `orders` WHERE order_id=$order_id");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
 $quantity = $row['quantity'];
 
 response($order_id, $amount);
 mysqli_close($con);
 }else{
 response(NULL, NULL, 200,"No Record Found");
 }
}else{
 response(NULL, NULL, 400,"Invalid Request");
 }
 
function response($order_id,$amount){
 $response['order_id'] = $order_id;
 $response['amount'] = $amount;
 
 $json_response = json_encode($response);
 echo $json_response;
}
?>