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
         
            <form action="insert.php" method="post" class="terminetform">
                <input type="text" placeholder="Name & Surname" name="name">
                <div class="beside">
                    <input type="text" placeholder="Phone Number" name="phone">
                </div>
                <div>
                    <select class="selectgender" name="selectdoctor"> 
                        <option>No one</option>
                        <option>Filan</option>
                        <option>Fisteku</option>
                        <option>Fidan</option>
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