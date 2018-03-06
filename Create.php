<?php
$servername = "127.0.0.1";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 // sql to create table
$sql = "CREATE TABLE users (
id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) DEFAULT NULL,
lastname VARCHAR(30) DEFAULT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>