<?php
ob_start();
session_start();
    require_once 'include/header.php';   
?>
<div class="container">
    <div class="col-6 m-auto ">
        <div class="card mb-4 mt-3">
            <div class="card-header bg-info text-center mb-3">Log In</div>
            <div class="card-body">
                <form action="" method="POST">
                <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label text-danger">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                    </div>
                <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label text-danger">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" required>
                            <?php
                            if(isset($_SESSION['phone_password'])){
                            ?>
                            <small class="text-danger">
                            <?php
                            echo $_SESSION['phone_password'];
                            unset($_SESSION['phone_password']);
                            
                            ?>
                            </small>

                            <?php } ?>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    <a href="registration.php">SignUp</a>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'include/footer.php';   
?>

<?php
require_once 'include/db.php';
if(isset($_POST['submit'])){
    $phone = $_POST['phone'];
    $password =$_POST['password'];
 
    $count_query = "SELECT COUNT(*) AS total FROM registration WHERE phone ='$phone'  AND password='$password'";

   $q = mysqli_query($connect, $count_query);
   $_SESSION['phone']=$phone; 
   $after_assoc = mysqli_fetch_assoc($q);

   if($after_assoc['total'] == 1){
    header('location: index.php');
       
   }
   else {
    
    $_SESSION['phone_password']= " phone or password not matched!!!";
    header("Location: login.php");
   }

  }
  


?>