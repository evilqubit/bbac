<?php include "includes/header.php";?>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>


<?php include "js/iscroll_function.php";?>
<style>
body{
	background:#233647;
	padding-top:0;
  min-height: 1201px;
}

.control-label{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	font-size:18px;
	text-transform:uppercase;
	/*text-shadow:5px 5px 10px #000000;*/
	color:#FFF;
}
.fileupload-new{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
}





</style>

<?php

// $error = '';
// $name = $uname;
// $age = '';
// $email = $uemail;
// $address = $_SESSION['country'];
// $phone = '';


// $dbs = "SELECT * FROM users WHERE fb_id = '{$_SESSION['uid']}'";
// $extractx = mysql_query ($dbs);
// $numrows = mysql_num_rows ($extractx);

// if($numrows == 0)
// {
// 	$date = date("Y-m-d");
// 	$write = mysql_query("INSERT INTO users VALUES ('','{$_SESSION['uid']}','$uname','$uemail','$dob','$date')");
// }

// $dbs = "SELECT * FROM participants WHERE fb_id = '{$_SESSION['uid']}'";
// $extractx = mysql_query ($dbs);
// $numrows = mysql_num_rows ($extractx);

// if($numrows > 0)
// {
// 	//echo "<script>document.location.replace('vote.php');</script>";
// }
// else
// {
// 	include "php/submit.php";
// }
?>
    
  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
<div  class="app-nav hidden-desktop" id="leftmenu" style="height:0px; overflow:hidden">

<div id="wrappers">

	<div id="scrollers">
		
        
    <ul class="nav">
      <li>
       <a href="#prizes" class="top_menu0" role="button" data-toggle="modal"><img style="width:25px" src="images/icons/prizes.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">PRIZES</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li style="background-color:#666666;">
        <a class="top_menu0" href="index.php"><img style="width:25px" src="images/icons/home.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">GO TO HOMEPAGE</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="vote.php"><img style="width:25px" src="images/icons/vote.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">VOTE</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="tc.php"><img style="width:25px" src="images/icons/terms-and-conditions.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">TERMS AND CONDITIONS</span></a>
      </li>
      
   

	<li>&nbsp;</li><li>&nbsp;</li>
      <li style="line-height:30px">
       <a href="#" id="sig" style="text-align:right; color:#999">BBAC &copy; 2013&nbsp;&nbsp;</a>
      </li>
    </ul>
    
  </div>
</div>


</div>
        
          
    <div id="animated" style="position:relative" class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="mobile-nav btn btn-navbar test" style="padding: 8px 17px 11px 17px; margin-top: 12px;float: left; clear:both;" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    



          
          <div class="navlogo">
          <a class="visible-phone" style="float:right" target="_blank" href="https://www.facebook.com/">
            <img style="width:100px" src="images/logo.png"></a></div>
          
          <div class="nav-collapse collapse visible-desktop">
            <ul class="nav">
              <li>
               <a class="top_menu" href="#prizes" role="button" data-toggle="modal">PRIZES</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <a class="top_menu" href="index.php">GO TO HOMEPAGE</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <a class="top_menu" href="vote.php">VOTE</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <a class="top_menu" href="tc.php">TERMS AND CONDITIONS</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
            
            </ul>
          </div>
          
          
            
            
        </div>
      </div>
    </div>

<!-- Subhead
================================================== -->


<div id="wrapper">
  <div class="topdiv">
	<div id="scroller">
		<div id="pullDown">
			
		</div>
        
        



  <div class="container">
   
<div id="video"><iframe width="560" height="315" src="//www.youtube.com/embed/_J-w3_NWY_I?autoplay=1" frameborder="0" allowfullscreen=""></iframe></div>

</div>



  </div>



	</div>



<div class="middiv">
<div class="row-fluid">

 <div class="span6">  
<div class="button" id="apply_card" style="box-shadow: rgb(178, 237, 250) 0px 0px 0px;"></div>
  </div>
  <div class="span6"> 
<div class="button" id="skip_play" style="box-shadow: rgb(178, 237, 250) 0px 0px 0px;"></div>
</div>
</div>
</div>



<div class="bottomdiv row-fluid">

<div class="fluid12">

 <div id="error"></div>

