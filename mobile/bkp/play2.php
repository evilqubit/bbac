<?php include "includes/header.php";?>
<?php 
if (!isset($_SESSION['image']) || ($_SESSION['image'] == ''))
{
	echo "<script>document.location.replace('play.php');</script>";
}
?>
<?php include "php/submit_play.php";?>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>


<?php include "js/iscroll_function.php";?>
<style>
html { 
  background: url(images/play2.png) no-repeat center center fixed; 
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

    
  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
<div  class="app-nav hidden-desktop" id="leftmenu" style="height:0px; overflow:hidden">

<div id="wrappers">
	<div id="scrollers">
		
        
    <ul class="nav">
      <li>
       <a href="index.php" class="top_menu0"><img style="width:25px" src="images/icons/home.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">HOME</span></a>
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
        <a class="top_menu0" href="#tc" role="button" data-toggle="modal"><img style="width:25px" src="images/icons/terms-and-conditions.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">TERMS AND CONDITIONS</span></a>
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
        <div class="container" style=" background-image:url(images/header.png) !important; background-repeat:repeat-x; width:100% !important">
          <button type="button" class="mobile-nav hidden-desktop" style="padding: 7px 8px 3px 8px;float: left; clear:both; background-image:url(images/menu_button.png); background-color:transparent; border:none; width:42px; height:30px; margin-top:5px; margin-left:5px" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand visible-tablet visible-desktop" style="float:right" target="_blank" href="https://www.facebook.com/bbacbank"> <img src="images/logo_m.png">&nbsp;&nbsp;</a>
          
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
                <a class="top_menu" href="#tc" role="button" data-toggle="modal">TERMS AND CONDITIONS</a>
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


<style>
#draggable-zone {
	background: #000 url(images/space.jpg) 0 0 no-repeat;
	border:     3px solid #000;

	height:     500px;
	margin:     2em auto;
	overflow:   hidden;
	width:      600px;}
	
.ui-wrapper {
	overflow:   visible !important;}
	
.ui-resizable-handle {
	background:    #f5dc58;
	border:        1px solid #FFF;
	
	z-index:    2;}
	
.ui-rotatable-handle {
	background:    #f5dc58;
	border:        1px solid #FFF;
	border-radius: 5px;
		-moz-border-radius:    5px;
		-o-border-radius:      5px;
		-webkit-border-radius: 5px;
	cursor:        pointer;
	
	height:        10px;
	left:          50%;
	margin:        0 0 0 -5px;
	position:      absolute;
	top:           -5px;
	width:         10px;}
	
.ui-rotatable-handle.clone {
	visibility:  hidden;}
</style>
  <div class="container" id="forms" style="margin-top:50px">

    <!-- Docs nav
    ================================================== -->
    <table  align="center" border="0"><Tr><Td><div class="row">
   
   
      <div class="span9" style="width:auto" id="aplication">
			
            <div id="frame" style="background-image:url(images/frame.png); background-repeat:no-repeat; width:369px; height:379px;">
            <div style="position:absolute; width:369px; height:379px;">
                
                <div id="blank" style="margin-left:15px; margin-top:10px; position:absolute; width: 342px; height: 276px; overflow:hidden">
                	<div id="background" style="position:absolute; z-index:1"><img style="width: 342px; height: 276px;" src="images/background/<?php echo $_SESSION['thumb_name'];?>" /></div>
               		
                    <div><img id="myimg" style="opacity:0.3;position:absolute; z-index:2" src="../app/gallery/t/<?php echo $_SESSION['image'];?>" /></div>
                    
     		   </div>
               
               
               <div id="menu_p" style="position:absolute; bottom:46px; right:11px; cursor:pointer"><img src="images/continue2.png"></div>
               
               <form method="post" action="play3.php">
               <input type="hidden" value="0" id="ofsetx" name="ofsetx"/>
                <input type="hidden" value="0" id="ofsety" name="ofsety"/>
                <input type="hidden" value="0" id="widthPos" name="widthPos"/>
                <input type="hidden" value="0" id="heightPos" name="heightPos"/> 
               <div id="menu_p_cancel" style="position:absolute; bottom:19px; right:11px; cursor:pointer; display:none">
               <input type="submit" value="" style="background-image:url(images/continue2.png); background-repeat:no-repeat; border:none; width:117px; height:24px; margin-top:-12px" name="submit_save"><Br>
               <img src="images/cancel.png"></div>
               </form>
               <div id="bottom_menu" style="position:absolute;bottom:-70px; right:0px">
               
					<table>
                        <Tr><Td>W<input class="btn" type="button" value="-" id="wminus"></Td><td><input class="btn btn-primary" type="button" value="+" id="wplus"></td>
                        <Td>H<input class="btn" type="button" value="-" id="hminus"></Td><Td><input class="btn btn-primary" type="button" value="+" id="hplus"></Td></Tr>
                        <Tr><Td align="right">X<input class="btn" type="button" value="-" id="xminus"></Td><td><input class="btn btn-primary" type="button" value="+" id="xplus"></td>
                        <Td>Y<input class="btn" type="button" value="-" id="yminus"></Td><td><input class="btn btn-primary" type="button" value="+" id="yplus"></td></Tr>
                    </table>
               </div>
               
            </div>
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

<div id="tc" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <img data-dismiss="modal" aria-hidden="true" src="images/tc.png">
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

$("#menu_p").click(function(){

	$("#background").css({"z-index":2});
	$("#myimg").css({"opacity":1,
					"z-index":1});
	$("#menu_p").css({"display":"none"});
	$("#menu_p_cancel").css({"display":"block"});
	
	var mywidth = $("#myimg").width();
	var myheight = $("#myimg").height();
	
	$("#widthPos").val(mywidth);
	$("#heightPos").val(myheight);
});

$("#menu_p_cancel").click(function(){
	
	$("#menu_p").css({"display":"block"});
	$("#menu_p_cancel").css({"display":"none"});
	$("#background").css({"z-index":1});
	$("#myimg").css({"opacity":0.3,
					"z-index":2});
});

var x = 0;
var y = 0;

$("#wminus").click(function(){
	var height = $("#myimg").height();
	var width = $("#myimg").width() - 4;
	
	$("#myimg").css({"width":width,
					"height":height});
});

$("#wplus").click(function(){
	var height = $("#myimg").height();
	var width = $("#myimg").width() + 2;
	$("#myimg").css({"width":width,
					"height":height});
});


$("#hminus").click(function(){
	var height = $("#myimg").height() - 4;
	var width = $("#myimg").width();
	
	$("#myimg").css({"width":width,
					"height":height});
});

$("#hplus").click(function(){
	var height = $("#myimg").height()+ 2;
	var width = $("#myimg").width() ;
	
	$("#myimg").css({"width":width,
					"height":height});
});


$("#xminus").click(function(){
	x -= 3;
	$("#myimg").css({"margin-left":x});
	
	$("#ofsetx").val(x);
});

$("#xplus").click(function(){
	x += 2;
	$("#myimg").css({"margin-left":x});
	$("#ofsetx").val(x);
});


$("#yminus").click(function(){
	y -= 3;
	$("#myimg").css({"margin-top":y});
	$("#ofsety").val(y);
});

$("#yplus").click(function(){
	y += 2;
	$("#myimg").css({"margin-top":y});
	$("#ofsety").val(y);
});
</script>

<?php include "js/menu_animation.php";?>

<?php
	include "includes/close.php";
?>
   
  </body>
</html>
