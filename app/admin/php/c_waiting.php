<?php

if (isset($_POST['waiting']))
{
	$update = mysql_query ("UPDATE afcard SET status = '0' WHERE id= '$user'");
	$done = 0;	
}

?>