<?php
	
	require_once ('../koneksi_db.php');
	session_start();

	$id = $_GET['id'];

	$query = mysqli_query($connect, "DELETE FROM jadwal WHERE id_jadwal=$id");


	if(!$query){
		die("QUERY DELETE JADWAL FAILED : ". mysqli_error($connect));
	}


	$_SESSION['success'] = "Hapus jadwal sukses!";

	header("Location: ../../admin/data_jadwal.php");
	
	

	