<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');

	session_start();

	$token = $_GET['token'];

	$no_ktp = explode('-', $token);
	$no_ktp = $no_ktp[0];

	// mengecek token
	$check_sql = "SELECT id FROM peserta WHERE no_ktp = '$no_ktp' AND token = '$token'";
	$result = mysqli_query($connect, $check_sql);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if ($row['id'] != null) {
		$_SESSION['id-peserta'] = $row['id'];
		// redirect ke ganti_password
		header("Location: http://". $_SERVER['HTTP_HOST']. "/peserta/ganti_password.php");
		die();
	}
	else{
		$_SESSION['error'] = "Token telah kadaluarsa.<br>
							Silakan masukkan email kembali.";
		// redirect ke beranda
		header("Location: http://". $_SERVER['HTTP_HOST']. "/peserta/kirim_email.php");
		die();
	}