<html>
    <head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="admin-style.css">
    
    </head>

    <body>
    <a href="index.php"> HOME</a>
    <div class="delete-user">
        <?php include"delete-user.php";?>
    </div>
    
    <hr>
    <?php
    include "../crud/users.php";
?>
        
    </body>
</html>

