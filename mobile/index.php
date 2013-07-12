<?php include "includes/header.php";?>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>


<?php include "js/iscroll_function.php";?>
<style>
body{
	background:#8ed6ed;
	padding-top:0;
}

.control-label{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	font-size:17px;
	text-transform:uppercase;
	/*text-shadow:5px 5px 10px #000000;*/
	color:#FFF;
}
.fileupload-new{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
}




</style>

<?php

$error = '';
$name = $ufirst;
$lastname = $ulast;
$dob = $dob;
$address = $_SESSION['country'];
$email = $uemail;
$phone = '';


$dbs = "SELECT * FROM users WHERE fb_id = '{$_SESSION['uid']}'";
$extractx = mysql_query ($dbs);
$numrows = mysql_num_rows ($extractx);

if($numrows == 0)
{
	$date = date("Y-m-d");
	$write = mysql_query("INSERT INTO users VALUES ('','{$_SESSION['uid']}','$uname','$uemail','$dob','$date')");
}

include "php/submit.php";


if(isset($_GET['form']) == 'sent')
{
	echo "<script>alert('Form sent successfully');</script>";
}
?>
    
  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
<div  class="app-nav hidden-desktop" id="leftmenu" style="height:0px; overflow:hidden">

<div id="wrappers">
	<div id="scrollers">
		
        
    <ul class="nav">
      <li style="background-color:#666666;">
       <a href="index.php" class="top_menu0"><img style="width:25px" src="images/icons/home.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">HOME</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="play.php"><img style="width:25px" src="images/icons/prizes.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">PLAY</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="vote.php"><img style="width:25px" src="images/icons/vote.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">VOTE</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="#prizes" role="button" data-toggle="modal"><img style="width:25px" src="images/icons/prizes.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">PRIZES</span></a>
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
        
          
    <div id="animated" style="position:relative;" class="navbar navbar-inverse navbar-fixed-top">
      <div style="background-color:transparent !important; background-image:none !important">
        <div class="container" style=" background-image:url(images/header.png) !important; background-repeat:repeat-x;  width:100% !important">
          <button type="button" class="mobile-nav hidden-desktop" style="padding: 7px 8px 3px 8px;float: left; clear:both; background-image:url(images/menu_button.png); background-color:transparent; border:none; width:42px; height:30px; margin-top:5px; margin-left:5px" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand visible-tablet visible-desktop" style="float:right" target="_blank" href="https://www.facebook.com/bbacbank"><img src="images/logo_m.png">&nbsp;&nbsp;</a>
          
         <table style="margin-top:-5px"  align="center"><Tr><Td><a class="brand visible-phone" target="_blank" href="https://www.facebook.com/bbacbank">
          <img src="images/logo_m.png">&nbsp;&nbsp;</a></Td></Tr></table>
          
          <div class="nav-collapse collapse visible-desktop">
            <ul class="nav">
              <li>
               <a class="top_menu" href="index.php">HOME</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <a class="top_menu" href="play.php">PLAY</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <a class="top_menu" href="vote.php">VOTE</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <a class="top_menu" href="#prizes" role="button" data-toggle="modal">PRIZES</a>
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


<div id="wrapper" style="background-color:#1d2533">
	<div id="scroller">
		<div id="pullDown">
			
		</div>
        
        <table align="center" border="0" style="position:absolute; z-index:-1; width:100%"><tr><Td align="center"><img src="images/Home_bkg.png" ></Td></tr></table>
<header id="overview">
  <div class="container" style="text-align:center;">
    <h1><iframe width="auto" src="//www.youtube.com/embed/_J-w3_NWY_I" frameborder="0" allowfullscreen></iframe></h1>
   
  </div>
</header>

<header id="overview">
  <div class="container" id="styling_space" onClick="redirect()">
    <h1>&nbsp;</h1>
  </div>
