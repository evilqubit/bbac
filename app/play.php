<?php include "includes/header.php";?>
<?php include "php/submit_play.php";?>
<style>
#Gaia{
	height:600px;
}
</style>
<div id="fillout">

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
	
<div id="footer">
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

<div id="error_play"><?php echo $error;?></div>

<form method="post" action="play.php" enctype="multipart/form-data">
    <div id="fillout_form">
    	<div id="fillout_text">
            <div style="position:absolute; margin-top: 1px; width: 214px"  class="fillout_title">full name</div>
            <div style="position:absolute; margin-top:16px;"><input type="text" value="" class="fillout_input" id="name" name="name"/></div>
           
            <div style="position:absolute; margin-top:72px; width: 214px" class="fillout_title">email address</div>
            <div style="position:absolute; margin-top:89px;"><input type="text" value="" class="fillout_input" id="email" name="email"/></div>
            
            <div style="position:absolute; margin-top:144px; width: 214px"  class="fillout_title">date of birth</div>
            <div style="position:absolute; margin-top:162px;"><input type="text" value="" class="fillout_input" id="dob" name="dob"/></div>

            <div style="position:absolute; margin-top:216px; width: 214px" class="fillout_title">gender</div>
            <div style="position:absolute; margin-top:235px;"><input type="text" value="" class="fillout_input" id="gender" name="gender"/></div>
         </div>
         
         <div id="fillout_pic">
         	<div class="fillout_pic_choose" id="thumb1"><img src="images/thumb1.png" /></div>
            <div class="fillout_pic_choose" id="thumb2"><img src="images/thumb2.png" /></div>
            <div class="fillout_pic_choose" id="thumb3"><img src="images/thumb3.png" /></div>
            <div class="fillout_pic_choose" id="thumb4"><img src="images/thumb4.png" /></div>
            <input type="hidden" value="" id="thumb_name" name="thumb_name"/>
         </div>
         
         <div id="upload_submit">
         	<div id="choose"><div style="position:absolute; z-index:1; width: 126px; height: 15px; overflow: hidden; color:#014289;font-family: 'Conv_gotham-bold'; font-size:12px" id="file_chosen">Upload your picture</div>
            <input type="file" value="browse" style="position:absolute; width:300px; opacity:0; cursor:pointer; z-index:2;" id="choose_file" name="image"/></div>
            
            <div id="continue"><input id="continue_submit" name="continue_submit" type="submit" value="CONTINUE" /></div>
         </div>
    </div>
    </form>

</div>

<script>
$("#choose_file").change(function(){
	var myfile = $("#choose_file").val();
	$("#file_chosen").html(myfile);
});
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

var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

$("#continue_submit").click(function(){
	
	if($("#name").val() == '')
	{
		$("#name").focus();
		$("#error_play").html("Enter your name");
		return false;
	}
	
	if($("#email").val() == '')
	{
		$("#email").focus();
		$("#error_play").html("Enter your email");
		return false;
	}
	
	 if ($("#email").val().search(emailRegEx) == -1)
	 {
		$("#email").focus();
		$("#error_play").html("Enter a valid email");
		return false;
     }
	if($("#dob").val() == '')
	{
		$("#dob").focus();
		$("#error_play").html("Enter your date of birth");
		return false;
	}
	
	if($("#gender").val() == '')
	{
		$("#gender").focus();
		$("#error_play").html("Enter your gender");
		return false;
	}
	
	if($("#thumb_name").val() == '')
	{
		$("#thumb_name").focus();
		$("#error_play").html("Choose your background");
		return false;
	}
	
	if($("#choose_file").val() == '')
	{
		$("#choose_file").focus();
		$("#error_play").html("Choose your image");
		return false;
	}
});
</script>

<?php include "includes/footer.php";?>