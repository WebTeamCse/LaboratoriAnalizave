<?php

require_once("connection.php");


 if(isset($_POST['update'])){

    $userID = $_GET['ID'];
    $userName = $_POST['name'];
    $phone = $_POST['phone'];
    $doctor = $_POST['doctor'];
    $useremail = $_POST['useremail'];

    $query = " update terminet set userName = '".$userName."', phone='".$phone."', doctor='".$doctor."', useremail='".$useremail."' where userID='".$userID."'";
    $result = mysqli_query($db,$query);
 

 if($result){
     header("location:view.php");
 }
 else{
    header("Plase chack you");
}

}
 else{
     header("location:view.php");
 }

 ?>