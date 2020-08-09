<?php

    require '../crud/dbconfig.php';
    $query = $conn->query('SELECT users.id , 
           users.name , 
           users.username , 
           upload.picProfile
    FROM users  INNER JOIN upload on users.id = upload.user_ID ');
    $users = $query->fetchAll();
     
    // var_dump($users);
    //  print_r($users);

?>
    <html>
        <head>

        </head>  
        <body>
          


        <table class="demo" >

            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Username</th>
                <th>User pic Profile</th>
                <!-- <th>Delete User</th> -->
                          
            </tr>
        <?php foreach($users as $user):?>
        <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['name'];?></td>
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['picProfile'];?></td>
            <!-- <td class="delete"><a href="delete_user.php><?php echo "Delete this user"?></a></td> -->

        </tr>
        <?php endforeach;?>
</table>
           
                
            
        </body>
    </html>