<?php
	/* Koneksi ke DB */
    require_once ('proses/koneksi_db.php');
    require_once ('proses/convert_date.php');

    $table = 'peserta';
    $nama = 'nama';

    $sql = "SELECT * FROM $table";
    $result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	

	// echo $row['id'];
    var_dump($row[$nama]);

// var_dump($row); die();
