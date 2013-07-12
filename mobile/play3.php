<?php
session_start();
include "includes/connect.php";

if (!isset($_SESSION['image']) || ($_SESSION['image'] == ''))
{
	echo "<script>document.location.replace('play.php');</script>";
}

if(isset($_POST['submit_save']))
{
	//$rotating = $_POST['rotating'] - 9.3;
	
	$ofsetx = $_POST['ofsetx'];
	$ofsety = $_POST['ofsety'];
	$widthPos = $_POST['widthPos'];
	$heightPos = $_POST['heightPos'];
	
	$target_path = "../app/gallerys/files/thumbnail/" . $_SESSION['image'];
	$target_path_t = "../app/gallerys/files/thumbnail/t/". $_SESSION['image'];
	
	include "php/thumb_resize.php";
	
	# URL's from the web
	$board_url = "images/blank.jpg";
	$printer_url = $target_path_t;
	
	# read files
	$board_blob = file_get_contents("$board_url");
	$printer_blob = file_get_contents("$printer_url");
	
	# create new image objects
	$board = new imagick();
	$printer = new imagick();
	
	# read blobs
	$board->readImageBlob("$board_blob");
	$printer->readImageBlob("$printer_blob");
	
	# composite
	$board->compositeImage($printer, imagick::COMPOSITE_ATOP, $ofsetx , $ofsety);
	//$board->rotateImage(new ImagickPixel('none'),$rotating);
	
	# write composited image
	$board->writeImage ($target_path_t);
	
	# you can also send image to the browser
	//header("Content-type: image/png");
	



	# URL's from the web
	$board_url = $target_path_t;
	$printer_url = "images/background/".$_SESSION['thumb_name'];
	
	
	
	# read files
	$board_blob = file_get_contents("$board_url");
	$printer_blob = file_get_contents("$printer_url");
	
	# create new image objects
	$board = new imagick();
	$printer = new imagick();
	
	# read blobs
	$board->readImageBlob("$board_blob");
	$printer->readImageBlob("$printer_blob");
	
	# composite
	$board->compositeImage($printer, imagick::COMPOSITE_ATOP, 0, 0);

	# write composited image
	$board->writeImage ($target_path_t);
	
	# you can also send image to the browser
	//header("Content-type: image/png");
	
	//echo $board;
	$date = date("Y-m-d H:m:s", strtotime("+8 hours"));
	
	$board_url = str_replace("../app/", "", $board_url);
	
	$write = "INSERT INTO participants VALUES ('','{$_SESSION['uid']}','{$_SESSION['name']}','{$_SESSION['email']}','{$_SESSION['dob']}','{$_SESSION['gender']}','{$_SESSION['country']}','$board_url','$date','0','0','{$_SESSION['latitude']}','{$_SESSION['longitude']}')";
	
	mysql_query($write);
	
	unlink('../app/gallery/'.$_SESSION['image']);
	
	mysql_close($res1);
	unset($_SESSION['image']);
	unset($_SESSION['myimg_type']);
	$_SESSION = array();
	session_destroy();
	
	
	echo "<script>document.location.replace('thankyou.php');</script>";
}
else
{
	echo "<script>document.location.replace('play.php');</script>";
}
?>