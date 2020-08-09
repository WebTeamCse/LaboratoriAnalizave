<?php 
 
 include "../Login/login-sherbimet.php";


require '../crud/dbconfig.php';
    
 $query = "select * from terminet ";
 $result = $conn->query($query);
 
?>


<!DOCTYPE html>
<html>  

<head>
    <link rel="stylesheet" type="text/css" href="terminet.css">
</head>

<body>
    <?php
    include "../headers.php";
    ?>

    <div class="container">

        <div class="tabletermin">

            <table>
                <tr>

                    <th>ID</th>
                    <th>Name & Surname</th>
                    <th>Phone</th>
                    <th>Email</th> 
                    <th>Doktor</th>
                    <th>Date</th>
                    <th class="createtermin"><button type="button"
                            onclick="window.location.href='create.php';">Create</button>
                    </th>
                </tr>

                <?php foreach($result as $user):?>
                <tr>
                    <td><?php echo $user['userID']?></td>
                    <td><?php echo $user['userName']?></td>
                    <td><?php echo $user['phone']?></td>
                    <td><?php echo $user['useremail']?></td>
                    <td><?php echo $user['doctor']?></td>
                    <td><?php echo $user['date']?></td>
                    <td><a href="edit.php?id=<?php echo $user['userID']?>" class="edit_btn">Edit</a></td>
                    <td><a href="delete.php?Del=<?php echo $user['userID']?>" class="del_btn">Delete</a></td>
                </tr>
                <?php endforeach;?>

            </table>
        </div>
    </div>
    <?php
  include '../footer.php';
  ?>
    <script>
        $('.toggle').click(function () {

            $('.side-nav').toggleClass('side-nav-open', 500);
            $(this).toggleClass('open');
        });
    </script>

</body>

</html>