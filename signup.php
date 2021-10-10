<?php
include "connect.php";

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];

$exarray=['jpg','png','jpeg',''];

if(!empty($name) && !empty($email) && !empty($password)){

  $imgname=$_FILES['img']['name'];
  $imgtype=$_FILES['img']['type'];
  $imgtmp=$_FILES['img']['tmp_name'];
  $imgsize=$_FILES['img']['size'];
  $Ex=@strtolower(end(explode('.',$imgname)));
 

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $stmt=$con->prepare("SELECT email from users where email=?");
   $stmt->execute(array($email));
  $count= $stmt->rowcount();
  if($count > 0){
      echo "email already exist";
  }else{
    if(!in_array($Ex,$exarray)){
      echo 'unvalid image extension';
        }
else{
  
  $r=rand(0,1000);
  $img=$r.'_'.$imgname;
if($imgname=='')
$img='av.png';  
  move_uploaded_file($imgtmp,"avatar\\".$img); 
   $stmt = $con->prepare("INSERT INTO 
    users(name,email,password,avatar)
    VALUES(:nam,:em,:pass,:av)");
    $stmt->execute(array(
   'nam'=>$name,
    'em' => $email,
    'pass'=> $password,
    'av'=>$img
    ));  
    

  

    
    echo "success";
 

  }
  }
      } else {
        echo("$email is not a valid email address");
      }



} else{
    echo "all inputs required";
}