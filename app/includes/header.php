<?php session_start();?>
<?php include "include.php";?>

<?php
include_once('ip2country.php');
$ip2c=new ip2country();
$ip2c->mysql_host='localhost';
$ip2c->db_user='yasserc_total';
$ip2c->db_pass='a123456789b';
$ip2c->db_name='yasserc_total';
$ip2c->table_name='ip2c';

$_SESSION['country'] = $ip2c->get_country_name();
//$ip2c->get_country_code();
?>
<?php include "connect.php";?>
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

function next_gallery(){
	$.post("php/next.php", function(data) {
		if(data != 0)
		{
			$('#vote_body').html(data);
		}
	});
}
function previous_gallery(){
	$.post("php/previous.php", function(data) {
		if(data != 0)
		{
			$('#vote_body').html(data);
		}
	});
}

</script>

<script type="text/javascript">
window.fbAsyncInit = function() {
FB.Canvas.setSize();
}
// Do things that will sometimes call sizeChangeCallback()
function sizeChangeCallback() {
FB.Canvas.setSize();
}
</script>
</head>

<body>

<div id="Gaia">
<div id="fb-root"></div> 
<script src="//connect.facebook.net/en_US/all.js"></script> 
<script> FB.init({ appId : '179080638921235',
status : true, // check login status 
cookie : true, // enable cookies to allow the server to access the session
xfbml : true// parse XFBML 
}); FB.Canvas.setAutoResize(7); </script>