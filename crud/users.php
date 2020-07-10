<?php
//Select all from users
    require 'dbconfig.php';

    $query = $conn->query('SELECT * FROM sms');

    $users = $query->fetchAll();

?>
<div class="container">
    <h1><a href="insert-users.php"></a></h1>
    <table border="1" style="border:0;">
        <thead>
            <tr>
                <th>content</th>
                <th>user_id</th>
               
            </tr>
        </thead>

        <tbody>
        <?php foreach($users as $user):?>
        
        <tr>
            <td><?php echo $user['content']; ?></td>
            <td><?php echo $user['user_id']; ?></td>
            <!-- <td> <a href="edit-user.php?id="> Edit</a> | Delete</td> -->
        </tr>
        <?php endforeach;
        ?>
             </tbody>
    </table>



    <?php

//Select single records using prepare statment
// $statement = $conn->prepare("SELECT * FROM users WHERE id=
// :id");

// $statement->execute(array(
//     ':id'   => 19
// ));

// echo '<table border=1px;>
// <tr>
//                 <th>Emri</th>
//                 <th>E-mail</th>
                 
//             </tr>';
//     foreach($statement as $user){
//      echo '   <tr>
//         <td>' .$user['name'].' </td>
//         <td>' .$user['password'].' </td>
//     </tr>';

//     }
//     echo '</table>';
// ?>
<!-- 
//Select single records using prepare statment -->
        <?php foreach($users as $user):?>
          <?php 
        //    if($user['name']=='Vigan'){
        //        $_POST['names']= $user['name'];
        //    echo $user['name']; 
        //    echo $_POST['names'];
        //    }
           ?>
           
        <?php endforeach;
        ?>
     
    
   
</div>


