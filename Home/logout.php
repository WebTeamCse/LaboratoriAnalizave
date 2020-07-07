<?php 

    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();

       
        // header("Location: indexFP.php");
        echo '<script language="javascript">window.location.href ="indexFP.php"</script>';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styleFP.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div >
        <ul class="connect">
            <!-- <li class="logout"> <a href="../LaboratoriAnalizave/LogIn/login.php">Log out </a></li> -->
            <form action="" method="POST">
            <button class="logout" name="logout">Logout</button>
            </form>
        </ul>
    </div>
</body>
</html>