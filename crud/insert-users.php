<?php
    require 'dbconfig.php';

    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = 'INSERT INTO users(name, email,username, password) VALUES 
        (:name, :email,:username, :password)';

        $query = $conn-> prepare($sql);
        // $query-> bindParam('name', $name);
        // $query-> bindParam('email', $email);
        // $query-> bindParam('password', $password);

        // $query-> execute();
        $query->execute([
            'name' => $name,
            'email' => $email,
            'username' => $username,

            'password' => $password
        ]);


        header("Location: users.php");
        
    }
    ?>
    <div class="contaioner">
        <form action="insert-users.php" method="post">
            
            <input type="text" name="name" placeholder="Shenoni emrin"><br>
            <input type="text" name="email" placeholder="Shenoni email"><br>
            <input type="text" name="username" placeholder="Shenoni username"><br>
            <input type="password" name="password" placeholder="Shenoni password">
            <input type="submit" name="submit" value="ruaj shenimet">
            
           
        </form>
    </div>
