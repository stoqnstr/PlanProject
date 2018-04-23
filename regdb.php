<html>
<head>
<meta  http-equiv="content-type" content="text/html; charset=UTF-8"/>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="3652_3782";

$firstn = $_POST['firstn'];
$lastn = $_POST['lastn'];
$email = $_POST['email'];
$usern = $_POST['username'];
$passw = $_POST['passw'];
include 'dbcon.php';//connect to Db
$sql = "INSERT INTO users (firstn, lastn, email, username, passw)
VALUES ('$firstn', '$lastn', '$email', '$usern', '$passw')";
if ($conn->query($sql) == TRUE) {
    echo "Нов запис създаден успешно";
} else {
    echo "Грешка: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: index.php");
die();



?>

</body>
</html>
