<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');

	require '_send_email.php';

	session_start();

	$email = $_POST['blk_email'];

	$check_sql = "SELECT id, no_ktp, nama FROM peserta WHERE email = '$email'";
	$result = mysqli_query($connect, $check_sql);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if ($row['no_ktp'] != null) {
		// membuat token dengan fungsi dari file helper.php
		$timestamp = date('Ymd-His');
		$token = $row['no_ktp'] ."-". $timestamp;

		$id = $row['id'];
		$sql = "UPDATE peserta SET token='$token' WHERE id=$id";

		if (mysqli_query($connect, $sql)){
			// kirim notifikasi email
			$link = "http://". $_SERVER['HTTP_HOST'] ."/proses/peserta/cek_email.php?token=". $token;
			$subyek = "Reset Password";
			$pesanEmail = "Halo, " .$row['nama']. ".<br>
							Silakan klik link di bawah ini untuk mengganti password Anda.<br>
							<a href='". $link ."'>". $link ."</a>
							<br><br>
							BLK Kabupaten Demak<br>
							Jl. Kantonsari No. 19 Demak (Belakang kantor BAPERMAS/PNPM)<br>
							0291-681718<br>
							blkdemak@gmail.com";

			$pesanSukses = "Silakan cek email Anda untuk mengganti password.";

			send_email($email, $nama, $subyek, $pesanEmail, $pesanSukses);
		}
		else {
			die("QUERY UPDATE FAILED : ". mysqli_error($connect));
			$_SESSION['error'] = mysqli_error($connect);
		}
	}
	else {
		die("QUERY UPDATE FAILED : ". mysqli_error($connect));
		$_SESSION['error'] = "Email yang Anda masukkan belum terdaftar.";
	}
	mysqli_close($connect);

	// redirect ke halaman kirim_email
	header("Location: http://". $_SERVER['HTTP_HOST']. "/peserta/kirim_email.php");
	die();