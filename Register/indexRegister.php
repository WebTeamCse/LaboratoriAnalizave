<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="styleRegister.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" defer src="signup-script.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
          crossorigin="anonymous"></script>
        
    </head>
    <body>
   
    <div class="register">
        <form class="form" onsubmit="return validate()" id="form" action="indexRegister.php" method="post">
              <h1>Register</h1>
              <p> Please login to your account.</p>
           
              <input type="text" id="name" name="name" placeholder="Shenoni emrin"><br>
            <input type="text" name="email" id="email" placeholder="Shenoni email"><br>
            <input type="text" id="username" name="username" placeholder="Shenoni username"><br>
            <input type="password" id="password" name="password" placeholder="Shenoni password"><br>
            <input type="submit" name="submit" value="ruaj shenimet">
            
            </div>   
           
        </form>
    </div>
  <?php
            
            // include "../crud/insert-users.php";
        ?> 
    </body>
 
</html>
<?php
    require '../crud/dbconfig.php';

    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

          //Checking if the username that already exists in the DataBase
     $statment = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :username ");
     $statment->bindParam(":username", $username);
     $statment->execute();
     $userCheck = $statment->fetchColumn();

     if($userCheck == 1){
         header("Location: indexRegister.php?error=nameAlreadyTaken");
         exit();
     }
     //exit

     //password length not lower then 8
        $passwordlength = strlen($password);
     if($passwordlength < 8 ){
        header("Location: indexRegister.php?error=passwordShouldHaveAtLeast8Charactes");
        exit();
        //exit
     }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = 'INSERT INTO users(name, email,username, password) VALUES 
        (:name, :email,:username, :password)';

         $query = $conn-> prepare($sql);
        //Array
        $query->execute([
            'name' => $name,
            'email' => $email,
            'username' => $username,
            'password' => $hashedPassword
        ]);

        header("Location: ../Login/indexLog.php");

        
        
    }
    
    ?>