<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');

	session_start();

	$token = $_GET['token'];
	$table = $_GET['type'];
	$id_column = 'id_'. $table;

	// mengecek token
	$check_sql = "SELECT $id_column FROM $table WHERE token = '$token'";
	$result = mysqli_query($connect, $check_sql);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if ($row[$id_column] != null) {
		$_SESSION['id-operator'] = $row[$id_column];
		// redirect ke ganti_password
		header("Location: http://". $_SERVER['HTTP_HOST']. "/admin/ganti_password.php");
		die();
	}
	else{
		$_SESSION['error'] = "Token telah kadaluarsa.<br>
							Silakan masukkan email kembali.";
		// redirect ke beranda
		header("Location: http://". $_SERVER['HTTP_HOST']. "/admin/login.php");
		die();
	}