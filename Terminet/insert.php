<?php 
 
 require_once("connection.php");

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
        
        $query = " insert into  terminet (userName,phone,doctor,useremail,date) values('$userName','$phone','$doctor','$useremail','$date')";
        $result = mysqli_query($db,$query);

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