</header>
<script>
function redirect()
{
	window.location = 'http://www.bbacbank.com/banking/personal/card/mazroukeh-credit-card-summer-promotion';
}
</script>

<style>
.span2{
	background-color:#59a7c7 !important;
	border:none !important;
}
</style>

<div class="container">
    <div class="row">
        <div class="span12" style="text-align:center"><table align="center" style="max-width:480px; width:50%"><Tr><Td align="center"><img onClick="click_form()" style="cursor:pointer" src="images/btn_apply.png"></Td><Td align="center"><img onClick="window.location='play.php'" style="cursor:pointer" src="images/btn_skip.png"></Td></Tr></table></div>
    </div>
</div>

  <div class="container" id="forms" style="display:none">

    <!-- Docs nav
    ================================================== -->
    <table  align="center" border="0"><Tr><Td><div class="row">
   
   
      <div class="span9" style="width:auto" id="aplication">
			
           

          <form class="form-horizontal" action="index.php" method="post">
          
          <div class="control-group">
	          <div class="span4">&nbsp;</div>
          </div>
          
          <div class="control-group">
	          <div id="div_error" class="span4" style="text-align:center"><span id="error"></span></div>
          </div>
          
            <div class="control-group">            
              <label class="control-label" for="name" style="line-height: 8px;">First Name</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="name" id="name" type="text" placeholder="FIRST NAME" value="<?php echo $name;?>">
                </div>
              </div>
               <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">            
              <label class="control-label" for="lastname" style="line-height: 8px;">Last Name</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="lastname" id="lastname" type="text" placeholder="LAST NAME" value="<?php echo $lastname;?>">
                </div>
              </div>
               <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">            
              <label class="control-label" for="dob" style="line-height: 8px;">date of birth</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="dob" id="dob" type="text" placeholder="DATE OF BIRTH" value="<?php echo $dob;?>">
                </div>
              </div>
               <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">            
              <label class="control-label" for="address" style="line-height: 8px;">address</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="address" id="address" type="text" placeholder="ADDRESS" value="<?php echo $address;?>">
                </div>
              </div>
               <label style="line-height: 8px;">&nbsp;</label>
            </div>
                    
             <div class="control-group">
              <label class="control-label" for="email" style="line-height: 8px;">EMAIL</label>
              <div class="controls">
                <div class="input-prepend">
                 <input class="span2" name="email" id="email" type="text" placeholder="EMAIL" value="<?php echo $email;?>">
                </div>
              </div>
              <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">
              <label class="control-label" for="phone" style="line-height: 8px;">PHONE NUMBER</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="phone" id="phone" type="text" placeholder="PHONE" value="<?php echo $phone;?>">

                </div>
              </div>
              <label style="line-height: 8px;">&nbsp;</label>
            </div>

            
             <div class="control-group">
          
              <div class="controls">
                <div class="input-prepend" style="text-align:center">
                  <input for="inputIcon" style="background-image:url(images/submit.png); border:none; width:59px; height:59px; background-color:transparent" type="submit" value="" id="submit" name="submit_poll">
                </div>
              </div>
            </div>
          </form>


      </div>
    </div>
</Td></Tr></table>
  </div>


<div id="pullUp">
			
		</div>
	</div>
</div>


<div id="prizes" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <img data-dismiss="modal" aria-hidden="true" src="images/prizes.png">
</div>


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

function click_form()
{
	
	$("#forms").css({"display":"block"});
	myScroll.refresh();
}



$("#submit").click(function(){

	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	
	if( $("#name").val() == '')
	{
		alert("Please enter your name");
		return false;
	}
	if( $("#lastname").val() == '')
	{
		alert("Please enter your lastname");
		return false;
	}
	
	if( $("#dob").val() == '')
	{
		alert("Please enter your date of birth");
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
	
});

</script>    

<?php include "js/menu_animation.php";?>

<?php
	include "includes/close.php";
?>
   
  </body>
</html>
