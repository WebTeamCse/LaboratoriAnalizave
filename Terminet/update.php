<?php


require '../crud/dbconfig.php';


 if(isset($_POST['update'])){

    $userID = $_GET['ID'];
    $userName = $_POST['name'];
    $phone = $_POST['phone'];
    $doctor = $_POST['selectdoctor'];
    $useremail = $_POST['email'];
    $date = $_POST['date'];

    $query = " update terminet set userName = '".$userName."', phone='".$phone."', doctor='".$doctor."', useremail='".$useremail."',date='".$date."' where userID='".$userID."'";
    $result = $conn->query($query);
 

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