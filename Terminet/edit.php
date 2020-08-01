<?php

require '../crud/dbconfig.php';
    $userID = $_GET['id'];
    $query = " select * from terminet where userID='".$userID."'";
    $result = $conn->query($query);

    foreach($result as $user){
        $userID = $user['userID'];
        $userName = $user['userName'];
        $phone = $user['phone'];
        $doctor = $user['doctor'];
        $useremail = $user['useremail'];
    }
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
        <div class="content">
            <img src="../img/terminimage.jpg" alt="header-image" class="cld-responsive">
         
            <form action="update.php?ID=<?php echo $userID ?>" method="post" class="terminetform">
                <input type="text" placeholder="Name & Surname" name="name" value="<?php echo $userName ?>">
                <div class="beside">
                    <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $phone ?>">
                </div>
                <div>
                    <select class="selectgender" name="selectdoctor" value="<?php echo $doctor ?>"> 
                        <option>No one</option>
                        <option>Njazi Luma</option>
                        <option>Bardh Krasniqi</option>
                        <option>Agim Bytyqi</option>
                    </select>
                </div>
                <input type="email" placeholder="Email Address" name="email" value="<?php echo $useremail ?>">
                <input type="date" id="date" name="date" value="<?php echo $date ?>">
                <div class="createbutton">
                    <button type="update" name="update">Update</button>
                </div>
            </form>
        </div>
    </div>

    <?php
 include '../footer.php';
 ?>
  <script> 
                
                $('.toggle').click(function() {
        
                            $('.side-nav').toggleClass('side-nav-open', 500);
                            $(this).toggleClass('open');
                        });
                    
                
        </script>
</body>

</html> 