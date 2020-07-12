
<?php
$servername = "localhost";
$username = "root";
$password = ""; 


try {
  $conn = new PDO("mysql:host=$servername;dbname=cse2020", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "LIDHJA U REALIZUA ME SUKSES";
} catch(PDOException $e) {
  echo "Lidhja nuk realizua...".$e->getMessage();
}
?>