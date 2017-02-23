<?php
  include "../header.php";
?>

<div class="page">
	<div class="container">
		<h3 class="page-title">Profil Saya</h3>
		<div class="row profile">
			<div class="col-sm-3">
				<ul class="nav nav-pills nav-stacked" role="tablist">
					<li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profil</a></li>
					<li role="presentation"><a href="#training" aria-controls="training" role="tab" data-toggle="tab">Daftar Pelatihan</a></li>
					<li role="presentation"><a href="#job" aria-controls="job" role="tab" data-toggle="tab">Data Kerja</a></li>
				</ul>
			</div>
			<div class="col-sm-9">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="profile">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th class="attribute">No KTP</th>
									<td class="colon">:</td>
									<td>0393829839839</td>
								</tr>
								<tr>
									<th class="attribute">Nama</th>
									<td class="colon">:</td>
									<td>Ahmad</td>
								</tr>
								<tr>
									<th class="attribute">Jenis Kelamin</th>
									<td class="colon">:</td>
									<td>Laki-laki</td>
								</tr>
								<tr>
									<th class="attribute">Tempat dan Tanggal Lahir</th>
									<td class="colon">:</td>
									<td>Demak, 30 Maret 1978</td>
								</tr>
								<tr>
									<th class="attribute">Agama</th>
									<td class="colon">:</td>
									<td>Islam</td>
								</tr>
								<tr>
									<th class="attribute">Alamat</th>
									<td class="colon">:</td>
									<td>Jl. Durian No. 12</td>
								</tr>
								<tr>
									<th class="attribute">No HP</th>
									<td class="colon">:</td>
									<td>08xxxxxxx</td>
								</tr>
								<tr>
									<th class="attribute">Anda mendapat informasi pendaftaran pelatihan kerja (BLK) dari</th>
									<td class="colon">:</td>
									<td></td>
								</tr>
								<tr>
									<th class="attribute">Email</th>
									<td class="colon">:</td>
									<td>ahmad@example.com</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div role="tabpanel" class="tab-pane" id="training">
						Daftar Pelatihan
					</div>
					<div role="tabpanel" class="tab-pane" id="job">
						Data Kerja
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
  include "../footer.php";
?>


  </body>
</html>