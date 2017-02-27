<?php
	
	require_once ('../../fpdf/mc_table.php');
	require_once ('../koneksi_db.php');
	require_once ('../convert_date.php');
	
	session_start();

	$id_jadwal = $_GET['id_jadwal'];

	$query = mysqli_query($connect, "SELECT * FROM jadwal, kejuruan WHERE jadwal.id_kejuruan=kejuruan.id_kejuruan AND id_jadwal=$id_jadwal ");

    $data = mysqli_fetch_object($query);

    $nama_kejuruan = $data->nama_kejuruan;

    $kapasitas = $data->kapasitas;
    $sumber_dana = $data->sumber_dana;

    $tgl_pelaksanaan = concateDate($data->pelatihan_awal, $data->pelatihan_akhir);


    $pdf = new PDF_MC_Table();
	
	$pdf->AddPage('L', 'A4');

	//set font header
	$pdf->SetFont('Arial','B',16);

	$pdf->setXY(10, 10);

	$pdf->Cell(280,7,'Absensi Pelatihan kejuruan '.$nama_kejuruan.'',0, 0, 'C');
	$pdf->ln();

	$pdf->SetFont('Arial','',12);
	$pdf->Cell(280,7,'Tanggal '.$tgl_pelaksanaan.'',0, 0, 'C');
	$pdf->ln();

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(280,7,'Sumber dana = '.$sumber_dana.' | Kapasitas = '.$kapasitas.'',0, 0, 'C');

	$pdf->setXY(10, 40);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(40,7,'Tanggal ...../....../......',0, 0, 'C');
	$pdf->ln();

	$pdf->Cell(50,7,'Nama Lengkap',1, 0, 'C');
	$pdf->Cell(30,7,'No HP',1, 0, 'C');
	$pdf->Cell(30,7,'Email',1, 0, 'C');
	$pdf->Cell(70,7,'Alamat',1, 0, 'C');
	$pdf->Cell(50,7,'Tempat, Tanggal Lahir',1, 0, 'C');
	$pdf->Cell(20,7,'Pendidikan',1, 0, 'C');
	$pdf->Cell(30,7,'Tanda tangan',1, 0, 'C');
	$pdf->Ln();


	
	$query = mysqli_query($connect, "SELECT * FROM jadwal_assign, peserta, jadwal WHERE jadwal_assign.id_jadwal = jadwal.id_jadwal AND jadwal_assign.id_peserta=peserta.id AND jadwal_assign.id_jadwal = $id_jadwal ORDER BY jadwal_assign.date_created DESC");

	if(!$query){
		die("QUERY SELCT DATA CETAK FAILED : ". mysqli_error($connect));	
	}

	$pdf->SetWidths(array(50,30,30,70, 50, 20, 30));

	while ($row=mysqli_fetch_object($query)) {
		
		$tgl_lahir = strtotime($row->tanggal_lahir);
		$tgl_lahir = date('d M Y', $tgl_lahir);

		$ttl = $row->tempat_lahir." ".$tgl_lahir;

		$pdf->Row(array($row->nama, $row->telepon, $row->email, $row->alamat, $ttl, 'pendidikan', ''));
		/*$pdf->Cell(50,7,$row->nama,1);
		$pdf->Cell(30,7,$row->telepon,1);
		$pdf->MultiCell(30,7,$row->email,1);
		$pdf->Cell(70,7,$row->alamat,1);
		$pdf->Cell(50,7,'Tempat, Tanggal Lahir',1);
		$pdf->Cell(20,7,'Pendidikan',1);
		$pdf->Cell(30,7,'',1);*/
		$pdf->Ln();

	}

	$pdf->Output();