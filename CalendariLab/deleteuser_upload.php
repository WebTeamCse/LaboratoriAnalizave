<?php
require '../crud/dbconfig.php';

if (isset($_GET['id'])){  
    $id = $_GET['id']; 
$query = $conn->prepare("Delete from upload where user_ID = :user_ID");
    $query->execute([":user_ID"=>$id]);
    header("Location:calendarAdmin.php?alert=Successfully");
   
}else{
    header("Location:calendarAdmin.php?alert=NotDeleted");

}
 
?>  