<div class="nav">	
	<ul>
 		<li><a href="index.php">Начало</a></li>
 		<li><a href="categories.php">Категории</a></li>
  		<li><a href="addrecipe.php">Добави рецепта</a></li>
  		<li><a href="searchview.php">Търсене</a></li>

  	</ul>	
</div>
<div style="float:right;margin-right:20px;">
	<?php 
	if (isset($_SESSION['firstn'])){
	?>Здравей, <?php echo $_SESSION['firstn'] ." ". $_SESSION['lastn'];
	}else{?>Влизането неуспешно.<?php
	}
	?>
</div>
<br>
<div class="linkstyle" style="float:right; margin-right:20px;">
<h4>
<?php
	if (isset($_SESSION['login'])){
		echo "<a href=\"myrecipes.php\"><h3><u>Мои рецепти</u></h3></a><br><br>";
		echo "<a href=\"logout.php\">Излез</a>";
	}else{
		echo "<a href=\"loginview.php\">Влез</a>";
	}
?>
<br>

<?php
	if (!isset($_SESSION['login'])){?>
	<hr>
	<span class="linkStyle" style="text-align: center;"><a href="register.php">Регистрация</a></span>
<?php 
}?>
</h4>
</div>
