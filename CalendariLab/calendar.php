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

        <div class = "notes">
            <input type = "text" placeholder = "Notes"> </input>  
        </div>
        <div class = "submit">
        <input type = "submit " >
</div>
<div>
<form>
<input type="text" name="title">

<inut type ="file" name="uploadfile"/>
    <input type="submit" name="uploadfilesub" value="upload"/>

 </form>
 <?php
  $name = $_POST["uploadfilesub"] ; 
  echo $name;
  
 ?>
</div>
        <script> 
                
                $('.toggle').click(function() {
        
                            $('.side-nav').toggleClass('side-nav-open', 500);
                            $(this).toggleClass('open');
                        });
                    
                
        </script>

        
        <?php

// $conn = mysqli_connect("localhost","root", "" , "uploadFile");
// if($conn){
//     echo "connected";
//}



               
            ?>
            <footer>
            <?php
                 include "../footer.php";
            ?>
            </footer>
        
    </body>
</html>
