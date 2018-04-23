<html>
<head>
<title>Регистрация</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
	<?php include 'menu.php';?>
	<div class="content">
	<form action="regdb.php" method="post">
		<label for="firstn">Име:</label>
		<input type="text" name="firstn" required><br>

		<label for="lastn">Фамилно име:</label>
		<input type="text" name="lastn" required><br>

		<label for="email">Имейл:</label>
		<input type="text" name="email" required><br>

		<label for=username>Потребителско име:</label>
		<input type="text" name="username" required><br>

		<label for="passw">Парола:</label>
		<input type="password" name="passw" required><br><br>

		<span style="margin-left: 360px;"><input type="submit" value="Регистриране"></span>
	</form>
	</div>


</div>
</body>
</html>
