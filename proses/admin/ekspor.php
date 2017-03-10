<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');

    session_start();

    $date = date('Y-m-d:H-i-s');
    $filename = 'BlkDemakBackup'. $date .'.sql';
    $exportPath ='../../database/'. $filename;

    $return_var = NULL;
	$output = NULL;

	// untuk linux
    $sql = "/opt/lampp/bin/mysqldump --user=$username --password=$password --host=$host $database > $exportPath";

    // untuk windows
    // $sql = "mysqldump --user=$username --password=$password --host=$host $database > $exportPath";
   
	// ekspor sql
	exec($sql, $output, $return_var);

	if($return_var != 0) {
		$_SESSION['error'] = "Basis data gagal diekspor";
	}
	else{
		$_SESSION['success'] = "Basis data telah diekspor ke dalam folder database dengan nama ". $filename;
	}

	// redirect ke beranda
	header("Location: ../../admin/ekspor.php");
	die();