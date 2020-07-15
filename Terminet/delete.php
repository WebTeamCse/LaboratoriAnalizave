<?php

require '../crud/dbconfig.php';


 if(isset($_GET['Del'])){

    $userID = $_GET['Del'];
    $query = " delete from terminet  where userID='".$userID."'";
    $result = $conn->query($query);
 

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