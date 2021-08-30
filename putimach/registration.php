<?php
session_start();
 ob_start();
    require_once 'include/header.php';
     
?>
<body id="page">
        <ul class="cb-slideshow">
            <li>
                <span>Image 01</span>
            </li>
            <li>
                <span>Image 02</span>
            </li>
            <li>
                <span>Image 03</span>
            </li>
            <li>
                <span>Image 04</span>
            </li>
            <li>
                <span>Image 05</span>
            </li>
            <li>
                <span>Image 06</span>
            </li>
        </ul>


<div class="container">

    <header>
        <div class="col-6 m-auto my_code text-white">
            <div class="form-title">
                <div class="text-center text-info">
                    <img src="images/putimach logo.png" alt="" class="logo">
                    </br>
                    Registration From
                </div>
            </div>
            <div class="card-body">

                <form action="registration_post.php" method="POST" enctype="multipart/form-data">
                    <div class="text-center mb-2" style="padding-top: 12px;">
                        <img id="showImage" src="images/hi.jpg" class="profile_img"
                            style="height:120px; width:120px; border: 1px solid black;  border-radius: 100px;">
                    </div>
                    <!-- <div class="mb-2 row">
                                    <label for="dob" class="col-sm-4 col-form-label">Select your picture</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image1" id="image" class="form-control">
                                    </div>
                                </div> -->
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label">User Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="User Name" name="username" required>
                            <?php
                            if(isset($_SESSION['duplicat_user'])){
                            ?>
                            <small class="text-danger">
                            <?php
                            echo $_SESSION['duplicat_user'];
                            unset($_SESSION['duplicat_user']);
                            
                            ?>
                            </small>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" placeholder="Phone Number" name="phone"  required>
                            <?php
                            if(isset($_SESSION['duplicat_phone'])){
                            ?>
                            <small class="text-danger">
                            <?php
                            echo $_SESSION['duplicat_phone'];
                            unset($_SESSION['duplicat_phone']);
                            
                            ?>
                            </small>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label">Photo</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="image1" id="image" required>
                             <?php
                            if(isset($_SESSION['non_valid_photo'])){
                            ?>
                            <small class="text-danger">
                            <?php
                            echo $_SESSION['non_valid_photo'];
                            unset($_SESSION['non_valid_photo']);
                            
                            ?>
                            </small>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label">Birthday</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="birthday" required>
                        </div>
                    </div>

                    
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="passworda" required>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="confirm_password" required>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label">Gender</label>
                            <div class="col-sm-8" >
                            <input type="radio" id="male" name="gender" value="male">
                                <label  class="col-sm-4 col-form-label" for="male">Male</label><br>
                                <input type="radio" id="female" name="gender" value="female">
                                <label class="col-sm-4 col-form-label"  for="female">Female</label><br>
                                <input type="radio" id="other" name="gender" value="other">
                                <label class="col-sm-4 col-form-label" for="other">Other</label>
                            </div>
                    
                    </div>



                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn" name="sign_up">Sign Up</button>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="login.php" class="text-center">Already have an account</a>
                    </div>
                </form>
            </div>
        </div>
</div>
</header>
</div>
<?php
    require_once 'include/footer.php';
?>
<script type="text/javascript">
$(document).ready(function() {
    $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>