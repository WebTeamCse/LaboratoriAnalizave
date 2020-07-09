<?php
session_start();

if(isset($_SESSION['userId'])){
    //
}else{
    header("location:../Home/indexFP.php");
}
?>