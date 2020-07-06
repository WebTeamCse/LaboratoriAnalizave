<?php
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse2020";
try {
    // sql to delete a record
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

     // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql ="DELETE FROM users WHERE id=16"; 

// use exec() because no results are returned
$conn->exec($sql);
echo "Record deleted successfully";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
?>