<?php include "includes/header.php";?>


<?php

$_SESSION['latitude'] = '';
$_SESSION['longitude'] = '';

$dbs = "SELECT * FROM users WHERE fb_id = '{$_SESSION['uid']}'";
$extractx = mysql_query ($dbs);
$numrows = mysql_num_rows ($extractx);

if($numrows == 0)
{
	$date = date("Y-m-d");
	$write = mysql_query("INSERT INTO users VALUES ('','{$_SESSION['uid']}','$uname','$uemail','$dob','$date')");
}
?>


<?php

$name = $ufirst;
$lastname = $ulast;
$dob = $dob;
$address = $_SESSION['country'];
$email = $uemail;
$phone = '';
?>
<div id="index">

<div id="terms" class="lightbox"></div>

<div id="terms_back_bg">
    <div id="terms_back">
       
        <?php include "php/terms.php";?>
        
    </div>
</div>

<div id="prize_back_bg">
    <div id="prize_back">
        <div id="prize_1" class="content">
        <?php include "php/prizes.php";?>
        </div>
    </div>
</div>

        
        
	<div id="video"><iframe width="560" height="315" src="//www.youtube.com/embed/_J-w3_NWY_I?autoplay=1&version=3&loop=1&playlist=_J-w3_NWY_I" frameborder="0" allowfullscreen></iframe></div>
    
    
    <a href="http://www.bbacbank.com/banking/personal/card/mazroukeh-credit-card-summer-promotion" target="_blank" id="creditcard" style="position: absolute;width: 780px;height: 267px;cursor: pointer;margin-top: 428px;margin-left: 10px; display:block"></a>
    
    <div class="button" id="apply_card"></div>
    <div class="button" id="skip_play"></div>
	
    <div id="footer1">
    	<div class="home" id="f_home"><p>home</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_play"><p>play</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_vote"><p>vote</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_prizes"><p>prizes</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_tc"><p>terms & conditions</p></div>
    </div>
    
    <div id="error"></div>
</div>




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


<input type="hidden" value="" id="clicks"/>
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

<?php include "includes/footer.php";?>