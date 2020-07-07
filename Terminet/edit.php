<?php

    require_once("connection.php");
    $userID = $_GET['GetID'];
    $query = " select * from terminet where userID='".$userID."'";
    $result = mysqli_query($db,$query);

    while($row=mysqli_fetch_assoc($result)){
        $userID = $row['userID'];
        $userName = $row['userName'];
        $phone = $row['phone'];
        $doctor = $row['doctor'];
        $useremail = $row['useremail'];
    }
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
        <div class="content">
            <img src="../img/terminimage.jpg" alt="header-image" class="cld-responsive">
         
            <form action="update.php?ID=<?php echo $userID ?>" method="post">
                <input type="text" placeholder="Name & Surname" name="name" value="<?php echo $userName ?>">
                <div class="beside">
                    <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $phone ?>">
                </div>
                <div>
                    <select class="selectgender" name="selectdoctor" value="<?php echo $doctor ?>"> 
                        <option>No one</option>
                        <option>Filan</option>
                        <option>Fisteku</option>
                        <option>Fidan</option>
                    </select>
                </div>
                <input type="email" placeholder="Email Address" name="email" value="<?php echo $useremail ?>">
                <div class="createbutton">
                    <button type="update" name="update">Update</button>
                </div>
            </form>
        </div>
    </div>

    <?php
 include '../footer.php';
 ?>
</body>

</html>