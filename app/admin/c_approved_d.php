<?php include "includes/header.php";?>

<?php

$done = '';
if(isset($_GET['user']) && ($_GET['user'] != '') )
{
	$user = $_GET['user'];
}
else
{
	echo '<script>window.location = "votes.php";</script>';
}

include "php/c_waiting.php";
include "php/c_disapprove.php";

$n = 0;
$i = 0;


$db = "SELECT * FROM afcard WHERE id = '$user'";
$extract = mysql_query ($db);
$row = mysql_fetch_array($extract);

?>
	<section id="main" class="column">	
		
		<div id="delete_message"></div>
        
        <?php
		
		if ($done == '1')
		{echo '<h4 class="alert_success" style="display:block">USER was Approved!</h4>';}
		if ($done == '2')
		{echo '<h4 class="alert_success" style="display:block">User was Disapproved!</h4>';}
		
		if($row['status'] == 0)
		{
			$status = 'Waiting';
		}
		if($row['status'] == 1)
		{
			$status = 'Approved';
		}
		if($row['status'] == 2)
		{
			$status = 'Disapproved';
		}
		
		?>
        
		<article class="module width_full">
			<header><h3><?php echo $row['name'];?></h3></header>
				<div class="module_content">
						<fieldset>
                        <label>User</label>
                        <table style="width:400px">
                        <tr><td align="center" colspan="3">
							<a target="_blank" href="http://www.facebook.com/<?php echo $row['uid'];?>"><img src="http://graph.facebook.com/<?php echo $row['uid'];?>/picture" border="0"></a></td></tr>
							<TR><Td><b>First N.:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['name'];?></Td></TR>
                            <TR><Td><b>Last N.:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['lastname'];?></Td></TR>
                            <TR><Td><b>Date of Brith:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['dob'];?></Td></TR>
                            <tr><td><b>Address:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['address'];?></td></tr>
                            <TR><Td><b>Country:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['country'];?></Td></TR>
                            <tr><td><b>Email:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['email'];?></td></tr>
                            <TR><Td><b>Phone:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['phone'];?></Td></TR>
                            <tr><td><b>Date:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['date'];?></td></tr>
                            <tr><Td colspan="3"><Br><Br></Td></tr>
                            <tr><td><b>Status:</b></td><Td>&nbsp;&nbsp;</Td><td><b><?php echo $status;?></b></td></tr>
                            </table>
						</fieldset>
                        
                        
						
						<div class="clear"></div>
				</div>
 				
                <footer>
				<div class="submit_link">
					<form method="post" action="c_approved_d.php?user=<?php echo $user;?>">
					<input type="submit" value="New" name="waiting" id="submit_answer" class="alt_btn">
					<input type="submit" value="Disapprove" name="disapprove">
                    </form>
				</div>
                
                </footer>
		</article><!-- end of post new article -->
		
		
		<div class="clear"></div>		
		
		
		
        
       
			
            
            <div class="spacer"></div>
	</section>


</body>

</html>