<?php
    session_start();
    
    if(isset($_SESSION['uname'])){
        echo "Welcome too Product Page";

        echo "<br><a href='welcome.php'><input type=button name=back value=back></a>";
    }else{
        echo "<script>location.href='indexLog.php'</script>";
    }
?>  