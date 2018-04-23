<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cookbook";
//------------------------------------------
$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error){
	die("con fail: ". $conn->connect_error);
}

$sql = "CREATE DATABASE cookbook";
if ($conn->query($sql) === TRUE){
	echo "Създадена е база данни. ";
}else {
	echo "Грешка";
}
$conn->close();
//----------------------------------------
//Creation of table recipes
$conn = new mysqli($servername, $username, $password, $dbname);
// Connection check
if ($conn->connect_error) {
    die("Свързването неуспешно: " . $conn->connect_error);
} 
$sqlt = "CREATE TABLE recipes(
aa INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name TEXT NOT NULL,
instructions TEXT NOT NULL,
ingr1 TEXT NOT NULL,
image_id TEXT NOT NULL,
del_rec TINYINT(1) NOT NULL,
ctime INT(255) NOT NULL,
category TEXT NOT NULL,
rec_uid INT(11) NOT NULL,
FULLTEXT(ingr1)
)";

$sqlt2 = "CREATE TABLE users(
aa INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstn TEXT NOT NULL,
lastn TEXT NOT NULL,
email TEXT NOT NULL,
username TEXT NOT NULL,
passw TEXT NOT NULL
)";

if ($conn->query($sqlt) === TRUE && $conn->query($sqlt2) === TRUE) {
    echo " Таблиците са създадени.";
} else {
    echo "Грешка" . $conn->error;
}


$conn->close();
//------------------------------------------


?>