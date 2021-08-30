
<nav class="navbar navbar-expand-lg navbar-custom navbar-light">
    <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/putimach logo.png" alt=""
                style="height: 50px; width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="../index.php">Feelings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="../vlog.php">Vlog</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="../live.php">LIVE</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="chat12.php">My Circle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" aria-current="page" href="../finder.php">Blind Date</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" aria-current="page" href="../dairy.php">Profile</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <!--<form class="d-flex ">-->
            <!--    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">-->
            <!--    <button class="btn btn-success" type="submit">Search</button>-->
            <!--</form>-->
            
            
            <?php
            
            $phone = $_SESSION['phone'];
            require_once 'db.php';
            $query = "SELECT image  FROM registration WHERE phone = '$phone'";
            $result =mysqli_query($connect,$query);
            while($row=(mysqli_fetch_array($result))){
                
                ?>

             <span class=" text-dark"> <img src="../image/<?= $row['image'];?>" alt=""style="height:70px; width:70px;border-radius:50%"> </span>

            <?php
            }
            ?>
            <a class="nav-link  text-white btn" aria-current="page" href="../logout.php">Sign Out</a>
            
                                <!-- <label class="fileContainer">
                                    <input type="file" id="image" name="image1">
                                </label> -->

        </div>
    </div>
</nav>
