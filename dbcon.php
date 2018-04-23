<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cookbook";
//---------------
$conn=new mysqli($servername,$username,$password, $dbname);
mysqli_set_charset($conn,"utf8");
$charset=mysqli_character_set_name($conn);

if ($conn->connect_error){
	die("Свързването е неуспешно: " . $conn->connect_error);
}
?>