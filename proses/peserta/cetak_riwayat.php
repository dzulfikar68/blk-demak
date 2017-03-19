<?php
	/* Koneksi ke DB */
    require_once ('../koneksi_db.php');
	require_once ('../helper.php');

	session_start();

	$no_registrasi = $_GET['data-riwayat'];
	$id_peserta = $_GET['data-peserta'];

	$sql = "SELECT peserta.nama, peserta.alamat, peserta.telepon, registrasi_pelatihan.no_registrasi, registrasi_pelatihan.status FROM peserta, registrasi_pelatihan WHERE peserta.id='$id_peserta'
		AND registrasi_pelatihan.no_registrasi= '$no_registrasi'";

	$result = mysqli_query($connect, $sql);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div>
			<table>
				<tbody>
					<tr>
						<td>Nama</td>
						<td><?php echo $row['nama']; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?php echo $row['alamat']; ?></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td><?php echo $row['telepon']; ?></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><?php echo convertStatusRegistrasi($row['status']); ?></td>
					</tr>
					<tr>
						<td>No Registrasi</td>
						<td><?php echo $row['no_registrasi']; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>