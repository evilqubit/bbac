<?php session_start();?>
<?php include "connect.php";?>
<?php
$_SESSION['uid'] = '';
$_SESSION['country'] = '';
?>
<html>
<head>
<title>BBAC</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->
<link href="css/style.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jQueryRotate.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.ui.core.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.ui.resizable.css" />


<script>

function afcard(){

var name = $('#name').val();
var lastname = $('#lastname').val();
var dob = $('#dob').val();
var address = $('#address').val();
var email = $('#email').val();
var phone = $('#phone').val();

	$.post("php/submit.php", { name: name, lastname: lastname, dob: dob, address: address, email: email, phone: phone }, function(data) {

		if(data == 1)
		{
			$('#error').html('Form sent successfully!');
			$('#name').val('');
			$('#lastname').val('');
			$('#dob').val('');
			$('#address').val('');
			$('#email').val('');
			$('#phone').val('');
		}
	});
	
}
</script>

</head>

<body>

<div id="Gaia">