<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="styleLog.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="login-script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
          crossorigin="anonymous"></script>
        
    </head>
    <body>
        <div class="login">
           
                <form class="form" id="form" action="/loginLog.html" method="get" onsubmit="return validateForm()">
                    <h1>Log In</h1>
                    <p>Welcome back! Please login to your account.</p>
                 
                        <input type="text" id="email" name="email" placeholder="Email">
                        <br>
                        <input type="password" id="password" name="password"  type="password" placeholder="Password"><br>
                    <div class="btn">
                        <button class="buton1" type="submit" value="Submit">Login</button>
                        <button class="buton2" ><a href="../Register/indexRegister.html">Register</button>
                    </div>
                        
                </form>
            
        </div>
    
        
    </body>
    
    
    
</html>