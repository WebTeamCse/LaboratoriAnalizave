<?php
require '../crud/dbconfig.php';
session_start();
if(isset($_SESSION['userId'])){
    //var_dump($_SESSION['userId']);
    $id = $_SESSION['userId'];
}

    $sql = 'SELECT * FROM users WHERE id=":id"';
    $query = $conn->prepare($sql);
    // $stmt->bindParam('id',$id);
    $query->execute(['id' => $id]);

    $users = $query->fetchAll();
    print_r($users);
    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];


        //var_dump($id) ;
        
        $sql = "UPDATE users SET name = :name, email = :email, username = :username WHERE id = '$id'";
        $query = $conn->prepare($sql);

        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('username',$username);
        // $query->bindParam('id',$id);

        $query->execute();
        // $stmt->execute([$name, $email, $username]);

        header('Location:edit-users.php');
        // exit();
    }

   
?>
<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" type="text/css" href="edit-style.css">
        
    </head>
    <body>
        
    
</html>
       
            
<div class="register">

 <form id="form" action="edit-users.php" method="post" onsubmit="return validateForm()">  
              <h1>Edit your account</h1>
              <input type="text" id="name" name="name"  value="<?php echo $users['name'];?>" placeholder="Ndryshoni emrin"><br>
            <input type="text" name="email" id="email" value="<?php echo $users['email'];?>" placeholder="Ndryshoni email"><br>
            <input type="text" id="username" name="username" value="<?php echo $users['username'];?>" placeholder="Ndryshoni username"><br><br>
            <input type="submit" name="submit" value="ruaj shenimet"><br><br>
          
        <p style="color:black;">or</p><br>
            <a href="#">Change your password</a>
</form>

</div>
</body>
