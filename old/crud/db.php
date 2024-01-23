<?php
// use the name of the MySQL database service as $servername, you can check from the Docker Desktop 
$servername="webprog23_db_1";
$username="testuser";
$password="password";
$dbname ="testuser";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
?>