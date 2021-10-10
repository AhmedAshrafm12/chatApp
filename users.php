<?php
session_start();

if(!isset($_SESSION['name'])){
   header("location:login.html");
}
if($_SERVER['REQUEST_METHOD']=='POST'){
include "connect.php";
$stmt=$con->prepare("SELECT * from users");
$stmt->execute();
$users=$stmt->fetchAll();
$count=$stmt->rowcount();


if($count == 1){
    echo "there is no avilable users";
}
elseif($count > 0){
foreach ($users as $u) {
    if($u['id']!=$_SESSION['uid']){
    echo "
    <a href='chatarea.php?uid=".$u['id']."' class='bg-light p-2 text-dark text-decoration-none userr d-flex justify-content-center flex-column my-4 align-items-center'>
        <img src='avatar/".$u['avatar']."' class='user_img'/>
        <div class='user mx-2 fs-5'><span>".$u['name']."</span></div>
    </a>
    ";}
}
    
}}else
header("location:login.html");





?>