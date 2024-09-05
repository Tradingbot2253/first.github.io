
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$host="localhost";

$user="root";

$password="";

$db="Great minds";


$conn=new mysqli($host,$user,$password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    password VARCHAR(50) NOT NULL,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
}

?>