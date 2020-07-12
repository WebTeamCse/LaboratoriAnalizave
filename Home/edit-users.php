<?php
require '../crud/dbconfig.php';
session_start();
if(isset($_SESSION['userid'])){
    $id = $_SESSION['userid'];
// var_dump($id);

}
//var_dump($id);
$query = $conn->query("SELECT id , name , email , username
FROM users WHERE id='$id'");
$users = $query->fetch();
// var_dump($users);
// print_r($users);

    if(isset($_POST["submit"])){
        $id = $_SESSION['userId'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $sql = 'UPDATE users SET  name = :name, email = :email, username = :username WHERE id = :id';
        $query = $conn->prepare($sql);
        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('username',$username);
        $query->bindParam('id',$id);
      
        $query->execute();
        header('Location:index.php');
    } 

?>
        <title>Edit Profile</title>
        <link rel="stylesheet" type="text/css" href="edit-style.css">
        <script type="text/javascript" src="edit-users-script.js"></script> 
        


        
    

       
            
<div class="register">

 <form id="form" method="post" onsubmit="return validate()">  
              <h1>Edit your account</h1>
           <!-- <input type="text" id="id" name="id"  value=" <?php //echo $user['id']; ?> " ><br> -->
            <input type="text" id="name" name="name"  value="<?php echo $users['name']; ?> " ><br>
            <input type="text" name="email" id="email" value="<?php echo $users['email']; ?>" placeholder="Ndryshoni email"><br>
            <input type="text" id="username" name="username" value="<?php echo $users['username']; ?>" placeholder="Ndryshoni username"><br><br>
            <input type="submit" name="submit" value="ruaj shenimet"><br><br>
          
        <p style="color:black;">or</p><br>
            <a href="change-password.php">Change your password</a>
</form>

</div>
