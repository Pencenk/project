<?php 
$koneksi = mysqli_connect("localhost","root","xmpdg","db_user");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>