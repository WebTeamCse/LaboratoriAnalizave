<?php
    session_start();
        echo $_SESSION["name"];
        $_SESSION["username"]= $_POST["username"];
       $_SESSION["email"]= $_POST["email"];
    // if(isset($_SESSION['uname'])){
    //     echo "Welcome too Product Page";

    //     echo "<br><a href='welcome.php'><input type=button name=back value=back></a>";
    // }else{
    //     echo "<script>location.href='indexLog.php'</script>";
    // }
?>  