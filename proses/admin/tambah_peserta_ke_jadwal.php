<?php
	
	require_once ('../koneksi_db.php');
	
	session_start();

	$id_peserta = $_GET['id_peserta'];
	$id_jadwal = $_GET['id_jadwal'];
	$id_kejuruan = $_GET['id_kejuruan'];
	$kapasitas = $_GET['kapasitas'];

	$query_check = mysqli_query($connect, "SELECT * FROM jadwal_assign WHERE id_jadwal=$id_jadwal ");

	if(!$query_check){

		die("QUERY CHECK NUM JADWAL FAILED : ". mysqli_error($connect));	

	}



	$num = mysqli_num_rows($query_check);



	if($num>=$kapasitas){

		$_SESSION['error'] = "Tambah peserta gagal! Jumlah peserta sudah memenuhi kapasitas yang tersedia";

	}else{

		$query_insert = mysqli_query($connect, "INSERT INTO jadwal_assign (id_jadwal, id_peserta)  
		values ('".$id_jadwal."', '".$id_peserta."')"); 

		if(!$query_insert){

			die("QUERY INSERT PESERTA KE JADWAL FAILED : ". mysqli_error($connect));	

		}

		$query_update = mysqli_query($connect, "UPDATE kejuruan_assign SET selected = 1 WHERE id_kejuruan=$id_kejuruan AND id_peserta=$id_peserta ");

		


	}

	

	header("Location: ../../admin/detail_jadwal.php?id=".$id_jadwal);



	