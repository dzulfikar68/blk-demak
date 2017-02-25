<?php
	
	require_once ('../koneksi_db.php');
	session_start();

	$id = $_GET['id'];

	$query = mysqli_query($connect, "DELETE FROM kejuruan WHERE id_kejuruan=$id");


	if(!$query){
		die("QUERY DELETE KEJURUAN FAILED : ". mysqli_error($connect));
	}


	$_SESSION['success'] = "Hapus kejuruan sukses!";

	header("Location: ../../admin/data_kejuruan.php");
	
	

	