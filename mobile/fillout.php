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
	font-size:18px;
	text-transform:uppercase;
	/*text-shadow:5px 5px 10px #000000;*/
	color:#FFF;
}
.fileupload-new{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
}
#wrapper{


background-image: url(images/bg.jpg) !important;

}




</style>

<?php

// $error = '';
// $name = $uname;
// $age = '';
// $email = $uemail;
// $dob = $_SESSION['country'];
// $gender = '';


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
       <a href="#" id="sig" style="text-align:right; color:#999">Total &copy; 2013&nbsp;&nbsp;</a>
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
	<div id="scroller">
		<div id="pullDown">
			
		</div>
        
        
<header id="overview" class="visible-tablet visible-desktop">
  <div class="container" style="text-align:center">
    <h1><img src="images/logo.png"></h1>
   
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <table align="center" width="90%" border="0" style="margin: 0 auto"><Tr><Td>


      <div class="row-fluid">
   
   
      <div class="span12" style="width:auto">


          <form class="form-horizontal fillout" action="index.php" method="post" enctype="multipart/form-data">
          
          <div class="control-group">
	          <div class="span4">&nbsp;</div>
          </div>
          
          <div class="control-group">
	          <div id="div_error" class="span4" style="text-align:center"><span id="error"></span></div>
          </div>
          
            <div class="control-group">
            
              <label class="control-label" for="name" style="line-height: 8px;">Full Name</label>
              <br>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="name" id="name" type="text" placeholder="FULL NAME" value="<?php echo $name;?>">
                </div>
              </div>
               <label style="line-height: 8px;">&nbsp;</label>
            </div>
                    
             <div class="control-group">
              <label class="control-label" for="email" style="line-height: 8px;">Email Address</label>
              <div class="controls">
                <div class="input-prepend">
                 <input class="span2" name="email" id="email" type="text" placeholder="EMAIL" value="<?php echo $email;?>">
                </div>
              </div>
              <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">
              <label class="control-label" for="dob" style="line-height: 8px;">Date of Birth</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="dob" id="dob" type="text" placeholder="Date of Birth" value="<?php echo $dob;?>">
                </div>
              </div>
              <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">
              <label class="control-label" for="gender" style="line-height: 8px;">Gender</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="gender" id="gender" type="text" placeholder="gender" value="<?php echo $gender;?>">

                  <input class="span2" name="latitude" id="latitude" type="hidden" value="">
                  <input class="span2" name="longitude" id="longitude" type="hidden" value="">
                </div>
              </div>
              <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
               <div id="fillout_pic">

          <div class="row-fluid">
<div class="span6">
          <div class="fillout_pic_choose span3" id="thumb1"><img src="images/thumb1.png" /></div>
            <div class="fillout_pic_choose span3" id="thumb2"><img src="images/thumb2.png" /></div>

          </div>
        </div>

 <!--  <div class="row-fluid">
            <div class="fillout_pic_choose span8" id="thumb3"><img src="images/thumb3.png" /></div>
            <div class="fillout_pic_choose span8" id="thumb4"><img src="images/thumb4.png" /></div>

          </div> -->
            <input type="hidden" value="" id="thumb_name" name="thumb_name"/>
         </div>


            
             <div class="control-group">
              <label class="control-label" for="inputIcon"></label>
              
               <div class="fileupload fileupload-new" data-provides="fileupload">
  <span class="btn btn-file"><span class="fileupload-new">CHOOSE PHOTO</span><span class="fileupload-exists">Change</span><input type="file" name="image" id="image"/></span>
  <span class="fileupload-preview"></span>
  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
</div>


<label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">
          
              <div class="controls">
                <div class="input-prepend">
                  <input for="inputIcon" class="btn btn-primary" type="submit" value="upload" id="submit" name="submit_poll">
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
 <img data-dismiss="modal" aria-hidden="true" src="images/prize.png">
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
  
	if( $("#dob").val() == '')
	{
		alert("Please enter your Date of Birth");
		return false;
	}
	
	if (isNaN( $("#gender").val() ))
	{
		alert("gender number can be only numbers");
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
