<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="styleRegister.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="signup-script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
          crossorigin="anonymous"></script>
        
    </head>
    <body>
    <?php
    require '../crud/dbconfig.php';

    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = 'INSERT INTO users(name, email, password) VALUES 
        (:name, :email, :password)';

         $query = $conn-> prepare($sql);
        //Array
        $query->execute([
            'name'=> $name,
            'email'=> $email, 
            'password'=> $password,
        ]);

        header("Location: ../crud/users.php");
        
    }
    ?>
    <div class="register">
        <form class="form" id="form" action="indexRegister.php" method="post">
              <h1>Register</h1>
              <p> Please login to your account.</p>
            
            <input id="name" type="text" name="name" placeholder="Full Name"><br>
            <input id="email" type="text" name="email" placeholder="Email"><br>
            <input id="password" type="password" name="password" placeholder="Password">
            <div class="btn">
            <input type="submit" name="submit" value="Submit">
            </div>   
           
        </form>
    </div>

   
    
        <!-- <div class="register">
           
           
                <form class="form" id="form" action="indexRegister.php" method="post" onsubmit="return validateForm()">
                    <h1>Register</h1>
                    <p>Welcome back! Please login to your account.</p>
                        <input id="name" name="name" type="text" placeholder="Full Name">
                        <br>
                        <input id="email" name="email" type="text" placeholder="Email">
                        <br>
                        <input id="password" name="password" type="password" placeholder="Password"><br>
                        <div class="btn">
                      
                    </div>                       
                </form>           
        </div>     -->
        
        <?php
            
            // include "../crud/insert-users.php";
        ?> 
    </body>
 
</html>