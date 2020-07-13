<?php
//Contact US
               
require '../crud/dbconfig.php';
    
    if(isset($_POST["delete"])){
        $id = $_POST['id'];
        //var_dump($id) ;
        $sql = "DELETE FROM sms WHERE user_id =:user_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $id);
        $delete = $stmt->execute();

        $sql = "DELETE FROM users WHERE id =:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $delete = $stmt->execute();
        header('Location:adminPage.php');
        exit;
    }
   
?>
 
<h1>Delete a User by ID</h1>
 <form id="form" action="adminPage.php" method="post" onsubmit="return validateForm()">  
        <input type="text" id="id" name="id" placeholder="put the user id"><br>
        <button type="submit" name="delete">Delete</button>  
</form>