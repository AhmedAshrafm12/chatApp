<?php

include "connect.php";


session_start();

if(!isset($_SESSION['name'])){
   header("location:login.html");
}
echo 

$Outgo= $_POST['outgo_id'] ;
$income= $_POST['income_id'] ;
$msg= $_POST['msg'] ;

if(!empty($msg)){
    $stmt = $con->prepare("INSERT INTO 
    massages(income_id,outgo_id,msg)
    VALUES(:inc,:outg,:msg)");
    $stmt->execute(array(
   'inc'=>$income,
    'outg' => $Outgo,
    'msg'=> $msg,
    )); 
    

}
?>