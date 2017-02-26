<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');

	session_start();

	$nama = $_POST['blk_nama'];
	$no_ktp = $_POST['no_ktp'];
	$telepon = $_POST['telepon'];
	$email = $_POST['blk_email'];
	$password = $_POST['blk_password'];
	$password_confirm = $_POST['blk_password_confirm'];
	$tanggal_daftar = date('Y-n-j');

	$previous_page = $_POST['page'];

	// mengecek duplikasi no ktp
	$check_ktp_sql = "SELECT no_ktp FROM peserta WHERE no_ktp = '$no_ktp'";
	$result = mysqli_query($connect, $check_ktp_sql);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if ($row != null) {
		$_SESSION['error'] = "Nomor KTP Anda telah terdaftar sebagai peserta";
		header("Location: ../../". $previous_page .".php");
		die();
	}

	if($password === $password_confirm){
		$password = md5($password); 

		$sql = "INSERT INTO peserta (nama, no_ktp, telepon, email, password, tanggal_daftar)
				VALUES ('$nama', '$no_ktp', '$telepon', '$email', '$password', '$tanggal_daftar')";
		// $insert = mysqli_query($connect, $sql);
		if (mysqli_query($connect, $sql)){
			$_SESSION['success'] = "Pendaftaran Sukses";
			$_SESSION['login-peserta'] = true;
			$_SESSION['ktp-peserta'] = $no_ktp;
		} else {
			die("QUERY UPDATE FAILED : ". mysqli_error($connect));
			$_SESSION['error'] = "Pendaftaran Gagal";
		}
		mysqli_close($connect);
	} else{
		$_SESSION['error'] = "Password dan Ulangi Password tidak sesuai";
	}

	// redirect
	header("Location: ../../peserta/");
	die();