<?php
	include 'db.php';



	$sql = "SELECT * FROM cliente";

?>
<?php

	$id = $_GET['id'];
	$sql = mysql_query("DELETE FROM cliente WHERE id=".$id);
	header("Location: http://localhost/crud/templates/lista.php");

?>
