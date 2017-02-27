<?php
	
	//konversi status registrasi peserta
	function convertStatusRegistrasi($status){


		switch ($status) {
			case 1:
				$result = '<span class="label label-danger">Belum Dipanggil</span>';
				break;

			case 2:
				$result = '<span class="label label-success">Sudah Dipanggil</span>';
				break;

			case 3:
				$result = '<span class="label label-danger">Belum Lulus Tes dan Wawancara</span>';
				break;

			case 4:
				$result = '<span class="label label-success">Lulus Tes dan Wawancara</span>';
				break;

			case 5:
				$result = '<span class="label label-danger">Belum Lulus Pelatihan</span>';
				break;

			case 6:
				$result = '<span class="label label-success">Lulus Pelatihan</span>';
				break;

			default:
				$result = '<span class="label label-warning">Status Undefined</span>';
				break;
		}

		return $result;
	}

?>