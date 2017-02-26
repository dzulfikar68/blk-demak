<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');

	session_start();

	$id = $_POST['id_peserta'];
	$no_ktp = $_POST['no_ktp'];
	$nama = $_POST['blk_nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tempat_lahir = $_POST['tempat_lahir'];

	$tanggal = strtotime($_POST['tanggal_lahir']);
	$tanggal_lahir = date('Y-m-d', $tanggal);

	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$email = $_POST['blk_email'];
	$sumber_info = $_POST['sumber_info'];

	$password = $_POST['blk_password'];
	$password_confirm = $_POST['blk_password_confirm'];

	// password dan password confirm tidak sama
	if (($password != "") && ($password != $password_confirm)) {
		$_SESSION['error'] = "Password dan Ulangi Password tidak sesuai";
		header("Location: ../../peserta/edit.php");
		die();
	}
	elseif (($password != "") && ($password === $password_confirm)) {
		// enkripsi password
		$password = md5($password);
		// update data
		$sql = "UPDATE peserta
				SET no_ktp='$no_ktp', nama='$nama', jenis_kelamin='$jenis_kelamin',
					tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', agama='$agama',
					alamat = '$alamat', telepon='$telepon', email='$email', sumber_info='$sumber_info',
					password='$password'
				WHERE id=$id";
	}
	else {
		// update data
		$sql = "UPDATE peserta
				SET no_ktp='$no_ktp', nama='$nama', jenis_kelamin='$jenis_kelamin',
					tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', agama='$agama',
					alamat = '$alamat', telepon='$telepon', email='$email', sumber_info='$sumber_info'
				WHERE id=$id";
	}

	if (mysqli_query($connect, $sql)){
		$_SESSION['success'] = "Ubah Profil Sukses";
		header("Location: ../../../peserta/");
		die();
	} else {
		die("QUERY UPDATE FAILED : ". mysqli_error($connect));
		$_SESSION['error'] = "Ubah Profil Gagal";
	}
	mysqli_close($connect);