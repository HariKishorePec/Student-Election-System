<?php
session_start();
session_unset();
if(!isset($_SESSION['vid'])){
    header("location: index.php");
}
session_destroy();
header("location: index.php");
?>