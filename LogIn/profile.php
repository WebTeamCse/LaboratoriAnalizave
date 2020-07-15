 <?php
    require '../crud/dbconfig.php';
    
    $userId = $_SESSION['userId'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = " . $userId);
    $userInfo = $stmt->fetchAll();
    //var_dump($_SESSION['userId']);

  
 ?>
 <link rel="stylesheet" type="text/css" href="profile-style.php"> 

<?php foreach($userInfo as $user): ?>

        <div class="main">
          <h3>Account Info</h3><br>
          <div class="name">
            <label for="">Name: </label>
            <Label><?php echo $user["name"];?></Label>
          </div>
          <div class="name">
            <label for="">Username: </label>
            <Label><?php echo $user['username'];?></Label>
          </div>

          <div class="email">
            <label> Email: </label>
            <Label><?php echo $user['email'];?></Label>
          </div>
        </div>
         
        
  <?php endforeach; ?> 
