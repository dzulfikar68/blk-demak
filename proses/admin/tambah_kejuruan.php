<?php
	
	require_once ('../koneksi_db.php');

	session_start();

	$nama_kejuruan = $_POST['nama_kejuruan'];

	$query_check = mysqli_query($connect, "SELECT * FROM kejuruan WHERE nama_kejuruan='".$nama_kejuruan."' "); 

	if(!$query_check){

		die("QUERY CHECK FAILED : ". mysqli_error($connect));	

	}

	$num = mysqli_num_rows($query_check);	

	if($num>0){

		$_SESSION['error'] = "Tambah kejuruan gagal, kejuruan dengan nama <b>".$nama_kejuruan."</b> sudah ada!";

		//error sudah ada
	}else{


		$query_insert = mysqli_query($connect, "INSERT INTO kejuruan (nama_kejuruan)  values ('".$nama_kejuruan."')"); 

		if(!$query_insert){

			die("QUERY INSERT FAILED : ". mysqli_error($connect));	

		}

		$_SESSION['success'] = "Tambah kejuruan sukses!";

	}	

	header("Location: ../../admin/data_kejuruan.php");

	