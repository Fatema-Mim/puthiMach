<?php
session_start();
unset($_SESSION['phone']);
unset($_SESSION['pass']);

header('location: index.php');


?>