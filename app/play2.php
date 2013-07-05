<?php include "includes/header.php";?>
<?php 
if (!isset($_SESSION['image']) || ($_SESSION['image'] == ''))
{
	echo "<script>document.location.replace('play.php');</script>";
}
?>
<style>
#Gaia{
	height:600px;
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

<div id="play" style="overflow:hidden">

	<div id="terms" class="lightbox"></div>

    <div id="terms_back_bg">
        <div id="terms_back">
            <div id="content_1" class="content">
            <?php include "php/terms.php";?>
            </div>
        </div>
    </div>

    <div id="prize_back_bg">
        <div id="prize_back">
            <div id="prize_1" class="content">
            <?php include "php/prizes.php";?>
            </div>
        </div>
    </div>
	
    <div id="footer" style="z-index:99">
        <div class="f_btn" id="f_home"><p>home</p></div>
        <div class="footer_v"></div>
        <div class="home" id="f_play"><p>play</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_vote"><p>vote</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_prizes"><p>prizes</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_tc"><p>terms & conditions</p></div>
    </div>
<img style="display:none" id="checking" src="gallery/t/<?php echo $_SESSION['image'];?>" />
	<div id="error_play"></div>

<div id="play_bkp">
	<div id="blank"><div id="background" style="position:absolute"><img style="width: 484px; height: 384px;" src="images/background/<?php echo $_SESSION['thumb_name'];?>" /></div>
    	<div id="blank2">
            <div id="draggable-wrapper" >
                <div id="resizable-wrapper"><img id="elem-wrapper" src="gallery/t/<?php echo $_SESSION['image'];?>" /></div>
            </div>
        </div>
	</div>
</div>

	<div id="option1" class="play_options">
        <!--<img class="rotate" id="rleft" style="cursor:pointer" src="images/rleft.png" />
        <img class="rotate" id="rright" style="cursor:pointer" src="images/rright.png" />-->
        
        <div id="preview">Preview</div>
    </div>
     <form method="post" action="play3.php">
      		<input type="hidden" value="0" id="ofsetx" name="ofsetx"/>
            <input type="hidden" value="0" id="ofsety" name="ofsety"/>
            <input type="hidden" value="0" id="widthPos" name="widthPos"/>
            <input type="hidden" value="0" id="heightPos" name="heightPos"/>
           <!-- <input type="text" value="0" id="rotating" name="rotating"/>-->
    <div id="option2" class="play_options">
		<div id="back">Back</div>
       
           
            <input type="submit" value="Save" id="save" name="submit_save">
        
    </div></form>
   
</div>


<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
	
	<script type="text/javascript">
	
	$(window).load(function(){
		$(".play_options").rotate(0);
		$("#blank").rotate(0);
		$("#blank2").rotate(0);
		
		var offset = $("#elem-wrapper").position();
		var xPos = offset.left;
		var yPos = offset.top;

		$("#ofsetx").val(xPos);
		$("#ofsety").val(yPos);
				
		var width = $("#checking").width();
		var height = $("#checking").height();

		$("#elem-wrapper").css({"width":width,
								"height":height,
								"opacity":0.6});
	
		
		var drWr = $('#draggable-wrapper'),
		    rsWr = $('#resizable-wrapper'),
		    elem = $('#elem-wrapper');
		
		elem.resizable({
			aspectRatio: false,
			handles:     'se'
		});

		drWr.draggable({
			drag: function() {
				
				
				var offset = $(this).position();
				var xPos = offset.left;
				var yPos = offset.top;

				$("#ofsetx").val(xPos);
				$("#ofsety").val(yPos);
				
			}});
	});
	
	$("#widthPos").click(function(){
		
		$("#widthPos").val(widthPos);
		$("#heightPos").val(heightPos);
		var widthPos = $("#elem-wrapper").width();
		var heightPos = $("#elem-wrapper").height();
		
	});
	
				
	</script>
    
<script>
var rotate_deg = 0;

/*$(".rotate").click(function(){
	var rotate_id = $(this).attr("id");
	
	if(rotate_id == 'rleft')
	{
		rotate_deg -= 10.5;
		$("#draggable-wrapper").rotate(rotate_deg);
	}
	
	if(rotate_id == 'rright')
	{
		rotate_deg += 10.5;
		$("#draggable-wrapper").rotate(rotate_deg);
	}
	$("#rotating").val(rotate_deg);
});*/

$("#preview").click(function(){
	$("#blank2").css({"z-index":-1});
	$("#option1").css({"display":"none"});
	$("#option2").css({"display":"block"});
	$("#elem-wrapper").css({"opacity":1});
	
	$(".play_options").rotate(9.3);
	$("#play_bkp").rotate(9.3);
	$("#play_bkp").css({"margin-left": 118,
						"margin-top": 18});

	
		var widthPos = $("#elem-wrapper").width();
		var heightPos = $("#elem-wrapper").height();
		
		$("#widthPos").val(widthPos);
		$("#heightPos").val(heightPos);
});

$("#back").click(function(){
	$("#blank2").css({"z-index":1});
	$("#option2").css({"display":"none"});
	$("#option1").css({"display":"block"});
	$("#elem-wrapper").css({"opacity":0.6});
	
	$(".play_options").rotate(0);
	$("#play_bkp").rotate(0);
	$("#play_bkp").css({"margin-left": 80,
						"margin-top": -28});
});
</script>

<?php include "includes/footer.php";?>