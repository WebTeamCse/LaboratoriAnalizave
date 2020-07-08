<?php
//Select all from users
    require 'dbconfig.php';

    $query = $conn->query('SELECT * FROM users');

    $users = $query->fetchAll();

?>
<div class="container">
    <h1><a href="insert-users.php"></a></h1>
    <table border="1">
        <thead>
            <tr>
                <th>Emri</th>
                <th>E-mail</th>
                <th>username</th>

                <th>password</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($users as $user):?>
        
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <!-- <td> <a href="edit-user.php?id=<?php $user['id']; ?>"> Edit</a> | Delete</td> -->
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
           if($user['name']=='Vigan'){
               $_POST['names']= $user['name'];
           echo $user['name']; 
           echo $_POST['names'];
           }
           ?>
           
        <?php endforeach;
        ?>
     
    
   
</div>


