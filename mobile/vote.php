<?php include "includes/header.php";?>
<?php include "php/voting.php";?>
<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>



<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.0.6"></script>
<link rel="stylesheet" href="fancybox/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>


<script type="text/javascript">
function get_images(){

	var sortmethod = $("#sortmethod").val();
	$.get('php/get_gallery.php?sort=' + sortmethod, function(data) {

		$('#gallery_table').append(data);
		myScroll.refresh();
	});
	
}



var myScroll,
	pullDownEl, pullDownOffset,
	pullUpEl, pullUpOffset,
	generatedCount = 0;


function pullUpAction () {
	setTimeout(function () {	// <-- Simulate network congestion, remove setTimeout from production!

		get_images();
		myScroll.refresh();	// Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 1000);	// <-- Simulate network congestion, remove setTimeout from production!
}

function loaded() {
	pullDownEl = document.getElementById('pullDown');
	pullDownOffset = pullDownEl.offsetHeight;
	pullUpEl = document.getElementById('pullUp');	
	pullUpOffset = pullUpEl.offsetHeight;
	
	myScroll = new iScroll('wrapper', {
		useTransition: true,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		},
		topOffset: pullDownOffset,
		onRefresh: function () {
			if (pullDownEl.className.match('loading')) {
				pullDownEl.className = '';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Pull down to refresh...';
			} else if (pullUpEl.className.match('loading')) {
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = 'Pull up to load more...';
			}
		},
		onScrollMove: function () {
			if (this.y > 5 && !pullDownEl.className.match('flip')) {
				pullDownEl.className = 'flip';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Release to refresh...';
				this.minScrollY = 0;
			} else if (this.y < 5 && pullDownEl.className.match('flip')) {
				pullDownEl.className = '';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Pull down to refresh...';
				this.minScrollY = -pullDownOffset;
			} else if (this.y < (this.maxScrollY - 5) && !pullUpEl.className.match('flip')) {
				pullUpEl.className = 'flip';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = 'Release to refresh...';
				this.maxScrollY = this.maxScrollY;
			} else if (this.y > (this.maxScrollY + 5) && pullUpEl.className.match('flip')) {
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = 'Pull up to load more...';
				this.maxScrollY = pullUpOffset;
			}
		},
		onScrollEnd: function () {
			if (pullDownEl.className.match('flip')) {
				pullDownEl.className = 'loading';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Loading...';				
				pullDownAction();	// Execute custom function (ajax call?)
			} else if (pullUpEl.className.match('flip')) {
				pullUpEl.className = 'loading';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = 'Loading...';				
				pullUpAction();	// Execute custom function (ajax call?)
			}
		}
	});
	
	setTimeout(function () { document.getElementById('wrapper').style.left = '0'; }, 800);
}

document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);









var myScrolls;
function loadeds() {
	myScrolls = new iScroll('wrappers', {
		useTransform: false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		}
	});
}

document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
document.addEventListener('DOMContentLoaded', loadeds, false);
</script>

<script>
$(document).ready(function() {
		$(".fancybox").fancybox({
			
		});
	});
</script>

<?php include "php/voting.php";?>

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
	font-size:22px;
	text-transform:uppercase;
	color:#FFF;
}
.lightbox{
	background-image:url(images/litebox_bg.png);
	width:100%;
	height:100%;
	position:absolute;
	z-index:99;
}

.span4{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	font-size:22px;
	text-transform:uppercase;

	color:#FFF;
	float:left;
	margin:5px;
	text-align:center;
	margin-top:60px;
	
}
#form_table{
	width:393px;
	margin:auto;
	
	
}
.title{
	position:absolute;
	width:206px;
	margin-top:-35px;
}
.invite{
	float:right;
}
.share{
	float:right;
	position:absolute;
	right:55px;
}
.vote{
	float:right;
	position:absolute;
	right:110px;
}

#wrapper {
	/*background:#8ed6ed;*/
	position:absolute;
	top:105px; bottom:48px; left:-9999px;
	width:100%;
	overflow:auto;
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
      <li>
        <a class="top_menu0" href="vote.php"><img style="width:25px" src="images/icons/prizes.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">PLAY</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li style="background-color:#666666;">
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

    

   <table id="sortingg" style="position:absolute; width:100%"><tr><Td align="center">
   
   				<table style="background-image:url(images/sorting.png); width:443px; height:29px;font-family: 'Conv_HelveticaNeueLTStd-Md';"><Tr><Td style="width: 138px; text-align:right; color:#FFF">SORT BY:</Td><tD style="width: 117px; text-align:right; color:#98d3ed"><a href="vote.php?sort=1" style="text-decoration:none;color:#98d3ed">NAME</a></tD><Td style="width: 66px; text-align:center"><img src="images/bar.png"></Td><Td style="color:#98d3ed"><a href="vote.php?sort=2" style="text-decoration:none;color:#98d3ed">VOTES</a></Td></Tr></table>
                
	</Td></tr></table>
   


<div id="wrapper">
	<div id="scroller">
		<div id="pullDown">
			
		</div>
