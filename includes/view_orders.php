<?php 
if(!isset($_SESSION['u_name'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<table width="780" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All Orders</h2></td>
	</tr>
	
	<tr align="center" bgcolor="#35424a" style="color:white">
		<th>S.N</th>
		<th>Title</th>
		<th>Image</th>
		<th>Price</th>
	</tr>
	<?php 
	
	include_once 'connection.php';
	
	$sql = "select * from products where p_id in(select p_id from orders);";
	
	$result = mysqli_query($conn, $sql); 
	
	$i = 0;
	
	while ($row=mysqli_fetch_array($result)){
		
		$pro_id = $row['p_id'];
		$pro_title = $row['title'];
		$pro_image = $row['image'];
		$pro_price = $row['price'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $pro_title;?></td>
		<td><img src="<?php echo $pro_image;?>" width="60" height="60"/></td>
		<td><?php echo $pro_price;?></td>
	</tr>
	<?php } ?>
</table>


<?php } ?>