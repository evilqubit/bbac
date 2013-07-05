</div>
<?php mysql_close($res1);?>
<script>

$("#f_tc").click(function(){
	$("#terms").css({"display":"block"});
	$("#terms_back_bg").css({"display":"block"});
});

$("#terms").click(function(){
	$(this).css({"display":"none"});
	$("#terms_back_bg").css({"display":"none"});
});
$("#terms_back_bg").click(function(){
	$(this).css({"display":"none"});
	$("#terms").css({"display":"none"});
});

$("#f_prizes").click(function(){
	$("#terms").css({"display":"block"});
	$("#prize_back_bg").css({"display":"block"});
});

$("#terms").click(function(){
	$(this).css({"display":"none"});
	$("#prize_back_bg").css({"display":"none"});
});
$("#prize_back_bg").click(function(){
	$("#terms").css({"display":"none"});
	$("#prize_back_bg").css({"display":"none"});
});


$("#f_home").click(function(){
	document.location.replace('index.php');
});

$("#f_play, #skip_play").click(function(){
	document.location.replace('play.php');
});

$("#f_vote").click(function(){
	document.location.replace('vote.php');
});
</script>
</body></html>