<?php
include 'connection.php';

$query ="select * from scheme";
$result=mysqli_query($conn,$query);
 ?>
 



    <table algin="center" border="1px"   style="padding:20px; background-color: rgba(252, 233, 128, 0.7); border-top-right-radius: 10px; border-bottom-right-radius: 10px;">

	
	<tr>
	<t>
	<h2>Scheme</h2>
	<th>id</th>
	<th>SCHEME NAME</th>
	
	<th>SCHEME DESCIPTION</th>
	
	<th>START DATE</th>
	
	<th>END DATE</th>
	<th>DOCUMENT</th>
	<th>QUALIFICATION</th>
	</t>
	
	<?php
	while($rows=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
		<td><?php echo $rows['scheme_id']; ?></td>
        <td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['schemedescription']; ?></td>
		<td><?php echo $rows['startdate']; ?></td>
		<td><?php echo $rows['enddate']; ?></td>
		<td><?php echo $rows['document']; ?></td>
		<td><?php echo $rows['qualification']; ?></td>
		</tr>
	
	
	
	</tr>
	
	<?php
	}
	?>
	</table>