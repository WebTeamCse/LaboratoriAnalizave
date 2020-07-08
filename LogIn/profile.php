 <?php
    require '../crud/dbconfig.php';
    
    $userId = $_SESSION['userId'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = " . $userId);
    $userInfo = $stmt->fetchAll();


  
 ?>

<?php foreach($userInfo as $user): ?>

        
          <h1>Account Info</h1>
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

         
        
  <?php endforeach; ?> 
