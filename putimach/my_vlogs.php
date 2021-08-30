<?php
session_start();
    require_once "include/header.php";
    require_once "include/nav.php";
    $phone = $_SESSION['phone'];
   

?>

<?php

// if the session value is empty, he is not yet logged in, redirect him to login page
if(empty($_SESSION['phone'])){
    header("Location: {$home_url}login.php?action=not_yet_logged_in");
}
?>


    <div>
        <div style="margin-top:10px" class="tab-pane" id="feed" role="tabpanel" aria-labelledby="feed-tab">
            <div class="col-md-9 col-sm-11 justify-content-center" style="margin: auto">
                <div class="cards-spacing">
                    <div class="card text-center">
                        <?php
                    require_once 'include/db.php';
                     $select="SELECT * FROM hook_video  WHERE phone = '$phone' order by 1 DESC";
                     $result = mysqli_query($connect,$select);
                     while($row=(mysqli_fetch_array($result))){
                   
                ?>


                       

                        <div class="card-body">

                            <p class="card-text text-dark"> <?=$row['chat'] ?></p>
                            
                           <video controls style="width:80%; height:'auto';" controls="true" id="pVideo" preload="auto" video[src='']{display:none !important;}>
                            <source src="video/<?= $row['video'];?>" type="video/mp4" >
                            </video>

                        </div>
                     
                 
               
             <?php   
               
            }
            echo"<br>";
            echo"<br>";
            ?>

 



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OWN FEEN END -->
</div>





<?php
    require_once "include/footer.php";
?>