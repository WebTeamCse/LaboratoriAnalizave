<?php

require_once("connection.php");


 if(isset($_GET['Del'])){

    $userID = $_GET['Del'];
    $query = " delete from terminet  where userID='".$userID."'";
    $result = mysqli_query($db,$query);
 

 if($result){
     header("location:view.php");
 }
 else{
    header("Plase check you Query");
}

}
 else{
     header("location:view.php");
 }

 ?>