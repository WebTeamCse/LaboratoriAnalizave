<?php
require '../crud/dbconfig.php';//konektimi
session_start();
if(isset($_SESSION['userid'])){//nese id e userit eshte set 
    $id = $_SESSION['userid'];//vendose at id me nje variabel
// var_dump($id);
}
//var_dump($id);
$query = $conn->query("SELECT password
FROM users WHERE id='$id'");//select password e userit qe e ka id e pranuar
$users = $query->fetch();//nxjerri
$dbPassword = $users['password'];//merre passwordit e atij useri nga databaza edhe vendose ne variabel

    if(isset($_POST["submit"])){//nese eshte klikuar submit
        $id = $_SESSION['userId'];//vendose at id me nje variabel
        $password = $_POST['old-pwd'];//merre inputi e useri per old pwd edhe vendose ne variabel
        $passwordNew = $_POST['new-pwd'];//merre inputi e useri per new pwd edhe vendose ne variabel

        // var_dump($_POST['password']);

        $passwordCheck = password_verify($password, $dbPassword);//dehash the database pwd and compare if its the same
        if($passwordCheck == 1){
            $hashedPassword = password_hash($passwordNew, PASSWORD_DEFAULT);
            $sql = 'UPDATE users SET  password = :password WHERE id = :id';
            $query = $conn->prepare($sql);
            $query->bindParam('password',$hashedPassword);
            $query->bindParam('id',$id);
      
            $query->execute();
            header('Location:index.php?PasswordisChanged');
        }else{
            header('Location:index.php?PasswordisNotChanged');

        }
        
        
        // $sql = 'UPDATE users SET  password = :password WHERE id = :id';
        // $query = $conn->prepare($sql);
        // $query->bindParam('password',$password);
        // $query->bindParam('id',$id);
      
        // $query->execute();
        // header('Location:index.php');
    } 
    var_dump($passwordCheck);

?>
        <title>Change Password</title>
        <!-- <link rel="stylesheet" type="text/css" href="edit-style.css">
        <script type="text/javascript" src="edit-users-script.js"></script>  -->
        
<div class="register">

 <form id="form" method="post" onsubmit="return validate()">  
              <h1>Change Password</h1>
           <!-- <input type="text" id="id" name="id"  value=" <?php //echo $user['id']; ?> " ><br> -->
            <input type="text" id="old-pwd" name="old-pwd" placeholder="Old password"><br>
            <input type="text" name="new-pwd" id="new-pwd"  placeholder="New password"><br>
            <input type="submit" name="submit" value="ruaj shenimet"><br><br>
          
        <p style="color:black;">or</p><br>
            <a href="#">Change your password</a>
</form>

</div>
