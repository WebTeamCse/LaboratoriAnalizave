<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="terminet.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body>
<?php
    include "../headers.php";
    ?>
    <div class="container">
        <div class="content">
            <img src="../img/terminimage.jpg" alt="header-image" class="cld-responsive">
         
            <form action="insert.php" method="post" class="terminetform">
                <input type="text" placeholder="Name & Surname" name="name">
                <div class="beside">
                    <input type="text" placeholder="Phone Number" name="phone">
                </div>
                <div>
                    <select class="selectgender" name="selectdoctor"> 
                        <option>No one</option>
                        <option>Njazi Luma</option>
                        <option>Bardh Krasniqi</option>
                        <option>Agim Bytyqi</option>
                    </select>
                </div>
                <input type="email" placeholder="Email Address" name="email">
                
                <input type="date" id="date" name="date">
                <div class="createbutton">
                    <button type="submit" name="submit">Create</button>
                </div>
            </form>
        </div>
    </div>

    <?php
 include '../footer.php';
 ?>
</body>

</html>