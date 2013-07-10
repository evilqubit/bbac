<?php include "includes/header.php";?>
<style>
#Gaia{
	height:600px;
}
</style>
<div id="thankyou">

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

</div>


<?php include "includes/footer.php";?>