
<div class="row">
	<div class="col-lg-12">

	<?php
	if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung') {
		echo "<h2 class='page-header'>Total Usaha di Desa ".$lihat." : ".$dataDesa."</h2>";
	}else{
		echo "<h2 class='page-header'>Total Usaha Kecamatan Tahunan  : ". $jmlData."</h2>";
	}
	?>

	</div>
</div> <!-- end row -->

<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php 
							if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung'){
								echo $jmlIndustriDesa;;
							}else{
								echo $jmlIndustri;
							}
							?></div>
							<div class="text-muted">pengrajin</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php 
								if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung'){
								echo $jmlJasaDesa;;
							}else{
								echo $jmlJasa;
							}
							?></div>
							<div class="text-muted">toko</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php 
								if ($lihat == 'tahunan' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung'){
								echo $jmlDagangDesa;;
							}else{
								echo $jmlDagang;
							}
							?></div>
							<div class="text-muted">pengajin dan toko</div>
						</div>
					</div>
				</div>
			</div>
</div><!--/.row-->

			<div class="panel-heading">
				Data Sigfurniture Kecamatan Tahunan
			</div>
			<div style="margin-top:10px; padding: 0 5px;">
			<a href="?tambah"><button class="btn btn-info"> Tambah Data usaha</button></a>
			<div class="pull-right">
					<form method="GET" action="">
						Tampilkan : 
						<select class="btn btn-info" style="text-align:left;" name="dataUmkm">
							<option value="<?php echo $lihat; ?>"><?php echo $lihat; ?></option>
									<option value="tahunan">tahunan</option>
									<option value="teluk awur">teluk awur</option>
									<option value="semat">semat</option>
									<option value="platar">platar</option>
									<option value="mangunan">mangunan</option>
									<option value="petekeyan">petekeyan</option>
									<option value="sukodono">sukodono</option>
									<option value="langon">langon</option>
									<option value="ngabol">ngabol</option>
									<option value="lemper">mantingan</option>
									<option value="demangan">demangan</option>
									<option value="tegalsambi">tegalsambi</option>
									<option value="krapyak">krapyak</option>
									<option value="senenan">senenan</option>
									<option value="kecapi">kecapi</option>
						</select>
						<input class="btn btn-primary" type="submit" name="tampil" value="terapkan">
					</form>
				</div>
				<div> <!-- end style -->
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<thead>
							<th>No</th>
							<th>Nama Pemilik</th>
							<th>Nama Usaha</th>
							<th>Desa</th>
							<th>Alamat</th>
							<th>Jenis Usaha</th>
							<th>Kriteria Usaha</th>
							<th>Kontak</th>
							<th></th>
						</thead>
					</tr>
					<?php 
					$no = 1;
					if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung'){
						if ($dataDesa < 1) {
							echo "<tr>
								<td colspan='10' class='alert-danger'>Tidak ada data UMKM !</td>
								</tr>";
						}else{
							while ($row = mysqli_fetch_array($showDesa)) {
								echo "<tr>
									<td>$no</td>
									<td>".$row['nama_pemilik']."</td>
									<td>".$row['nama_umkm']."</td>
									<td>".$row['desa']."</td>
									<td>".$row['alamat']."</td>
									<td>".$row['usaha']."</td>
									<td>".$row['kriteria']."</td>
									<td>".$row['kontak']."</td>
									<td><a href='?edit=$row[0]'><span class='glyphicon glyphicon-edit' title='Edit'></span></a> | <a href='?hapus=$row[0]'><span class='glyphicon glyphicon-trash' title='Hapus'></span></a></td>
								</tr>";
							$no++;
								}
						}
					}elseif ($lihat == 'Industri' || $lihat == 'Jasa' || $lihat == 'Dagang') {
						if ($jenisLihat < 1) {
							echo "<tr>
								<td colspan='10' class='alert-danger'>Tidak ada data UMKM !</td>
								</tr>";
						}else{
							while ($row = mysqli_fetch_array($lihatJenis)) {
								echo "<tr>
									<td>$no</td>
									<td>".$row['nama_pemilik']."</td>
									<td>".$row['nama_umkm']."</td>
									<td>".$row['desa']."</td>
									<td>".$row['alamat']."</td>
									<td>".$row['usaha']."</td>
									<td>".$row['kriteria']."</td>
									<td>".$row['kontak']."</td>
									<td><a href='?edit=$row[0]'><span class='glyphicon glyphicon-edit'></span></a> | <a href='?hapus=$row[0]'><span class='glyphicon glyphicon-trash'></span></a></td>
								</tr>";
							$no++;
								}
						}
					}elseif ($lihat == 'Mikro' || $lihat == 'Kecil' || $lihat == 'Menengah') {
						if ($kriteriaLihat < 1) {
							echo "<tr>
								<td colspan='10' class='alert-danger'>Tidak ada data UMKM !</td>
								</tr>";
						}else{
							while ($row = mysqli_fetch_array($lihatKriteria)) {
								echo "<tr>
									<td>$no</td>
									<td>".$row['nama_pemilik']."</td>
									<td>".$row['nama_umkm']."</td>
									<td>".$row['desa']."</td>
									<td>".$row['alamat']."</td>
									<td>".$row['usaha']."</td>
									<td>".$row['kriteria']."</td>
									<td>".$row['kontak']."</td>
									<td><a href='?edit=$row[0]'><span class='glyphicon glyphicon-edit' title='Edit'></span></a> | <a href='?hapus=$row[0]'><span class='glyphicon glyphicon-trash' title='Hapus'></span></a></td>
								</tr>";
							$no++;
								}
						}
					}
					else{
						while ($row = mysqli_fetch_array($data)) {
						echo "<tr>
							<td>$no</td>
							<td>".$row['nama_pemilik']."</td>
							<td>".$row['nama_umkm']."</td>
							<td>".$row['desa']."</td>
							<td>".$row['alamat']."</td>
							<td>".$row['usaha']."</td>
							<td>".$row['kriteria']."</td>
							<td>".$row['kontak']."</td>
							<td><a href='?edit=$row[0]'><span class='glyphicon glyphicon-edit' title='Edit'></span></a> | <a href='?hapus=$row[0]'><span class='glyphicon glyphicon-trash' title='Hapus'></span></a></td>
						</tr>";
						$no++;
					}
				}
					?>
				</table>
			</div>
		</div>
	</div>
</div>