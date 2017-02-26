<?php
	session_start();
	$_SESSION['login-peserta'] = false;
	session_unset($_SESSION['id-peserta']);
	$_SESSION['success'] = "Logout Sukses";

	header("Location: ../../");
	die();