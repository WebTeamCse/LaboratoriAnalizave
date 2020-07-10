<?php

    require 'dbconfig.php';
    $query = $conn->query('SELECT users.id , 
           users.name , 
           users.username , 
           sms.user_id , 
           sms.content
    FROM users INNER JOIN sms on users.id = sms.user_id');
    $users = $query->fetchAll();
?>
    <html>
        <head>

        </head>
        <body>

        <table id="demo" border='1'>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User SMS</th>
            </tr>
        <?php foreach($users as $user):?>
        <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['name'];?></td>
            <td><?php echo $user['content'];?></td>
        </tr>
        <?php endforeach;?>
</table>
           
                
            
        </body>
    </html>
    <?php

//     //$query = $conn->query('SELECT * FROM sms');
//     $query = $conn->prepare('SELECT users.id , 
//        users.name , 
//        users.username , 
//        sms.user_id , 
//        sms.content
// FROM users INNER JOIN sms on users.id = sms.user_id');
    
//     $query->execute();
//     while (($row = $query->fetch(PDO::FETCH_ASSOC)) !== false) {
//         print_r($row);
        
//         /* will output:
//            Array (
//               'p_id' => 'value'
//               'p_text' => 'value'
//               'p_user_id' => 'value'
//               'u_id' => 'value',
//               'u_name' => 'value'
//            )
//         So now you need to decide how to create your objects with the information returned
//         */
//      }
?>


<?php
//Select all from users
    //require 'dbconfig.php';

    //$query = $conn->query('SELECT * FROM sms');
//     $query = $conn->prepare('SELECT users.id , 
//        users.name , 
//        users.username , 
//        sms.user_id , 
//        sms.content
// FROM users INNER JOIN sms on users.id = sms.user_id');
    
//     $query->execute();
//     while (($row = $query->fetch(PDO::FETCH_ASSOC)) !== false) {
//         print_r($row);
        
        /* will output:
           Array (
              'p_id' => 'value'
              'p_text' => 'value'
              'p_user_id' => 'value'
              'u_id' => 'value',
              'u_name' => 'value'
           )
        So now you need to decide how to create your objects with the information returned
        */
    //  }
?>
