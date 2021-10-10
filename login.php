<?php
session_start();
include "connect.php";
$email=$_POST['email'];
$password=$_POST['pass'];

if(!empty($password) && !empty($email)){
    $stmt = $con->prepare("SELECT *
                        FROM 
                        users 
                        WHERE
                        ( email = ? or name=? )  AND password = ?");
$stmt->execute(array($email,$email,$password));
$get=$stmt->fetch();
$count=$stmt->rowcount();
if($count>0){
    $_SESSION['name']=$get['name'];
    $_SESSION['uid']=$get['id'];
echo "success";
}
else{
echo "wrong pass or email";

}
 
  }
     else{
    echo "all inputs required";
}



