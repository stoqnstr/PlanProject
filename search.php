<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
<title>Search results</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="clearfix main">
	<?php include 'menu.php';?>
	<div class="content ">
		<br><h3><center>Намерени резултати</center></h3><br><hr>
		<?php
		$search_ing1 = $_POST['s_ing1'];
		//connect to Db
		include 'dbcon.php';
		$sql = "SELECT * FROM recipes WHERE MATCH (ingr1) AGAINST ('$search_ing1') AND del_rec = 0";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {  
    		while($row = $result->fetch_assoc()) {
    			$id = $row["aa"];
      			$img_id = $row["image_id"];
		?>
		<br>
		<div class="linkStyle cent" style="margin-left: 75px;">
			<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:100px;height:65px;vertical-align: middle;"><?php echo $row["name"];?></a> 
			<br><br><hr>
		</div>
		<?php    
    		}//end while  
		}else {
		?>
		<center>Няма рецепти.</center>
		<?php   
		}
		$conn->close();
	?>
	</div>
</div>
</body>
</html>