<?php include "includes/header.php";?>
<?php include "php/submit_play.php";?>
<style>
#Gaia{
	height:600px;
}
</style>



<div id="vote">

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

	if (!isset($_GET["sort"]) || empty($_GET["sort"]))
	{
		$sortmethod = 0;
	} 
	else {
		$sortmethod = $_GET["sort"];
	}
	if($sortmethod == 1)
	{
		$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY name ASC LIMIT {$_SESSION['i']}, 3";
	}
	else
	{
		if ($sortmethod == 2)
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
		?>        
        
        	<div class="vote_table" style="text-align:center">
            	<div style="background-image:url(images/v_border.png); width:240px; height:190px"><img style="width:240px;" src="gallery/t/t/20130704095023.jpg" /></div>
                <div style="width:250px; height:12px;"></div>
            	<div style="margin:auto; width:37px"><div class="v_number"><?php echo $property['votes'];?></div></div>
                <div style="margin:auto; width:193px; height:74px">
                	<div class="v_text">
                    	<div style="width:190px; color:#FFF; text-align:center;font-family: 'Conv_gotham-bold'; font-size:11px; text-transform:uppercase"><p style="-webkit-margin-before: 4px !important;"><?php echo $property['name'];?></p></div>
                        <div style="width:190px; text-align:center; position:absolute; bottom:0; color:#FFF;font-family: 'Conv_gotham-bold'; font-size:12px; text-transform:uppercase"><p style="-webkit-margin-before: 7px !important;-webkit-margin-after: 7px !important;"><a style="color:#FFF; text-decoration:none" href="vote.php">vote</a> &nbsp; <img src="images/dot.png" /> &nbsp; <span style="cursor:pointer">share</span> &nbsp;<img src="images/dot.png" /> &nbsp;<span style="cursor:pointer">invite</span></p></div>
                    </div>
                </div>
                
             </div>
             
     <?php
	}
	?>
             
             
             
             
             
             
             
             
             
             
             
             
           
             
             
        </div>
 
    </div>



</div>

<script>
$("#s_name").click(function(){
	window.location = "vote.php?sort=1";
});

$("#s_vote").click(function(){
	window.location = "vote.php?sort=2";
});
</script>
<?php include "includes/footer.php";?>