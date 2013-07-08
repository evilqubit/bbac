<?php include "includes/header.php";?>
<?php include "php/user_vote.php";?>

<style>
#Gaia{
	height:600px;
}
</style>



<div id="vote">
<div style="position:absolute; right:0px; top:11px"><a href="index.php"><img src="images/logo.png" /></a></div>
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
        <div class="f_btn" id="f_play"><p>play</p></div>
        <div class="footer_v"></div>
        <div class="home" id="f_vote"><p>vote</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_prizes"><p>prizes</p></div>
        <div class="footer_v"></div>
        <div class="f_btn" id="f_tc"><p>terms & conditions</p></div>
    </div>
    
    <div id="votes">
    	
        <div id="vote_header">
        	<div id="b_previous"></div>
                <div id="sorting">
                	<div style="width:390px; height:25px; margin-top:7px; position:absolute">
                        <div id="s_sort">sort by:</div>
                        <div id="s_name" class="sorting_class">name</div>
                        <div id="s_border"><img src="images/s_border.png" /></div>
                        <div id="s_vote" class="sorting_class">vote</div>
                    </div>
                </div>
            <div id="b_next"></div>
        </div>
        
        <div id="vote_body">
        
<?php

$_SESSION['i'] = 0;
$_SESSION['sort'] = 0;

	if (!isset($_GET["sort"]) || empty($_GET["sort"]))
	{
		$_SESSION['sort'] = 0;
	} 
	else {
		$_SESSION['sort'] = $_GET["sort"];
	}
	if($_SESSION['sort'] == 1)
	{
		$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY name ASC LIMIT {$_SESSION['i']}, 3";
	}
	else
	{
		if ($_SESSION['sort'] == 2)
		{
			$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY votes DESC LIMIT {$_SESSION['i']}, 3";
		}
		else
		{
			$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY id DESC LIMIT {$_SESSION['i']}, 3";
		}
	}
	
	$query_result = mysql_query($selectQuery);
	while ($property = mysql_fetch_array($query_result))
	{
		include "php/gallery_design.php";
	}
	?>     
        </div>
 
    </div>



</div>
<input type="hidden" value="" id="bbac_image"/>
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
function voteFor(image){
	window.location = 'vote.php?partid='+image;
}

$("#b_next").click(function(){
	next_gallery();
});

$("#b_previous").click(function(){
	previous_gallery();
});

$("#s_name").click(function(){
	window.location = "vote.php?sort=1";
});

$("#s_vote").click(function(){
	window.location = "vote.php?sort=2";
});
</script>
<?php include "includes/footer.php";?>