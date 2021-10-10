<?php
include "connect.php";
include "header.php";

session_start();

if(!isset($_SESSION['name'])){
   header("location:login.html");
}

$user_id=$_GET['uid'];


$stmt = $con->prepare("SELECT *
FROM 
users 
WHERE
id=?");
$stmt->execute(array($user_id));
$get=$stmt->fetch();
?>



    <section>
      <div>
      <div class="head">
      <div class="d-flex justify-content-between bg-light p-2 mb-2 rounded">
        <span><?php echo $get['name'];?></span>
        <span>Active now</span>
      </div>
    </div>
    <div class="px-3"><a href="userslist.php" class="mt-3">back</a></div>
  <div class="chmas p-3 chat_form">
</div>
  
    
    <form class="p-3">
        <input type="hidden" value="<?php echo $_SESSION['uid'];;?>" name='outgo_id'>
        <input type="hidden" value="<?php echo $user_id?>" name='income_id'>
        <div class="form-group position-relative">
          <input type="text" class='msg form-control' placeholder="Enter Message..." name="msg" id="">
          <button type="submit" class="bg-white border-0 outline-none position-absolute" style="right:10px;top:10px"><i class="fa fa-send"></i></button>
        </div>
    </form>

      </div>

    </section>
    <?php include "footer.php";  ?>
    <script src="chat.js"></script>
</body>
</html>
