<?php include "includes/header.php";?>

<?php

$remove = 0;

$cat = array(
1 => 31,
2 => 41,
3 => 66
);


$db = "SELECT * FROM votes WHERE date < '2013-7-1 00:30:00' AND partid = '$cat[3]'";
$extract = mysql_query ($db);
$numrows = mysql_num_rows ($extract);
?>
	<section id="main" class="column">	
		
		<div id="delete_message"></div>
        
        <?php if ($remove == 1)
		{ echo '<h4 class="alert_success" style="display:block">User Deleted Successfully!</h4>'; }
		if (isset($_GET['done']) && ($_GET['done'] == "1"))
		{echo '<h4 class="alert_success" style="display:block">Done Successfully!</h4>';}
		if (isset($_GET['done']) && ($_GET['done'] == "0"))
		{echo '<h4 class="alert_error" style="display:block">An Error Just Occurred Please Try Again!</h4>';}
		?>
        
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved"><?php echo $numrows;?> Images</h3>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
    				<th>#</th>
                    <th>Image id</th>
    				<th>The Voter</th>
                    <th>Voter id</th>
    				<th>Date</th>
				</tr> 
			</thead> 
			<tbody> 
            <?php

			while ($row = mysql_fetch_array($extract))
			{
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
				<tr>
    				<td><?php echo $count += 1;?></td>
                    <td><?php echo $row['partid'];?></td>
                    <Td><a target="_blank" href="http://www.facebook.com/<?php echo $row['user_id'];?>"><img src="http://graph.facebook.com/<?php echo $row['user_id'];?>/picture" border="0"></a></Td>
    				<td><?php echo $row['user_id'];?></td>
                    <td><?php echo $row['date'];?></td>
				</tr> 
			<?php
			}
			?>
			</tbody> 
			</table>
            
            
            <!-- paging -->
             <table align="center" width="110px" style="color:#000000"><tr align="center">
			</div><!-- end of #tab1 -->
			
			
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		
		<div class="clear"></div>		
		
		
		<div class="spacer"></div>
	</section>


</body>

</html>