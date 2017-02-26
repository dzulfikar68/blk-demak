<?php
	session_start();
	$_SESSION['login-peserta'] = false;
	session_unset($_SESSION['id-peserta']);
	session_unset($_SESSION['ktp-peserta']);
	
	$_SESSION['success'] = "Logout Sukses";

	header("Location: ../../");
	die();