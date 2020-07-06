<?php
    require '../crud/dbconfig.php';

    $query = $conn->query('SELECT * FROM users');

    $users = $query->fetchAll();

?>
<?php foreach($users as $user):?>
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td> <a href="edit-user.php?id=<?php $user['id']; ?>"> Edit</a> | Delete</td>
        </tr>
        <?php endforeach; ?>