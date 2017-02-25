<?php
	session_start();
	if ($_SESSION['login-peserta']) {
		echo "Login Sukses";
	}
?>