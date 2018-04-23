<?php
include 'dbcon.php';
$del_id = $_POST['id'];
$sql = "UPDATE recipes SET del_rec=1 WHERE aa=$del_id";//just not showing the ones with del_rec=1
$conn->query($sql);
$conn->close();
header("location:index.php");
?>