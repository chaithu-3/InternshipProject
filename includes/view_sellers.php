
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All Sellers Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="#35424a" style="color:white">
		<th>S.N</th>
		<th>Name</th>
		<th>Email</th>
		<th>Ph.No</th>
		<th>Delete</th>
	</tr>
	<?php 
	include_once 'connection.php';
	$get_c = "select * from sellers";
	
	$run_c = mysqli_query($conn, $get_c); 
	
	$i = 0;
	
	while ($row_c=mysqli_fetch_array($run_c)){
		
		$c_id = $row_c['s_id'];
		$c_name = $row_c['name'];
		$c_email = $row_c['email'];
		$c_ph = $row_c['mobile'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $c_name;?></td>
		<td><?php echo $c_email;?></td>
		<td><?php echo $c_ph;?></td>
		<td><a href="../includes/delete_seller.php?sid=<?php echo $c_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>




</table>