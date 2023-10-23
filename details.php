<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
	<table width="90%" border="1">
		<tr>
			<th>Id</th>
			<th>Time Stamp</th>
			<th>Name</th>
			<th>City</th>
			<th>NIC</th>
			<th>Contact Number</th>
		</tr>
		<?php
			$conn = mysqli_connect("localhost","root","","customer_info");
			$result = mysqli_query($conn, "SELECT * FROM customer_info");
			while ($row = mysqli_fetch_assoc($result)) :
		?>
		<tr>
			<td><?= $row['id']; ?></td>
			<td><?= $row['timestamp']; ?></td>
			<td><?= $row['name']; ?></td>
			<td><?= $row['city']; ?></td>
			<td><?= $row['nic']; ?></td>
			<td><?= $row['contact_no']; ?></td>
		</tr>
	<?php endwhile; ?>
	</table>
</body>
</html>