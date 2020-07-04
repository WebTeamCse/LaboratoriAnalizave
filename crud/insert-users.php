<?php
    require 'dbconfig.php';

    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = 'INSERT INTO users(name, email, password) VALUES 
        (:name, :email, :password)';

        $query = $conn-> prepare($sql);
        $query-> bindParam('name', $name);
        $query-> bindParam('email', $email);
        $query-> bindParam('password', $password);

        $query-> execute();

        header("Location: users.php");
        
    }
    ?>
    <div class="contaioner">
        <form action="insert-users.php" method="post">
            
            <input type="text" name="name" placeholder="Shenoni emrin"><br>
            <input type="text" name="email" placeholder="Shenoni email"><br>
            <input type="password" name="password" placeholder="Shenoni password">
            <input type="submit" name="submit" value="ruaj shenimet">
            
           
        </form>
    </div>
