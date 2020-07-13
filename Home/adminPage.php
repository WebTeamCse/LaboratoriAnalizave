<html>
    <head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="admin-style.css">
    
    </head>

    <body>
    <a href="index.php" class="homelink"> Back to HOME</a>
    <h1>Admin Page</h1>
    <hr>
    <div class="delete-user">
        <?php include"delete-user.php";?>
    </div>
    
    <hr>
    <h1>All users comments</h1>
    <?php
    include "../crud/users.php";
?>
        
    </body>
</html>

