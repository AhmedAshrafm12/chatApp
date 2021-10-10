<?php

include "connect.php";


session_start();

if(!isset($_SESSION['name'])){
   header("location:login.html");
}


$Outgo= $_POST['outgo_id'] ;
$income= $_POST['income_id'] ;
$msg= $_POST['msg'] ;


$stmt=$con->prepare("SELECT * from massages where (income_id=? && outgo_id=?) or  (income_id=? && outgo_id=?)");
$stmt->execute(array($income, $Outgo,$Outgo,$income));
$msgs=$stmt->fetchAll();
$count=$stmt->rowcount();

echo $count;

if($count > 0){
foreach ($msgs as $m) {
if( $m['outgo_id'] == $Outgo)
{

    echo "
    <div class='d-flex'><img class='user_img_2' src='images/1200px-Crystal_Clear_kdm_user_female.svg.png'/><p class='in'>".$m['msg']."</p></div>
    ";
}
else{

    echo "
    <div class='d-flex flex-row-reverse'><img class='user_img_2' src='images/1200px-Crystal_Clear_kdm_user_female.svg.png'/><p class='out mx-2'>".$m['msg']."</p></div>
    ";

}



}
    
}




?>