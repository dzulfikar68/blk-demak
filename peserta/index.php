<?php
	include 'header.php';

	/* Koneksi ke DB */
    require_once ('../proses/koneksi_db.php');

	session_start();
	$_SESSION['page'] = "peserta/index";

	// ambil data peserta
	$id = $_SESSION['id-peserta'];
	if ($id != null) {
		$sql = "SELECT * FROM peserta WHERE id = '$id'";

		$result = mysqli_query($connect, $sql);

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	}
	else {
		// ambil data peserta untuk pendaftar baru
		$no_ktp = $_SESSION['ktp-peserta'];
		$sql = "SELECT * FROM peserta WHERE no_ktp = '$no_ktp'";

		$result = mysqli_query($connect, $sql);

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		$_SESSION['id-peserta'] = $row['id'];
	}
?>

<div class="page">
	<div class="page-title">
		<div class="container">
			<h3>Profil Saya</h3>
		</div>
	</div>
	<div class="content" style="padding-top: 10px;">
		<div class="container">
			<div class="row profile">
				<div class="col-sm-3">
					<ul class="nav nav-pills nav-stacked" role="tablist">
						<li id="profile-tab" role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profil</a></li>
						<li id="training-tab" role="presentation"><a href="#training" aria-controls="training" role="tab" data-toggle="tab">Riwayat Pelatihan</a></li>
						<li id="job-tab" role="presentation"><a href="#job" aria-controls="job" role="tab" data-toggle="tab">Data Kerja</a></li>
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="profile">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Profil
										<a href="edit.php"><button type="button" class="btn btn-primary btn-xs">Ubah</button></a>
									</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<tbody>
											<tr>
												<th class="attribute">No KTP</th>
												<td class="colon">:</td>
												<td><?php echo $row['no_ktp']; ?></td>
											</tr>
											<tr>
												<th class="attribute">Nama</th>
												<td class="colon">:</td>
												<td><?php echo $row['nama']; ?></td>
											</tr>
											<tr>
												<th class="attribute">Jenis Kelamin</th>
												<td class="colon">:</td>
												<td><?php echo $row['jenis_kelamin']; ?></td>
											</tr>
											<tr>
												<th class="attribute">Tempat dan Tanggal Lahir</th>
												<td class="colon">:</td>
												<td>
												<?php
												 if($row['tanggal_lahir'] != null) {
												 	$tanggal = strtotime($row['tanggal_lahir']);
												 	echo $row['tempat_lahir'] . ", " . date('j F Y', $tanggal);
												 }
												 ?>	
												 </td>
											</tr>
											<tr>
												<th class="attribute">Agama</th>
												<td class="colon">:</td>
												<td><?php echo $row['agama']; ?></td>
											</tr>
											<tr>
												<th class="attribute">Alamat</th>
												<td class="colon">:</td>
												<td><?php echo $row['alamat']; ?></td>
											</tr>
											<tr>
												<th class="attribute">No HP</th>
												<td class="colon">:</td>
												<td><?php echo $row['telepon']; ?></td>
											</tr>
											<tr>
												<th class="attribute">Email</th>
												<td class="colon">:</td>
												<td><?php echo $row['email']; ?></td>
											</tr>
											<tr>
												<th class="attribute">Pendidikan Terakhir</th>
												<td class="colon">:</td>
												<td><?php echo $row['pendidikan_terakhir']; ?></td>
											</tr>
											<tr>
												<th class="attribute">Anda mendapat informasi pendaftaran pelatihan kerja (BLK) dari</th>
												<td class="colon">:</td>
												<td><?php echo $row['sumber_info']; ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="training">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Riwayat Pelatihan</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Kejuruan</th>
												<th>Paket</th>
												<th>Gelombang</th>
												<th>Tahun</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Otomotif</td>
												<td>2</td>
												<td>1</td>
												<td>2015</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Menjahit</td>
												<td>1</td>
												<td>4</td>
												<td>2016</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Menjahit</td>
												<td>2</td>
												<td>1</td>
												<td>2017</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="job">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Data Kerja</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Kejuruan</th>
												<th>Perusahaan</th>
												<th>Tahun Mulai</th>
												<th>Tahun Selesai</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Komputer</td>
												<td>PT Digit Creative Studio</td>
												<td>2016</td>
												<td>Sekarang</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
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


  </body>
</html>