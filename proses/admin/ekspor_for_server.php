<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');

    session_start();

    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d H-i-s');
    $filename = 'BlkDemakBackup '. $date .'.xls';
    $exportPath ='../../database/'. $filename;

    $return_var = NULL;
	$output = NULL;

    // untuk server
	require_once '../../PHPExcel-1.8/Classes/PHPExcel.php';
	require_once '../../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
	
	$objPHPExcel = new PHPExcel();

	$tables = ['admin', 'data_kerja', 'jadwal', 'karyawan', 'kejuruan', 'pesan', 'peserta',
			'registrasi_pelatihan'];

	$sheetIndex = 0;
	foreach($tables as $table){
	    $sql = "SELECT * FROM $table";
	    $result = mysqli_query($connect, $sql);

	    // create sheet
	    $objPHPExcel->createSheet();

	    // Initialise the Excel row number 
		$rowCount = 1;  

	    //start of printing column names as names of MySQL fields  
		$column = 'A';

	    // Create a first sheet, representing sales data
		$objPHPExcel->setActiveSheetIndex($sheetIndex);
		for ($i = 0; $i < mysqli_num_fields($result); $i++) {
	            $property = mysqli_fetch_field($result);
		    $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, $property->name);
		    $column++;
		}

		$rowCount = 2;
		while($row = mysqli_fetch_array($result)){
			$column = 'A';
			for($i=0; $i < mysqli_num_fields($result); $i++) {  
			    if(!isset($row[$i]))  
			        $value = NULL;  
			    elseif ($row[$i] != "")  
			        $value = strip_tags($row[$i]);  
			    else  
			        $value = "";

			    $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, $value);
	                    $objPHPExcel->getActiveSheet()->getColumnDimension($column)
	        ->setAutoSize(true);
			    $column++;
			}  

			$rowCount++;
		}

		// Rename sheet
		$objPHPExcel->getActiveSheet()->setTitle("$table");

		$sheetIndex++;
	}

	// Redirect output to a client's web browser (Excel5) 
	header('Content-Type: application/vnd.ms-excel'); 
	header('Content-Disposition: attachment;filename="results.xls"'); 
	header('Cache-Control: max-age=0'); 
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save("$exportPath");

	if(!file_exists($exportPath)) {
		$_SESSION['error'] = "Basis data gagal diekspor";
	}
	else{
		$_SESSION['success'] = "Basis data telah diekspor dengan nama ". $filename;
	}

	// download basis data
	if (file_exists($exportPath)) {
	    header('Content-Description: File Transfer');
	    header('Content-Type: application/octet-stream');
	    header('Content-Disposition: attachment; filename="'.basename($exportPath).'"');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($exportPath));
	    readfile($exportPath);
	    exit;
	}

	// redirect ke beranda
	header("Location: ../../admin/ekspor.php");
	die();