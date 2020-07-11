<?php 
 
 require_once("connection.php");
 $query = "select * from terminet ";
 $result = mysqli_query($db,$query);
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="terminet.css">
</head>

<body>
    <?php
 include '../header.php';
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
                    <th class="createtermin"><button type="button" onclick="window.location.href='http://localhost/LaboratoriAnalizave/Terminet/create.php';">Create</button></th>
                </tr>
                
                <?php 
                  while($row=mysqli_fetch_assoc($result)){
                      $userID = $row['userID'];
                      $userName = $row['userName'];
                      $phone = $row['phone'];
                      $doctor = $row['doctor'];
                      $useremail = $row['useremail'];
                      $date = $row['date'];
                  
               ?>
                <tr>
                    <td><?php echo $userID?></td>
                    <td><?php echo $userName?></td>
                    <td><?php echo $phone?></td>
                    <td><?php echo $doctor?></td>
                    <td><?php echo $useremail?></td>
                    <td><?php echo $date?></td>
                    <td><a href="edit.php?GetID=<?php echo $userID ?>" class="edit_btn">Edit</button></td>
                    <td><a href="delete.php?Del=<?php echo $userID ?>" class="del_btn">Delete</button></td>
                </tr>
                <?php

                  }
                  ?>

            </table>
        </div>
    </div>

    <?php
 include '../footer.php';
 ?>
</body>

</html>