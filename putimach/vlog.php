
<?php
session_start();
 require_once 'include/header.php';
 require_once 'include/nav.php';
 $phone = $_SESSION['phone'];
?>


    <script> 
        $(document).ready(function() { 


         var progressbar = $('.progress-bar');


            $(".upload-showvideo").click(function(){
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
    $('#video').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showvideo').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});


function refresh() {

setTimeout(function () {
    location.reload()
}, 1000);
}

    </script>

	<div class="col-md-9 col-sm-11 m-auto">
		<div class="central-meta mt-3">
			<div class="new-postbox mt-2 mr-3">
				<div class="new-input mx-5">
					<form action="vlog_post.php" enctype="multipart/form-data" class="form-horizontal" method="post">
						<div class='text-center'>
						<textarea class="textarea" rows="2" placeholder="write something" name="chat"></textarea>
                        <video src="video/" onerror="this.onerror=null;this.src=' '" id="showvideo" autoplay="autoplay" style="width:30%; height:40% ;pointer-events: none;"></video>
						</div>
						
						<div class="progress" style="display:none">
							<div class="progress-bar" role="progressbar" aria-valuenow="0"
							aria-valuemin="0" aria-valuemax="100" style="width:0%">
								0%
							</div>
						</div>
						<input type="file" name="video"  id="video" class="form-control" />
						<button class="btn btn-primary upload-showvideo" onclick="refresh()">Upload video</button>
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
                    $select = "SELECT hook_video.chat,hook_video.video,hook_video.phone,registration.phone,registration.name,registration.image from hook_video AS hook_video inner join registration AS registration On hook_video.phone = registration.phone ORDER BY hook_video.id DESC";
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
                        <video  id="myVideo"  width="50%" style="width:80%; height:auto ;" controls >
                             <source src="video/<?= $row['video'];?>" type="video/mp4"  alt = "display: none";  >
                        </video>
            
            
            
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