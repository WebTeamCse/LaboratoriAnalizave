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

        $passwordCheck = password_verify($password, $dbPassword);

       

        if($passwordCheck !== true){
            header("Location: indexLog.php?error=usernameNotFoundOrIncorrectPassword");
            exit();
        }else{
            $query = $conn->prepare('SELECT * FROM users WHERE username = :username');

            $query->bindParam(":username", $username);
            $query->execute();


            $user = $query->fetchAll();
            foreach($user as $user){
                $_SESSION['userId'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
            }
            header("Location: ../Home/indexFP.php?success=loginSuccess");

        }

        
        
        // if($password !== $dbPassword){
        //     header("Location: indexLog.php?error=usernameNotFoundOrIncorrectPassword");
        //     exit();
        // }else{
        //     $query = $conn->prepare('SELECT * FROM users WHERE username = :username');

        //     $query->bindParam(":username", $username);
        //     $query->execute();


        //     $user = $query->fetchAll();
        //     foreach($user as $user){
        //         $_SESSION['userId'] = $user['id'];
        //         $_SESSION['username'] = $user['username'];
                
        //     }
        //     header("Location: ../Home/indexFP.php?success=loginSuccess");

        // }
    }
    

    
   
    // $uname = "admin";
    // $pwd = "admin";


    

    
   //profile
  //all rows
//    $query = 'SELECT * FROM users';

//    $data = $conn->query($query);

   
    // echo '
    // <table border=1>
    // <tr>
    //     <th>NAME</th>
    //     <th>USERNAME</th>
    //     <th>EMAIL</th>
    // </tr>  '
    // foreach($data as $row){

    // echo '<tr>
    //     <td>'.$row['name'] .'</td>
    //     <td>'.$row['username'] .'</td>
    //     <td>'.$row['email'] .'</td>
    // </tr>  '}' 
    // </table>'
   

   //single row
//    $statment = $conn->prepare("SELECT * FROM users WHERE username = :username ");

//    $statment->execute(array(
//        'username' => 'muli'
//    ));

//    echo '
//     <table border=1>
//     <tr>
//         <th>NAME</th>
//         <th>USERNAME</th>
//         <th>EMAIL</th>
//     </tr>  '
//     foreach($statment as $row){

//     echo '<tr>
//         <td>'.$row['name'] .'</td>
//         <td>'.$row['username'] .'</td>
//         <td>'.$row['email'] .'</td>
//     </tr>  '}' 
//     </table>'
       
//     $_SESSION["name"]=$row['name'];
 ?>
   
            
    
