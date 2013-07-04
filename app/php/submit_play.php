<?php

$error = '';

$name = '';
$age = '';
$email = '';
$dob = '';
$gender = '';
	
	
if(isset($_POST['continue_submit']))
{
	$_SESSION['name'] = addslashes($_POST['name']);
	$_SESSION['email'] = addslashes($_POST['email']);
	$_SESSION['dob'] = addslashes($_POST['dob']);
	$_SESSION['gender'] = addslashes($_POST['gender']);

	$target_paths = "gallery/";
	$target_path_t = "gallery/t/";


if(($_FILES['image']['type'] == 'image/jpeg')
|| ($_FILES['image']['type'] == 'image/pjpeg')
|| ($_FILES['image']['type'] == 'image/png')
|| ($_FILES['image']['type'] == 'image/gif'))
{
	$maxSize = 10000000; 
	$uploadSize = $_FILES['image']['size'];

	$type = basename( $_FILES['image']['name']);
	$one = substr($type, -3);
	$dates = date('YmdHis',strtotime('+2 hour'));
	$target_path = $target_paths .$dates .'.' . $one;
	$target_path_t = $target_path_t .$dates .'.' . $one;
	
	if ($uploadSize <= $maxSize)
	
	{
		if (basename($_FILES['image']['name']) != '')
		{
			
				$_SESSION['image'] = $dates .'.' . $one;
							
				if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) 
				{
					include "thumb.php";
					
					/*$write = mysql_query("INSERT INTO participants VALUES ('','$uid','$name','$age','$email','$address','{$_SESSION['country']}','$phone','$image','$date','1','0','$latitude','$longitude')");
					
					$image = $config['baseurl'] .'gallery/t/' . $image;
					
					$facebook->api("/me/feed", "post", array(
					message => 'I Just voted for this image',
					picture=>  $image,
					link => $config['appbaseurl'],
					name => "Total"
					));*/
			
					echo "<script>document.location.replace('play2.php');</script>";
					
				exit;
				} 
				else
				{
					$error = 'error while uploading, please try again!';
				}
		}
		else
		{
			$error = 'Please upload your image';
		}
	}
	else
	{
		$error = 'image should not exceed 10 MB';
	}
	}
	
	else
	{
		$error = 'Image type can be only jpg, png or gif';
	}
}
?>