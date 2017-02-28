<?php
	include 'header.php';

	session_start();
	$_SESSION['page'] = "peserta/tambah_data_kerja";
?>

<link href="../assets/css/jquery-ui.css" rel="stylesheet">

<div class="page">
	<div class="page-title">
		<div class="container">
			<h3>Profil Saya</h3>
		</div>
	</div>
	<div class="content" style="padding-top: 10px;">
		<div class="container">
			<div class="row profile">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Tambah Data Kerja
								<a href="index.php#job"><button type="button" class="btn btn-danger btn-xs">Batal</button></a>
							</h3>
						</div>
						<div class="panel-body">
							<form action="../proses/peserta/ubah_profil.php" method="POST">
								<input type="hidden" name="id_peserta" value="<?php session_start(); echo $_SESSION['id-peserta']?>">
								<table class="table">
									<tbody>
										<tr>
											<th class="attribute">Status Kerja*</th>
											<td class="colon">:</td>
											<td>
												<select class="form-control" name="status_kerja" required>
													<option value="sudah">Sudah bekerja</option>
													<option value="belum">Belum bekerja</option>
												</select>
											</td>
										</tr>
										<tr>
											<th class="attribute">Jenis Pekerjaan*</th>
											<td class="colon">:</td>
											<td>
												<select class="form-control" name="jenis_pekerjaan" required>
													<option value="sudah">Karyawan</option>
													<option value="belum">Wirausaha</option>
												</select>
											</td>
										</tr>
										<tr>
											<th class="attribute">Nama Perusahaan*</th>
											<td class="colon">:</td>
											<td>
												<input class="form-control" type="text" name="nama_perusahaan">
											</td>
										</tr>
										<tr>
											<th class="attribute">Alamat Perusahaan*</th>
											<td class="colon">:</td>
											<td>
												<input class="form-control" type="text" name="alamat_perusahaan">
											</td>
										</tr>
										<tr>
											<th class="attribute">Telepon Perusahaan*</th>
											<td class="colon">:</td>
											<td>
												<input class="form-control" type="text" name="telepon_perusahaan">
											</td>
										</tr>
										<tr>
											<td colspan="3"><i>*) Wajib diisi.</i></td>
										</tr>
										<tr>
											<th class="attribute"></th>
											<td class="colon"></td>
											<td><input class="btn btn-primary" type="submit" value="Kirim"></td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include 'footer.php';
?>

    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>

  </body>
</html>