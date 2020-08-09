<?php

    require 'dbconfig.php';
    $query = $conn->query('SELECT users.id , 
           users.name , 
           users.username ,
           users.email , 
           sms.user_id , 
           sms.content
    FROM users  INNER JOIN sms on users.id = sms.user_id ');
    $users = $query->fetchAll();

?>
    <html>
        <head>

        </head>
        <body>
          

        <table class="demo" >
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User SMS</th>
             
                          
            </tr>
        <?php foreach($users as $user):?>
        <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['name'];?></td>
            <td><?php echo $user['email'];?></td>
            <td><?php echo $user['content'];?></td>
        

        </tr>
        <?php endforeach;?>
</table>
<br>
<hr>
<h1>All Users</h1>
<?php
    include "all-users.php";
?>
    
</body>   
</html>