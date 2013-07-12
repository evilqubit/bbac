<?php

if (isset($_POST['approve']))
{
	$update = mysql_query ("UPDATE afcard SET status = '1' WHERE id= '$user'");
	$done = 1;
}

?>