<div id="bottom_form">
  <div id="bottom_form_table">
      <table border="0" style="position:absolute">
        <Tr><Td class="form_name">first name</Td><Td rowspan="11" style="width:3px"></Td><Td><input class="form_input" type="text" value="<?php echo $name;?>" id="name" name="name" /></Td></Tr>
        <tr><Td colspan="2" style="height:2px"></Td></tr>
        <Tr><Td class="form_name">last name</Td><Td><input class="form_input" type="text" value="<?php echo $lastname;?>" id="lastname" name="lastname" /></Td></Tr>
        <tr><Td colspan="2" style="height:3px"></Td></tr>
        <Tr><Td class="form_name">date of brith</Td><Td><input class="form_input" type="text" value="<?php echo $dob;?>" id="dob" name="dob"/></Td></Tr>
        <tr><Td colspan="2" style="height:4px"></Td></tr>
        <Tr><Td class="form_name">address</Td><Td><input class="form_input" type="text" value="<?php echo $address;?>" id="address" name="address"/></Td></Tr>
        <tr><Td colspan="2" style="height:2px"></Td></tr>
        <Tr><Td class="form_name">email</Td><Td><input class="form_input" type="text" value="<?php echo $email;?>" id="email" name="email"/></Td></Tr>
        <tr><Td colspan="2" style="height:3px"></Td></tr>
        <Tr><Td class="form_name">phone number</Td><Td><input class="form_input" type="text" value="<?php echo $phone;?>" id="phone" name="phone"/></Td></Tr>
        </table>
        
        <div id="submit"><input type="submit" value="" id="submit_btn" name="submit_btn"/></div>
    </div>
    
</div>

</div>
</div>





</div>
</div>

<input type="hidden" value="" id="clicks"/>



<div id="pullUp">
      
    </div>
  </div>
</div>


<div id="prizes" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <img data-dismiss="modal" aria-hidden="true" src="images/prize.png">
</div>

<script>
$(".button").hover(function(){
  $(this).css({"box-shadow": "0 0 10px #b2edfa"}); 
},function(){
  $(this).css({"box-shadow": "0 0 0 #b2edfa"});
});

$("#apply_card").click(function(){
  var clicks = $("#clicks").val();
  if(clicks == '')
  {
    $("#error").html("");
    $("#footer1").animate({"margin-top":1065},500);
    $('#bottom_form').slideDown('slow',function(){
      $("#bottom_form_table").css({"display":"block"});
    });
    $("#clicks").val(1);
  }
  else
  {
    $("#error").html("");
    $("#footer2").css({"display":"none"});
    $("#bottom_form_table").css({"display":"none"});
    $("#footer1").animate({"margin-top":806},600);
    $('#bottom_form').slideUp('slow', function(){
      $("#footer1").css({"display":"block"});
    });
    
    $("#clicks").val('');
  }
});

var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

$("#submit_btn").click(function(){
  
  if($("#name").val() == '')
  {
    $("#name").focus();
    $("#error").html("Enter your name");
    return false;
  }
  
  if($("#lastname").val() == '')
  {
    $("#lastname").focus();
    $("#error").html("Enter your lastname");
    return false;
  }
  
  if($("#dob").val() == '')
  {
    $("#dob").focus();
    $("#error").html("Enter your date of birth");
    return false;
  }
  
  if($("#address").val() == '')
  {
    $("#address").focus();
    $("#error").html("Enter your address");
    return false;
  }
  
  if($("#email").val() == '')
  {
    $("#email").focus();
    $("#error").html("Enter your email");
    return false;
  }
  
   if ($("#email").val().search(emailRegEx) == -1)
   {
    $("#email").focus();
    $("#error").html("Enter a valid email");
    return false;
     }
  
  if($("#phone").val() == '')
  {
    $("#phone").focus();
    $("#error").html("Enter your phone");
    return false;
  }
  
  if (isNaN( $("#phone").val() ))
  {
    $("#phone").focus();
    $("#error").html("Only numbers");
    $("#phone").val("");
    return false;
  }
  
  afcard();
  
  
});
</script>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/js/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    
    
     <script src="assets/js/bootstrap-fileupload.js"></script>
    <script src="assets/js/bootstrap-fileupload.min.js"></script>
    
    <script src="assets/js/bootstrap-lightbox.js"></script>
    <script src="assets/js/bootstrap-lightbox.min.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>


    <!-- Analytics
    ================================================== -->
    <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>
    
    
<script>

$(window).ready(function(e) {
	if (navigator.geolocation)
	{
		navigator.geolocation.watchPosition(showPosition);
	}
	else{}
});


function showPosition(position)
{
	$("#latitude").val(position.coords.latitude);
	$("#longitude").val(position.coords.longitude);
}

$("#submit").click(function(){

	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	
	if( $("#name").val() == '')
	{
		alert("Please enter your name");
		return false;
	}
	
	if( $("#email").val() == '')
	{
		alert("Please enter your email");
		return false;
	}
	
	 if ($("#email").val().search(emailRegEx) == -1)
	 {
		alert("Please enter valid email address");
		return false;
     }
  
	if( $("#address").val() == '')
	{
		alert("Please enter your address");
		return false;
	}
	
	if (isNaN( $("#phone").val() ))
	{
		alert("Phone number can be only numbers");
		return false;
	}
	
	if( $("#image").val() == '')
	{
		alert("Please upload your image");
		return false;
	}
});

</script>    

<?php include "js/menu_animation.php";?>

<?php
	include "includes/close.php";
?>
   
  </body>
</html>
