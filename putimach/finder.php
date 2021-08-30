<?php
    session_start();
    require_once 'include/header.php';
    require_once 'include/nav.php';

            
?>
<?php

// if the session value is empty, he is not yet logged in, redirect him to login page
if(empty($_SESSION['phone'])){
    header("Location: {$home_url}login.php?action=not_yet_logged_in");
}

?>
<!--    <h1 class="text-center"> </br></br></br></br>
 পুঁটিমাছ ডট কমে আপনাকে স্বাগতম। 
</br>ফেব্রুয়ারির ১ তারিখ পর্যন্ত অপেক্ষা করুন। 
</br>সার্চ করে খুজে নিন আপনার পছন্দের </br>এবং </br>
আপনার  জন্য সবচাইতে যোগ্য পুঁটি অথবা পুঁট </h1> -->

<div class="container">
    <h1 class="text-center mb-3 mt-2">Find Your Blind Date</h1>
    <div class="row row-cols-1 row-cols-md-6 g-4">
        <?php
            require_once 'include/db.php';
            $sql = "SELECT * FROM registration";
            $row = mysqli_query($connect, $sql);
            foreach($row as $value):
            
        ?>        
        <div class="col">
            <div>
                <div class="text-center">
                    <img src="image/<?php echo $value['image']?>" class="card-img-top mt-2" alt="..." style="height: 180px; width: 180px">
                </div>
                <div>
                    <h5><?php echo $value['name']?></h5>
                    <a href="request_form.php?id=<?= $value['id']?>" class="btn btn-info">Ask to Date</a>
                </div>
            </div>
        </div>
        <?php
            endforeach;
        ?>
    </div>
</div>

<?php
    require_once 'include/footer.php';
?>