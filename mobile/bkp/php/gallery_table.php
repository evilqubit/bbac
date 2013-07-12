
<div class="span4" style="width:300px;">
          
                    <table border="0" align="center" style="width:300px;">
                    <Tr><Td align="center" style="width:300px;">
                    <img style="width:300px; height:230px" src="../app/<?php echo $row['image']?>" />
                    <div style="position:absolute; margin-left: 109px; margin-top: -32px;"><input type="button" style="background-image:url(images/Vote_num.png); background-repeat:no-repeat; width:86px; height:33px; color:#014289; font-size:29px; border:none; background-color:transparent" value="<?php echo $row['votes'];?>" /></div></Td></Tr>
                   <Tr><Td valign="top" style="width:309px; height:60px;background-image:url(images/Vote_title.png); background-repeat:no-repeat;">
					
					<table style="width:100%; height:100%"><Tr><Td colspan="5" style="text-align:center; font-size:16px">
					<?php echo $row['name'];?></Td></Tr>
                    
                    <Tr style="font-size:14px"><Td><a href="vote.php?gallery_image=<?php echo $row['id'];?>" style="text-decoration:none; color:#FFF">VOTE</a></Td><Td><img src="images/dot.png" /></Td><Td><a class="shareit" onclick="document.getElementById('bbac_image').value='<?php echo $row['image'];?>'" href="#" style="text-decoration:none; color:#FFF">SHARE</a></Td><Td><img src="images/dot.png" /></Td><Td><a onClick="sendRequestViaMultiFriendSelector()" href="#" style="text-decoration:none; color:#FFF">INVITE</a></Td></Tr></table>
                    
                    
                    </Td></Tr>
                    </table>
</div>
