<?php 
 
require '../crud/dbconfig.php';

if(isset($_POST['submit']))
{
    if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['selectdoctor']) || empty($_POST['email'] || empty($_POST['date'] ))){
        
        echo 'Please fill in the Blanks ';
    }
    else{
        $userName = $_POST['name'];
        $phone = $_POST['phone'];
        $doctor = $_POST['selectdoctor'];
        $useremail = $_POST['email'];
        $date = $_POST['date'];
        
        $query = " INSERT INTO  terminet (userName,phone,doctor,useremail,date) VALUES (:userName,:phone,:doctor,:useremail,:date)";
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