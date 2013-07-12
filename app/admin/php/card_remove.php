<?php


if(isset($_POST['remove_card']))
{
	$user = $_POST['user'];
	
	$dbs = "DELETE FROM afcard WHERE id = '$user' ";
	$extractx = mysql_query ($dbs);
	
	$remove = 1;
}

?>