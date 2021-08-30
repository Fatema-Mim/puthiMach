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
<!-- header start -->

<div class="container">
    <div  class="puti_link">
        <div class="row  row-cols-xs-2 m-auto my-2 border-0 ">
            <div class="col ">
                <a href="my_hooks.php">
                    <div class="card h-100">
                        <div class="card-body ">
                            <h5 style="text-align:center; color:black">Aquarium</h5>
                            <h6><span style="text-align:center;"><i class='fas fa-fish'></i></span></h6>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col ">
                <div class="card h-100 ">
                    <?php
                    require_once "include/db.php";
                    $select = "SELECT balance from registration WHERE phone = '$phone' ";
                    $query = mysqli_query($connect,$select);
        
                    foreach( $query as $balance):
                    
                    ?>
                    <div class="card-body">
                        <h5 style="text-align: center ;color:black">My Balance</h5>
                        <h6><?=$balance['balance'] ?>&nbsp; <i class="fa fa-heartbeat " aria-hidden="true"></i></h6>
                    </div>
                    <?php
                    endforeach;
                 ?>
                </div>
            </div>
        </div>


        <div class="row  row-cols-xs-2 m-auto mt-2 border-0 ">
            <div class="col ">
                <a href="request.php">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5 style="text-align: center; color:black">Proposal</h5>
                            <h6><span> <i class="fas fa-mail-bulk"></i></span></h6>
                        </div>
                    </div>
                </a>
            </div>


            <a class="col " href="sending.php">
                <div class="card h-100 ">
                    <div class="card-body">
                        <h5 style="text-align: center; color:black">My Trap </h5>
                        <h6><span><i class="fa fa-spider"></i></span></h6>
                    </div>
                </div>
            </a>
        </div>
        
         <div class="row  row-cols-xs-2 m-auto mt-2 border-0 ">
            <div class="col ">
                <a href="my_details_show.php">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5 style="text-align: center; color:black">Biodata</h5>
                            <h6><span> <i class="fas fa-mail-bulk"></i></span></h6>
                        </div>
                    </div>
                </a>
            </div>


            <a class="col " href="https://gopaysenz.com/invoice/?client_id=126&amount=">
                <div class="card h-100 ">
                    <div class="card-body">
                        <h5 style="text-align: center;color:black"> Recharge </h5>
                        <h4><span>৳</span></h4>
                    </div>
                </div>
            </a>
        </div>
          <div class="row  row-cols-xs-2 m-auto mt-2 border-0 ">
            <div class="col ">
                <a href="my_feelings.php">
                    <div class="card h-100 ">
                        <div class="card-body">
                            <h5 style="text-align:center;color:black ">My Feelings</h5>
                            <h6><span> <i class="fas fa-mail-bulk"></i></span></h6>
                        </div>
                    </div>
                </a>
            </div>


            <a class="col " href="my_vlogs.php">
                <div class="card h-100 ">
                    <div class="card-body">
                        <h5 style="text-align: center; color:black">My Vlog </h5>
                        <h6><span><i class="fa fa-spider"></i></span></h6>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <!-- header end -->

    <!-- OWN FEEN START -->

  

    <?php
    require_once "include/footer.php";
?>