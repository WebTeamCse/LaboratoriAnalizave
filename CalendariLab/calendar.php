<?php
  include "../Login/login-sherbimet.php";
?>
<!DOCTYPE html>
<html> 

<head>
    <title>Calendar</title> 
    <link rel="stylesheet" href="calendar.css">
</head>

<body onload="RenderDate()">
    <?php
    include "../headers.php";
    ?>
<?php 
    if($_SESSION['userId'] ==18){
        header("Location:calendarAdmin.php");
    }
?>
    <div class="wrapper">
        <div class="calendar">
            <div class="month">
                <div class="prev" onclick="moveDate('prev')">
                    <span>&#10094</span>
                </div>
                <div>
                    <h2 id="month">June</h2>
                    <p id="date_str">Mon Jun 29 2020</p>
                </div>
                <div class="next" onclick="moveDate('next')">
                    <span>&#10095</span>
                </div>
            </div>
            <div class="weekends">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days">
                <div class="prev_date">26</div>
                <div class="prev_date">27</div>
                <div class="prev_date">28</div>
                <div class="prev_date">29</div>
                <div class="prev_date">30</div>
                <div class="prev_date">31</div>
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div class="today">4</div>
                <div>5 </div>
                <div>6 </div>
                <div>7 </div>
                <div>8 </div>
                <div>9 </div>
                <div>10</div>
                <div>11</div>
                <div>12</div>
                <div>13</div>
                <div>14</div>
                <div>15</div>
                <div>16</div>
                <div>17</div>
                <div>18</div>
                <div>19</div>
                <div>20</div>
                <div>21</div>
                <div>22</div>
                <div>23</div>
                <div>24</div>
                <div>25</div>
                <div>26</div>
                <div>27</div>
                <div>28</div>
                <div>29</div>
                <div>30</div>
            </div>
        </div>
    </div>
    <script src="calendar.js"></script>



    </div>
    <div>
    </div>
    <script>
        $('.toggle').click(function () {

            $('.side-nav').toggleClass('side-nav-open', 500);
            $(this).toggleClass('open');
        });
    </script>

    <?php
        include("config.php");
        if(isset($_POST['btn-add']))
        {
            $name = $_POST["user_name"];
            $image=$_FILES['profile']['name'];
            $name1=$_FILES['profile']['name'];
            $tmp_dir=$_FILES['profile']['tmp_name'];
           // $imageSize=$_FILES['profile']['size'];
            // var_dump($_FILES['profile']['name']);
            // var_dump($_FILES['profile']['name']);
            // var_dump($_FILES['profile']['tmp_name']);
            // var_dump($_FILES['profile']['size']);
            

           $upload_dir='CalendariLab' ;
           $imgExt=strtolower(pathinfo($image,PATHINFO_EXTENSION));
          // $valid_extensions=array('jpeg','jpg','png','gif','pdf');
           $picProfile=rand(1000,1000000).".".$imgExt;
           move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
            $userID = $_SESSION["userId"];
            $stmt=$db_conn->prepare('INSERT INTO  Upload(username,picProfile,user_ID)VALUES(:uname,:upic,:userID) LIMIT 1');
            $stmt->bindParam(':uname',$name);
            $stmt->bindParam(':upic',$picProfile);
            $stmt->bindParam(':upic',$picProfile);
            $stmt->bindParam(':userID',$userID);

            $stmt->execute();
            // header('Location:calendar.php');
            // exit();
            

        }   
       
       ?>
    <?php
       if($_SESSION['userId'] ==18){
        include  "users-upload.php";
       } 
      
       ?>
    <div class="container">
        <div class="add-form">
            <h1 class="text-center">Please Insert new Item image/file</h1>
            <form action="calendar.php" method="post" enctype="multipart/form-data">
                <label>User Name</label>
                <input type="text" name="user_name" class="form-control" required="">
                <label>Picture</label>
                <input type="file" name="profile" class="form-cotrol" required="" accept="*/image">
                <button type="submit" name="btn-add"> Add New </button>
            </form>
        </div>
    </div>


    <footer>
        <?php
                 include "../footer.php";
            ?>
    </footer>

</body>

</html>