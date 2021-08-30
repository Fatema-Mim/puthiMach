<?php
session_start();
ob_start();
 require_once 'include/header.php';
 require_once 'include/nav.php';
 $phone = $_SESSION['phone'];
?>

<?php

// if the session value is empty, he is not yet logged in, redirect him to login page
if(empty($_SESSION['phone'])){
    header("Location: {$home_url}login.php?action=not_yet_logged_in");
}

?>


    <script> 
        $(document).ready(function() { 


         var progressbar = $('.progress-bar');


            $(".upload-image").click(function(){
            	$(".form-horizontal").ajaxForm(
		{
		//   target: '.preview',
		  beforeSend: function() {
			$(".progress").css("display","block");
			progressbar.width('10%');
			progressbar.text('0%');
                    },
		    uploadProgress: function (event, position, total, percentComplete) {
		        progressbar.width(percentComplete + '%');
		        progressbar.text(percentComplete + '%');
		     },
		})
		// .submit(); 
            });


        }); 


		$(document).ready(function() {
    $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});


function refresh() {

setTimeout(function () {
    location.reload()
}, 100);
}




    </script>

	<div class="col-md-9 col-sm-11 m-auto">
		<div class="central-meta mt-3">
			<div class="new-postbox mt-2 mr-3">
				<div class="new-input mx-5">
					<form action="index_post.php" enctype="multipart/form-data" class="form-horizontal" method="post">
						<div class='text-center'>
						<textarea class="textarea" rows="2" placeholder="write something" name="chat"></textarea>
						<img src="images/" onerror="this.onerror=null;this.src=' '" id="showImage" class="preview">
						</div>
						
						<div class="progress" style="display:none">
							<div class="progress-bar" role="progressbar" aria-valuenow="0"
							aria-valuemin="0" aria-valuemax="100" style="width:0%">
								0%
							</div>
						</div>
						<input type="file" name="image"  id="image" class="form-control" />
						<button class="btn btn-primary upload-image" onclick="refresh()">Upload Image</button>
					</form>
				</div>
			</div>
		</div>
	</div>	


	<div style="margin-top:10px" class="tab-pane" id="feed" role="tabpanel" aria-labelledby="feed-tab">
        <div class="col-md-9 col-sm-11 justify-content-center" style="margin: auto">
            <div class="cards-spacing">
                <div class="card text-center">
                    <?php
                    require_once 'include/db.php';
                    $follower = "SELECT * FROM followers";
                            $q = mysqli_query($connect, $follower);
                    $select = "SELECT hook_image.chat,hook_image.image1,hook_image.date_image,registration.phone, registration.name,registration.image from hook_image AS hook_image inner join registration AS registration On hook_image.phone = registration.phone ORDER BY hook_image.id DESC";
                    $result = mysqli_query($connect,$select);
                    while($row=(mysqli_fetch_assoc($result))){
                    
                ?>


                    <div class="card-header">
                        <span class="post-title text-dark"> <img src="image/<?= $row['image'];?>" alt=""
                                style="height:70px; width:70px;border-radius:50%">
                            <?= $row['name']?> </span>
                    </div>

                    <div class="card-body">
                    <form action="followers.php" method="POST">
                        <div class="col-sm-12" >
                             <p class="card-text text-dark"> <?=$row['chat'] ?></p>
                        </div>
                        <img class="card-img-top text-center" src="images/<?= $row['image1'];?>" alt="Card image cap"
                            style="width:300px; height:auto;" onerror="this.style.display='none'">
            
            
            
                        <div class="col-sm-8">

                            <input type="number" class="form-control" name="hello" value="<?php echo $row['phone'] ?>" style="display: none;">
                           
                        </div>

                    </div>
                           <div class="card-footer text-muted">
                    <?php 
                        $postedUserPhoneNO = $row['phone'];
                       $sql = "SELECT * FROM `followers` WHERE user = '$postedUserPhoneNO' and follower = '$phone' LIMIT 1";
                        $result2 = $connect->query($sql);

                        if ($result2->num_rows > 0) {
                            ?>
                         <!--<button type="submit" class="btn btn-danger btn" name="submit" style='font-size:20px'><span class="heartbreak">Followed <i class="fa fa-heartbeat" aria-hidden="true"></i></span> </button>-->
                        <?php  } else{
                            ?>
                            <button type="submit" class="btn btn-danger btn" name="submit" style='font-size:20px'><span class="heartbreak">Follow <i class="fa fa-heartbeat" aria-hidden="true"></i></span> </button>
                            
                        <?php }
                             ?>
                       <!--<button type="button" class="open-button" onclick="openForm()">Open Gifts</button>-->
                    </div>
                            
                           
                    <!--<div class="card-footer text-muted">-->
                    
                    <!--    <button type="submit" class="btn btn-danger btn" name="submit" style='font-size:20px'><span class="heartbreak">Follow <i class="fa fa-heartbeat" aria-hidden="true"></i></span> </button>-->
                    
                    <!--</div>-->
                                   
                    
                    </form>
                <?php
                          echo"<br>";
                        }
                ?>
                </div>
            </div>
        </div>
    </div>











<?php
require_once 'include/footer.php';

?>
