<?php
        require '../crud/dbconfig.php';
 
        session_start();
      $_POST['userID'] = $_SESSION['userId'];
      //var_dump($_SESSION['userId']);
       if(isset($_POST["submit"])){
           $sms = $_POST['sms'];

           $sql = 'INSERT INTO sms(content, user_id) VALUES 
           (:content, :user_id)';
   
            $query = $conn-> prepare($sql);
            $query->bindParam(":sms", $sms);
            $query->bindParam(":user_id",$_POST['userID']);
            $query->execute();
           //Array
        //    $query->execute([
        //        'content' => $sms,
        //        'user_id' => $_POST['userID']
        //    ]);
   
           header("Location:indexFP.php");
        }
?>