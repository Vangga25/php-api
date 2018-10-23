<?php 
include "koneksi.php";
 ID  $_REQUEST['ID'];
 $Username = $_REQUEST['Username'];
 $Password = $_REQUEST['Password'];
 $Level = $_REQUEST['Level'];
 $Fullname = $_REQUEST['Fullname'];
 $koneksi = mysqli_connect($host, $user, $password, $database) or die ("Koneksi gagal");
 $sql = "INSERT INTO users VALUES ('$ID', '$Username', '$Password', '$Level', '$Fullname')";
 $result = mysqli_query($koneksi, $sql);
 echo "Input berhasil";
 mysqli_close($koneksi);
?>