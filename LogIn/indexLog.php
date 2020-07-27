
<?php
     session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    
        <meta charset="utf-8">
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="styleLog.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="login-script.js">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
          crossorigin="anonymous"></script>
        
    </head>
    <body>

    
        <div class="login">
           
                <form class="form" id="form" onsubmit="return validate()" action="welcome.php" method="post" >
                    <h1>Log In</h1>
                    <p>Welcome back! Please login to your account.</p>
                    <?php
                            if(isset($_GET['error'])){
                                if($_GET['error'] == "usernameNotFoundOrIncorrectPassword"){
                                    echo "<p style=\"color:red\" >Username Not Found Or Incorrect Password</p>";
                                }}?>
                 
                        <input type="text" id="email" name="uname" placeholder="Username">
                        <br>
                        <input type="password" id="password" name="pwd"  type="password" placeholder="Password"><br>
                    <div class="btn">
                        <button class="buton1" type="submit" name="login" value="login">Login</button>
                        <button class="buton2" ><a href="../Register/indexRegister.php" target="_blank">Register</button>
                    </div>

                        
                </form>
                 <?php
             if(isset($_GET['error'])){
            if($_GET['error'] == "SuccessfullyRegistered"){
                echo '<script>alert("Successfully Registered");</script>';
            }}?>
            
        </div> 
    
        
    </body>
    
    
    
</html>