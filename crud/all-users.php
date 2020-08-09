<?php

    require 'dbconfig.php';
    $query = $conn->query('SELECT users.id , 
           users.name , 
           users.username ,
           users.email 
           
    FROM users ');
    $users = $query->fetchAll();


?>
    <html>
        <body>
        <table class="demo" >
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>          
            </tr>
        <?php foreach($users as $row):?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
        </tr>
        <?php endforeach;?>
</table>
