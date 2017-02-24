<?php
  include "header.php";
?>

<div class="page">
	<div class="page-title">
		<div class="container">
			<h3>Pengumuman Hasil Seleksi</h3>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="filter">
				<!-- <div class="filter-title">
					<h4>Filter</h4>
				</div> -->
				<div class="row">
					<form>
						<div class="form-group col-sm-3">
							<label>Tahun</label>
							<select class="form-control" name="year">
								<option>2017</option>
								<option>2016</option>
								<option>2015</option>
								<option>2014</option>
							</select>
						</div>
						<div class="form-group col-sm-3">
							<label>Kejuruan</label>
							<select class="form-control" name="field">
								<option>Desain Grafis Lanjutan</option>
								<option>Tata Rias</option>
								<option>Bahasa Inggris</option>
								<option>Menjahit</option>
							</select>
						</div>
						<div class="form-group col-sm-3">
							<label>Gelombang</label>
							<select class="form-control" name="cloter">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
						<div class="form-group col-sm-3">
							<label>Paket</label>
							<select class="form-control" name="cloter">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
						<div class="form-group col-sm-12">
							<input class="btn btn-primary pull-right" type="submit" value="Filter">
						</div>
					</form>
				</div>
			</div>
			<br>
			<div>
				<h4 class="schedule-title">Daftar Peserta Lolos</h4>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="number">No</th>
							<th>Nomor Pendaftaran</th>
							<th>Nama</th>
							<th>Alamat</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="number">1</td>
							<td>2512</td>
							<td>Ahmad</td>
							<td>Jl. Durian No. 12</td>
						</tr>
						<tr>
							<td class="number">2</td>
							<td>2542</td>
							<td>Faris</td>
							<td>Jl. Melati No. 32</td>
						</tr>
						<tr>
							<td class="number">3</td>
							<td>2543</td>
							<td>Ali</td>
							<td>Jl. Pahlawan No. 23</td>
						</tr>
						<tr>
							<td class="number">4</td>
							<td>2557</td>
							<td>Indri</td>
							<td>Jl. Kapuas No. 17</td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Pagination -->
			<nav aria-label="Page navigation">
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>	<!-- ./content -->
</div>

<?php
  include "footer.php";
?>


  </body>
</html>