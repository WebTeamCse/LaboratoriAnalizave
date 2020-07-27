<?php

 require '../crud/dbconfig.php';

 session_start();

     $username=$_POST['uname'];
    $password=$_POST['pwd'];
    $userInformation = array($username, $password);
    //var_dump($userInformation);
    if(empty($username) || empty($password)){       
         header("Location: indexLog.php?error=emptyFields");
        exit();
    }
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    $usercount = $stmt->fetchColumn();
   ///// var_dump($usercount);
    if($usercount == 0){
        header("Location: indexLog.php?error=usernameNotFoundOrIncorrectPassword");
        exit();
    }else{
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = :username");
        $stmt->bindParam(":username",$username);
        $stmt->execute();
        $dbPassword = $stmt->fetchColumn();

        $passwordCheck = password_verify($password, $dbPassword);

       

        if($passwordCheck !== true){
            header("Location: indexLog.php?error=usernameNotFoundOrIncorrectPassword");
            // exit();
        }else{
            $query = $conn->prepare('SELECT * FROM users WHERE username = :username');

            $query->bindParam(":username", $username);
            $query->execute();


            $user = $query->fetchAll();
            foreach($user as $user){
                $_SESSION['userId'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
            }
            header("Location: ../Home/index.php?success=loginSuccess");

        }

        
        
      
    }
    

 ?>
   
            
    
