<?php
require_once 'include/header.php';
require_once 'include/nav.php';


?>

<div class="container">
    <h1 class="my-5">COMING SOON...14th February</h1>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  display: inline;
  font-size: 40px;
  margin-top: 0px;
}
</style>
</head>
<body>
    <p id="days"></p>
    <p id="hours"></p>
    <p id="mins"></p>
    <p id="secs"></p>
    <h2 id="end"></h2>
    <script>
    // The data/time we want to countdown to
    var countDownDate = new Date("Feb 14, 2021 00:01:00").getTime();

    // Run myfunc every second
    var myfunc = setInterval(function() {

    var now = new Date().getTime();
    var timeleft = countDownDate - now;
        
    // Calculating the days, hours, minutes and seconds left
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
        
    // Result is output to the specific element
    document.getElementById("days").innerHTML = days + "d "
    document.getElementById("hours").innerHTML = hours + "h " 
    document.getElementById("mins").innerHTML = minutes + "m " 
    document.getElementById("secs").innerHTML = seconds + "s " 
        
    // Display the message when countdown is over
    if (timeleft < 0) {
        clearInterval(myfunc);
        document.getElementById("days").innerHTML = ""
        document.getElementById("hours").innerHTML = "" 
        document.getElementById("mins").innerHTML = ""
        document.getElementById("secs").innerHTML = ""
        document.getElementById("end").innerHTML = "TIME UP!!";
    }
    }, 1000);
    </script>
</body>
    
</div>




<?php
require_once 'include/footer.php';

?>
