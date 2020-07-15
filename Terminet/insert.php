<?php 
 
require '../crud/dbconfig.php';

if(isset($_POST['submit']))
{
    if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['selectdoctor']) || empty($_POST['email'] || empty($_POST['date'] ))){

        echo"<script>alert('Please fill the fields')</script>";
        
    }
    else{
        $userName = $_POST['name'];
        $phone = $_POST['phone'];
        $doctor = $_POST['selectdoctor'];
        $useremail = $_POST['email'];
        $date = $_POST['date'];
        
<<<<<<< HEAD
        $query = " INSERT INTO  terminet (userName,phone,doctor,useremail,date) VALUES (:userName,:phone,:doctor,:useremail,:date)";
=======
        $query = " insert into  terminet (userName,phone,doctor,useremail,date) values('$userName','$phone','$doctor','$useremail','$date')";
>>>>>>> 72f3ab103773b51111872099bd0e454d6ad867a4
        $result = $conn->query($query);

        if($result){
            header("location:view.php");
        }
        else{
            echo 'Plase ';
        }
        
    }
}

else{
    header("location:create.php");
}
?>