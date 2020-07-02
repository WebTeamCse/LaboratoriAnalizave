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
         
            <form>
                <input type="text" placeholder="Name & Surname">
                <div class="beside">
                    <input type="text" placeholder="Phone Number">
                </div>
                <div>
                    <select class="selectgender"> 
                        <option>No one</option>
                        <option>Filan</option>
                        <option>Fisteku</option>
                        <option>Fidan</option>
                    </select>
                </div>
                <input type="email" placeholder="Email Address">
                <div class="createbutton">
                    <button type="button">Create</button>
                </div>
            </form>
        </div>
    </div>

    <?php
 include '../footer.php';
 ?>
</body>

</html>