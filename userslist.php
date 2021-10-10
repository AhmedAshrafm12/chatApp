
<?php include "header.php";
?>
<body>

 <?php
 include "connect.php";

session_start();

if(!isset($_SESSION['name'])){
   header("location:login.html");
}

$stmt = $con->prepare("SELECT *
FROM 
users 
WHERE
id=?");
$stmt->execute(array($_SESSION['uid']));
$get=$stmt->fetch();

 ?>
    <div class="cont">
      <div class="navbar-site w-100 bg-primary p-3">
         <div class="d-flex justify-content-between align-items-center">
            <div><span class="text-light"><img class='user_img_2' src='images/1200px-Crystal_Clear_kdm_user_female.svg.png'/> Welcome <?php echo $get['name'];?>!</span></div>
            <div><a href="logout.php" class="text-light text-decoration-none"><i class="fas fa-sign-out-alt"></i></a></div>
         </div>
      </div>
   <div class="main-user">
   </div>

   <section class='userslist'>
   
           </section>

    </div>
   <?php include "footer.php";?>
<script src="usersshow.js"></script>
</body>
</html>