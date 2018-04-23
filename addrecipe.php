<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");
}
?>
<html>

<head>
<title>Добавяне на рецепта</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
	<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		var i=1;
		function addIngr()
		{
			if (i<=15)
			{
				i++;
				var div = document.createElement('div');
				div.innerHTML = ' <input type="text" name="ingr'+i+'" placeholder="'+i+'" ><input type="button" value="-" onclick="removeIngr(this)">';
				document.getElementById('ingrs').appendChild(div);

			}
		}
		function removeIngr(div)
		{	
    	document.getElementById('ingrs').removeChild( div.parentNode );
		i--;
		}
		
	</script>
</head>
<body>
<div class="main">
	<?php include 'menu.php';?>
	<form action="addDB.php" method="post" enctype="multipart/form-data">
	<div class="content  ">
		<br><h3><center>Добави рецепта</center></h3><br><hr><br>
		<h4>Име на рецепта: <input type="text" name="name" required></h4><br><br>
		<h4>Категория:
		<select name="category" required>
  			<option value="">Избери...</option>
  			<option value="Основно ястие">Основно ястие</option>
  			<option value="Аперетив">Аперетив</option>
  			<option value="Салата">Салата</option>
  			<option value="Десерт">Десерт</option>
		</select>
		</p>Време за приготвяне: <input type="tel" name="time" style="width: 30px;" pattern="[0-9]{1,3}"  maxlength="3" required> минути.<br></h4>
		<div class="  con1"><br>
			Инструкци за приготвяне:
		​	<textarea id="steps" rows="20" cols="50" name="instr" fixed required></textarea><br>
		<input type="button" id="loadFile" value="Добави снимка" onclick="document.getElementById('file').click();" />
		<input type="file" style="display:none;" id="file" name="file"/>

			<input type="submit" value="Запази">
		</div>
		<div class=" con2">
			Съставка:
			<input type="button" id="add_ingr()" onclick="addIngr()" value=" + "> 
			<br>
				<div id=ingrs>
				<input type="text" name="ingr1" placeholder="1" required> 
			</div>
		</div>
	</div>
	</form>
</div>
<body>
</html>