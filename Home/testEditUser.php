<?php
   require '../crud/dbconfig.php';
   session_start();
    $userId =  $_SESSION['userId'];

    $stmt = $conn->query('SELECT * FROM users WHERE id = 3');
    $user = $stmt->fetchAll();

   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
   
    
    $sql = 'UPDATE users SET name = :name, email = :email, username = :username WHERE id = :id';
    $query = $conn->prepare($sql);

    $query->bindParam('name',$name);
    $query->bindParam('email',$email);
    $query->bindParam('username',$username);
    $query->bindParam('id',$id);

    $query->execute();
    header('Location:users.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    body{
        backgroun
    }
</style>
    <form action="" method="POST">
        <?php foreach($user as $user): ?>
            <input type="text" name="'name" value="<?php echo $user['name']; ?>">
            <br>
            <input type="email" name="email" value="<?php echo $user['email'];?>">
            <br>
            <input type="email" name="username" value="<?php echo $user['username'];?>">
            <br>
            <input type="submit" name="submit">
            <br>  
        <?php endforeach; ?>
    </form>
</body>
</html>