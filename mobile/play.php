<?php include "includes/header.php";?>
<?php include "php/submit_play.php";?>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>



<?php include "js/iscroll_function.php";?>
<style>
html { 
  background: url(images/play_bkg.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body{
	/*background:#8ed6ed;*/
	padding-top:0;
}

.control-label{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	font-size:18px;
	text-transform:uppercase;
	/*text-shadow:5px 5px 10px #000000;*/
	color:#014289;
}
.fileupload-new{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
}




</style>

<?php

$dbs = "SELECT * FROM participants WHERE fb_id = '{$_SESSION['uid']}'";
$extractx = mysql_query ($dbs);
$numrows = mysql_num_rows ($extractx);

if($numrows > 0)
{
	echo "<script>document.location.replace('vote.php');</script>";
}

?>
    
  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
<div  class="app-nav hidden-desktop" id="leftmenu" style="height:0px; overflow:hidden">

<div id="wrappers">
	<div id="scrollers">
		
        
    <ul class="nav">
      <li>
       <a href="index.php" class="top_menu0" ><img style="width:25px" src="images/icons/home.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">HOME</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li style="background-color:#666666;">
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
          
          <table style="margin-top:-5px" align="center"><Tr><Td><a class="brand visible-phone" target="_blank" href="https://www.facebook.com/bbacbank">
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


<div id="wrapper">
	<div id="scroller">
		<div id="pullDown">
			
		</div>
        
       <!-- <table align="center" border="0" style="position:absolute; z-index:-1; width:100%"><tr><Td align="center"><img src="images/play_bkg.png" ></Td></tr></table>-->





<style>
.span2{
	background-color:#59a7c7 !important;
	border:none !important;
}
.fillout_pic_choose{
	cursor:pointer;
	opacity: 0.3;
}
</style>



  <div class="container" id="forms">

    <!-- Docs nav
    ================================================== -->
    <table  align="center" border="0"><Tr><Td><div class="row">
   
   
      <div class="span9" style="width:auto" id="aplication">
			
           

          <form class="form-horizontal" action="play.php" method="post" enctype="multipart/form-data">
          
          <div class="control-group">
	          <div class="span4">&nbsp;</div>
          </div>
          
          <div class="control-group">
	          <div id="div_error" class="span4" style="text-align:center"><span id="error"></span></div>
          </div>
          
            <div class="control-group">            
              <label class="control-label" for="name" style="line-height: 8px;">Full Name</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="name" id="name" type="text" placeholder="NAME" value="<?php echo $name;?>">
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
              <label class="control-label" for="dob" style="line-height: 8px;">date of birth</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="dob" id="dob" type="text" placeholder="DATE OF BIRTH" value="<?php echo $dob;?>">
                </div>
              </div>
               <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">            
              <label class="control-label" for="gender" style="line-height: 8px;">gender</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="gender" id="gender" type="text" placeholder="GENDER" value="<?php echo $gender;?>">
                </div>
              </div>
               <label style="line-height: 8px;">&nbsp;</label>
            </div>
            
             <div class="control-group">            
              <label class="control-label fillout_pic_choose" id="thumb1" style="line-height: 8px;"><img src="images/thumb1.png"></label>
                       
              <label class="control-label fillout_pic_choose" id="thumb2" style="line-height: 8px;"><img src="images/thumb2.png"></label>
            </div>
            
             <div class="control-group">            
              <label class="control-label fillout_pic_choose" id="thumb3" style="line-height: 8px;"><img src="images/thumb3.png"></label>
                   
              <label class="control-label fillout_pic_choose" id="thumb4" style="line-height: 8px;"><img src="images/thumb4.png"></label>
               <input type="hidden" value="" id="thumb_name" name="thumb_name"/>
               <input type="hidden" value="" id="latitude" name="latitude"/>
      		 <input type="hidden" value="" id="longitude" name="longitude"/>
            </div>
            
             <div>
             	<!--<input type="file" name="image" id="choose_file">-->
                
                <span class="btn btn-success fileinput-button">
                <i class="icon-plus icon-white"></i>
                <span>Select files...</span>
                <!-- The file input field used as target for the file upload widget -->
                <input id="fileupload" type="file" name="files[]" multiple>
            </span><img style="position:absolute; margin-left: 6px; margin-top: 6px; display:none" id="loader" src="images/loader.gif">
            <br>
            <br>
            <!-- The global progress bar -->
            <div id="progress" class="progress progress-success progress-striped">
                <div class="bar"></div>
            </div>
            <!-- The container for the uploaded files -->
            <input type="hidden" value="" id="myimg" name="myimg">
            <input type="hidden" value="" id="mytype" name="mytype">
    
            </div>
            
            <div class="control-group" style="text-align:center">
             	<input type="submit" value="" name="continue_submit" id="submit_poll" style="background-image:url(images/continue.png); border:none; width:230px; height:33px;">
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



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : '../app/gallerys/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
				$("#myimg").val(file.name);
				$("#mytype").val(file.type);
				$("#loader").css({"display":"none"});
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
			
			$("#loader").css({"display":"block"});
			
            $('#progress .bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/js/widgets.js"></script>
    
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

$(".fillout_pic_choose").click(function(){
	
	var img_on = $("#thumb_name").val();
	
	if(img_on != '')
	{
		$("#"+img_on).css({"opacity" : 0.3,
							"filter" : "alpha(opacity=40)"
		});
	}
	$("#thumb_name").val($(this).attr("id"));
	$(this).css({"opacity" : 1,
				"filter" : "alpha(opacity=100)"
	});
});

$("#submit_poll").click(function(){

	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	
	if( $("#name").val() == '')
	{
		alert("Please enter your full name");
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
	
	if($("#gender").val() == '')
	{
		alert("Enter your gender");
		return false;
	}
	if($("#thumb_name").val() == '')
	{
		alert("Choose your background");
		return false;
	}
	
	if($("#choose_file").val() == '')
	{
		alert("Choose your image");
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
