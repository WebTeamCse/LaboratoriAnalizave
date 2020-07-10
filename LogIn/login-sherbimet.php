<?php
session_start();

if(isset($_SESSION['userId'])){
    //
}else{
    header("location:../Home/index.php");
}
?>