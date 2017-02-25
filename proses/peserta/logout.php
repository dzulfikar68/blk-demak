<?php
	session_start();
	$_SESSION['login-peserta'] = false;
	$_SESSION['success'] = "Logout Sukses";

	header("Location: ../../");
	die();