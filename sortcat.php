		<?php
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
    		$id = $row["aa"];
   	 		$img_id = $row["image_id"];

		?>
		<div class="linkStyle" style="display: inline;">
		<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:130px;height:75px;vertical-align: middle;"><h4><?php echo $row["name"];?></h4></a> 
		<br><br>
		</div>
		<?php    
    		}//end while
		}//end if
		else {
		?>
		<center>0 Рецепти.</center>
		<?php
		}
		$conn->close();
		?>