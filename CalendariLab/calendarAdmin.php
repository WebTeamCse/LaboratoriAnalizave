<?php
  include "../Login/login-sherbimet.php";
  require "../crud/dbconfig.php";
  $query = $conn->query("Select * from upload");
  $query->execute([]);

  $users = $query->fetchAll();
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>  
        <link rel="stylesheet" href="calendar.css">   
        <link rel="stylesheet" type="text/css" href="../Home/admin-style.css">
    </head>
    <body onload="RenderDate()">
    <?php
    include "../headers.php";
    ?> 
    
        <div class="wrapper">
            <div class="calendar">
            <table class="demo" >
            <tr>
                <th>Username</th>
                <th>Picture</th>
                <th>User Id</th>
                          
            </tr>
        <?php foreach($users as $user):?>
        <tr>
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['picProfile'];?></td>
            <td><?php echo $user['user_ID'];?></td>
            <td><a href="deleteuser_upload.php?id=<?php echo $user['user_ID']; ?>">Delete</a></td>
            
            
            

        </tr>
        <?php endforeach;?>
</table>
            </div>
        </div>
        <script src="calendar.js"></script>

        
        
</div>
<div>
</div>
        <script> 
                
                $('.toggle').click(function() {
        
                            $('.side-nav').toggleClass('side-nav-open', 500);
                             $(this).toggleClass('open');
                        });
                    
                
        </script>

            <footer>
            <?php
                 include "../footer.php";
            ?>
            </footer>
         
    </body>
</html>
