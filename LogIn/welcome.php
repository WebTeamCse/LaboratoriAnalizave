<?php

 require '../crud/dbconfig.php';

 session_start();

     $username=$_POST['uname'];
    $password=$_POST['pwd'];
    $userInformation = array($username, $password);
    var_dump($userInformation);
    if(empty($username) || empty($password)){        header("Location: indexLog.php?error=emptyFields");
        exit();
    }
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    $usercount = $stmt->fetchColumn();
    var_dump($usercount);
    if($usercount == 0){
        header("Location: indexLog.php?error=usernameNotFoundOrIncorrectPassword");
        exit();
    }else{
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = :username");
        $stmt->bindParam(":username",$username);
        $stmt->execute();
        $dbPassword = $stmt->fetchColumn();
        if($password !== $dbPassword){
            header("Location: indexLog.php?error=usernameNotFoundOrIncorrectPassword");
            exit();
        }else{
            $query = $conn->query('SELECT * FROM users');

            $user = $query->fetchAll();
            foreach($user as $user){
                $_SESSION['userId'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
            }
            header("Location: ../Home/indexFP.php?success=loginSuccess");

        }
    }

    
   
    // $uname = "admin";
    // $pwd = "admin";


     
            
    

    if(isset($_SESSION["uname"])){
        echo "<h1>Welcome" .$_SESSION['uname'] . "</h1>";
        echo "<a href='product.php'>Product</a><br>";
        echo "<br><a href='logout.php'><input type=button name=logout value=logout></a>";
    }else{
        if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
            $_SESSION['uname']=$uname;
           
            echo "<script>location.href='welcome.php'</script>";
        }else{
            echo "<script>alert('username or password incorrect!')</script>";
            echo "<script>location.href='indexLog.php'</script>";
        }
    }
?> 