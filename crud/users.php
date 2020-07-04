<?php
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
                <th>Funksionet</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($users as $user):?>
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td>Edit | Delete</td>
        </tr>
        <?php endforeach; ?>
        
        </tbody>
    </table>
</div>
