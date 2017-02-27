<?php
	/* Koneksi ke DB */
    require_once ('proses/koneksi_db.php');
	require __DIR__."/vendor/autoload.php";

	$GLOBALS['lang'] = 'pl';

    $check_sql = "SELECT no_registrasi FROM registrasi_pelatihan WHERE id_kejuruan = '1' ORDER BY tanggal_registrasi DESC";
	$result = mysqli_query($connect, $check_sql);
	// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// $output_array=array();
	$p = "0117";
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	    preg_match("/^".$p.".*/", $row['no_registrasi'], $output_array);
	    if (!empty($output_array))
	    	$no[] = $output_array[0];
	}
	    // preg_match("/^0117.*/", $no, $output_array);

	// inspect query
	if (!empty($no)){
		rsort($no);
		var_dump($no[0]);
	}
	else
		var_dump("expression");

// var_dump($row); die();
