
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All Subscribers Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="#35424a" style="color:white">
		<th>S.N</th>
		<th>Email</th>
		<th>Delete</th>
	</tr>
	<?php 
	include_once 'connection.php';
	$get_c = "select * from subscribers;";
	
	$run_c = mysqli_query($conn, $get_c); 
	
	$i = 0;
	
	while ($row_c=mysqli_fetch_array($run_c)){
		
		$c_id = $row_c['sub_id'];
		$c_email = $row_c['email'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $c_email;?></td>
		<td><a href="../includes/delete_sub.php?subid=<?php echo $c_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>




</table>