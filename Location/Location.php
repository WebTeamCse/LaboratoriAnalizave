<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
  <link rel="stylesheet" href="Locaton.css">
</head>


<body>
  <?php
 include "../headers.php";
    ?>
  <div class="X">

    <ul class="doctorlist">
      <li>
        <div class="fotodoctor"></div>
        <div class="description">
          <h2>Peje</h2>
          <a href="https://www.google.com/maps"> Rruga "Adem Jashari"</a>
          <p>+38349296609</p>
        </div>
      </li>
      <li>
        <div class="fotodoctor"></div>
        <div class="description">
          <h2>Gjakove</h2>
          <a href="https://www.google.com/maps"> Rruga "Adem Jashari"</a>
          <p>+38349296609</p>
        </div>
      </li>
      <li>
        <div class="fotodoctor"></div>
        <div class="description">
          <h2>Lipjan</h2>
          <a href="https://www.google.com/maps"> Rruga "Adem Jashari"</a>
          <p>+38349296609</p>
        </div> 
      </li>

      <li>
        <div class="fotodoctor"></div>
        <div class="description">
          <h2>Prishtine</h2>
           <a href="https://goo.gl/maps/HhazXcVPSJbPYD3F9"> Rruga "Adem Jashari"</a>
          <p>+38349296609</p>
        </div>
      </li>
      <li>
        <div class="fotodoctor"></div>
        <div class="description">
          <h2>Ferizaj</h2>
          <a href="https://www.google.com/maps"> Rruga "Adem Jashari"</a>
          <p>+38349296609</p>
        </div>
      </li>


      <li>
        <div class="fotodoctor"></div>
        <div class="description">
          <h2>Kaqanik</h2>
          <a href="https://www.google.com/maps"> Rruga "Adem Jashari"</a>
          <p>+38349296609</p>
        </div>
      </li>
    </ul>



  </div>
  <script>
    $('.toggle').click(function () {

      $('.side-nav').toggleClass('side-nav-open', 500);
      $(this).toggleClass('open');
    });
  </script>
  <?php
    include "../footer.php";
  ?>

</body>

</html>