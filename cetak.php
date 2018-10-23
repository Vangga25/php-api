<!DOCTYPE html>
<html>
<head>
	<title>DATA SISWA</title>
</head>
<body>
 
	<center>
 
		<h2>DATA SISWA XI RPL 1</h2>
 
 
		<?php 
		
		include 'coba.php';
		?>
 
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Fullname</th>
			</tr>

<?php
  include('koneksi.php');
  $sql ="SELECT * FROM data_siswa";
  $peserta=mysqli_query($koneksi,$sql);
   while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
  	echo'
  	</tr>
  		<td>'.$baris_data['ID'].'</td>
  		<td>'.$baris_data['Username'].'</td>
  		<td>'.$baris_data['Password'].'</td>
  		<td>'.$baris_data['Level'].'</td>
  		<td>'.$baris_data['Fullname'].'</td>
   	</tr>';
  }
  ?>

		</table>
	</center>

</body>
</html>