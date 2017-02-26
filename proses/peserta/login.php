<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');

	session_start();

	$email = $_POST['blk_email'];
	$password = $_POST['blk_password'];

	$previous_page = $_POST['page'];
	// mengecek password
	$get_pass_sql = "SELECT id, password FROM peserta WHERE email = '$email'";
	$result = mysqli_query($connect, $get_pass_sql);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	$password = md5($password);

	if (isset($row['password']) && $row['password'] == $password) {
		$_SESSION['success'] = "Login peserta berhasil";
		$_SESSION['login-peserta'] = true;
		$_SESSION['id-peserta'] = $row['id'];
	} else {
		$_SESSION['error'] = "Email atau password tidak benar";
	}

	header("Location: ../../". $previous_page .".php");
	die();