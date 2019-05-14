<?php
session_start();
session_unset();
if(!isset($_SESSION['adminLoggedin'])){
    header("location: index.php");
}
session_destroy();
header("location: index.php");
?>