<!-- Subhead
================================================== -->




  <div class="container">
  
  	<div class="row">
    	<div class="span12">
       		
            <div class="row" id="gallery_table">
            	
            <!-- Docs nav
    ================================================== -->
 <?php   
 
 $_SESSION['limit'] = 0;
             
             if (!isset($_GET["sort"]) || empty($_GET["sort"]))
			{
				$sortmethod = 0;
			} 
			else {
				$sortmethod = $_GET["sort"];
			}
				if($sortmethod == 1)
				{
                	$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY name ASC LIMIT {$_SESSION['limit']}, 5";
				}
				else
				{
					if ($sortmethod == 2)
					{
						$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY votes DESC LIMIT {$_SESSION['limit']}, 5";
					}
					else
					{
						$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY id DESC LIMIT {$_SESSION['limit']}, 5";
					}
				}
				?>
                
				<input type="hidden" value="<?php echo $sortmethod;?>" id="sortmethod">  
                
              <?php
                $query_result = mysql_query($selectQuery);
				
               while ($row = mysql_fetch_array($query_result))
                {
                ?>
                
                <?php include "php/gallery_table.php";?>
                
            <?php
			    }
				?>

                
                
                </div>
            
            
          </div>
     </div>
</div>
<input type="hidden" value="" id="bbac_image"/>

<div id="pullUp">
			<span class="pullUpIcon"></span><span class="pullUpLabel">Pull up to refresh...</span>
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
    
<script src="https://connect.facebook.net/en_US/all.js"></script>  
<script>

FB.init({
        appId  : '597766673589432',
        frictionlessRequests: true,
    });

      function sendRequestToRecipients() {
        var user_ids = document.getElementsByName("user_ids")[0].value;
        FB.ui({method: 'apprequests',
          message: 'message',
          to: user_ids, 
        }, requestCallback);
      }

      function sendRequestViaMultiFriendSelector() {
        FB.ui({method: 'apprequests',
          message: 'BBAC'
        }, requestCallback);
      }
      
      function requestCallback(response) {
        // Handle callback here
      }

$(document).ready(function() {

		$('.shareit').click(function(e){
			var myimage = $('#bbac_image').val();
		
			var n=myimage.replace("../","");

			var img = 'http://lebappsonline.com/dev01/bbac/app/' + n;
			
			e.preventDefault();
			FB.ui(
			{
			method: 'feed',
			name: 'BBAC',
			link: 'http://www.facebook.com/bbacbank?&sk=app_597766673589432',
			picture: img,
			caption: 'Please vote for this image',
			description: '',
			message: ''
			});
		});

	});
</script>


<script>

$(document).ready(function(){
                
                
                // Close/Open Navigation
               var myheight = $(document).height();
                
				$(".mobile-nav").on("click",function(e){
                    e.preventDefault();
					
					 var width = ($(window).width())*0.80;
           			
				
                    $(this).toggleClass('open-nav');
                    
                    if($(this).hasClass('open-nav')){
                        
                        $("#animated").animate({
                            left: width
                        }, { duration: 240, queue: false });
						$("#sortingg").animate({
                            left: width
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: width
                        }, { duration: 240, queue: false });
						
						$("#leftmenu").css({"height":myheight,
										"width":width});
						
                    }
                    else {
                        $("#animated").animate({
                            left: 0
                        }, { duration: 240, queue: false });
						$("#sortingg").animate({
                            left: 0
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: 0
                        }, { duration: 240, queue: false });
						$("#leftmenu").css({"height":0});
                    }
					
 
                });
            });
			
			
$(document).ready(function(e) {
	
	var myheight = $(document).height();
	var mywidth = $(document).width();
	
	$('#animated').css({"width":mywidth});
    var newheight = myheight - 110;
	$('#wrapper').css({"height":newheight});
	
	$("#leftmenu").css({"height":0});
	$('#wrappers').css({"height":newheight});
	myScrolls.refresh();
	
	
});

$(window).resize(function() {
	
	 // Close/Open Navigation
                var width = ($(window).width())*0.80;
           		
              
                        $("#animated").animate({
                            left: 0
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: 0
                        }, { duration: 240, queue: false });
                  
    
			
			
			
	var myheights = $(window).height();	
	var mywidth = $(window).width();

	$('#animated').css({"width":mywidth});
	
    var newheights = myheights - 110;

	$('#wrapper').css({"height":newheights});
	
	$("#leftmenu").css({"display":"none",
	"width":width});
	$('#wrappers').css({"height":newheights});
	myScrolls.refresh();
	
	
});

</script>


<script src="js/quo.js"></script>
<script src="js/quo.debug.js"></script>
    
<script>
$$('#animated').swipeLeft(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#sortingg").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: 0
	}, { duration: 240, queue: false });
});


$$('#animated').swipeRight(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: width
	}, { duration: 240, queue: false });
	$("#sortingg").animate({
		left: width
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: width
	}, { duration: 240, queue: false });
});

$$('#wrapper').swipeLeft(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#sortingg").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#leftmenu").css({"height":0,
						"width":width});
	
	myScrolls.refresh();
});


$$('#wrapper').swipeRight(function() {
    // affects "span" children/grandchildren
	
	var myheight = $(document).height();
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: width
	}, { duration: 240, queue: false });
	$("#sortingg").animate({
		left: width
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: width
	}, { duration: 240, queue: false });
	
	$("#leftmenu").css({"height":myheight,
						"width":width});
	
	myScrolls.refresh();
});


</script>  


<?php
	include "includes/close.php";
?>
  </body>
</html>
