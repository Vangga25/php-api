<!DOCTYPE html>
<html>
<head>
	<title>DATA SISWA</title>
</head>
<body>
 
	<center>
 
		<h2>DATA SISWA XI RPL 1</h2>
 
 
		<?php 
		include 'koneksi.php';
		?>
 
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Full Name</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"select * from data_siswa");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['ID']++; ?></td>
				<td><?php echo $data['Username']; ?></td>
				<td><?php echo $data['Password']; ?></td>
				<td><?php echo $data['Level']; ?></td>
				<td><?php echo $data['Full Name']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
	</center>
</body>
</html>