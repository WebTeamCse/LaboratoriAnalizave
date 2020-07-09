<?php
require "../crud/dbconfig.php";
?>
<form method="POST">
<input type="text" name="title"  >

<!-- <inut type ="file" name="uploadfile"/> -->
    <input type="submit" name="uploadfilesub" value="upload">

 </form>
 <?php
 if(isset($_POST['title'])){
    echo $_POST['title'] ;
}else{
    echo "spo ban";
}

$password = 'password';

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        echo $hashedPassword;
  
  
 ?>