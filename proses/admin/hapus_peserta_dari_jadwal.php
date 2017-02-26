<?php
	
	require_once ('../koneksi_db.php');
	session_start();

	$id_jadwal = $_GET['id_jadwal'];
	$id_peserta = $_GET['id_peserta'];
	$id_kejuruan = $_GET['id_kejuruan'];

	$query = mysqli_query($connect, "DELETE FROM jadwal_assign WHERE id_jadwal=$id_jadwal AND id_peserta=$id_peserta");


	if(!$query){
		die("QUERY DELETE PESERTA DARI JADWAL FAILED : ". mysqli_error($connect));
	}

	$query_update = mysqli_query($connect, "UPDATE kejuruan_assign SET selected = 0 WHERE id_kejuruan=$id_kejuruan AND id_peserta=$id_peserta ");



	$_SESSION['success'] = "Hapus peserta sukses!";

	header("Location: ../../admin/detail_jadwal.php?id=".$id_jadwal);
	
	

	