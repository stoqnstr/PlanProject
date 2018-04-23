<?php
session_start();


?>
<html>
<head>
<title>Влизане:</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main" style="height: 100px;">
	<?php include 'menu.php';?>
	<span style="margin-left: 46%;"><h3>Влез:</h3></span><br><br>
	<div class="content">

	<form action="loginview.php" method="post">
		<h4>
		<label for=username>Име:</label>
		<input type="text" name="username"><br>

		<label for="passw">Парола:</label>
		<input type="password" name="passw"><br>

		<label></label>
		<center><input type="submit" value="Влизане"></center>

		
		</h4>


	</form>
	</div>
</div>
</body>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cookbook";

include 'dbcon.php';//connect to Db

if (isset($_POST['username'])|isset($_POST['passw'])){
	$usern=$_POST['username'];
	$passw=$_POST['passw'];



$sql = "SELECT * FROM users WHERE username = '$usern' AND passw = '$passw'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$_SESSION['login']="TRUE";
	$_SESSION['firstn']=$row["firstn"];
	$_SESSION['lastn']=$row["lastn"];
	$_SESSION['userid']=$row["aa"];
	header("Location: index.php");

	
}else{
	?>
	<center><h3>
			<?php echo "Грешно име или парола!";?>
		</h3></center>
	<?php
	
}
}
$conn->close();


?>
