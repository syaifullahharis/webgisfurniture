<!-- page header -->
		<div class="row">
			<div class="col-lg-12">
				<?php
				if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung') {
					echo "<h2 class='page-header'>Total Usaha di Desa ".$lihat." : ".$dataDesa."</h2>";
				}else{
					echo "<h2 class='page-header'>Total Usaha Di Kecamatan tahunan  : ". $jmlData."</h2>";
				}
				?>
			</div>
		</div><!--/.row-->

<!-- widget -->
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked "><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php 
								if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung'){
									echo $jmlIndustriDesa;
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
								echo $jmlJasaDesa;
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
							if ($lihat == 'Tahunan' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung'){
								echo $jmlDagangDesa;
							}else{
								echo $jmlDagang;
							}
							?></div>
							<div class="text-muted">pengrajin dan toko</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

					 <?php 
					if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung'){
						echo "Data Usaha Desa $lihat";
					}else{
						echo "Data Usaha Kecamatan Tahunan";
					}?>
				</div>

				<?php 
					if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung' || $lihat == 'Kecil' || $lihat == 'Menengah' || $lihat == 'Mikro' || $lihat == 'Dagang' || $lihat == 'Jasa' || $lihat == 'Industri'){?>
						<a class="btn btn-info margin-data" href="?dataUmkm=<?php echo $lihat;?>">Data usaha furniture <?php echo $lihat;?></a>
						<?php 
							if ($lihat == 'Baddurih' || $lihat == 'Barurambat Timur' || $lihat == 'Buddagan' || $lihat == 'Buddih' || $lihat == 'Bunder' || $lihat == 'Dasok' || $lihat == 'Durbuk' || $lihat == 'Jarin' || $lihat == 'Lawangan Daya' || $lihat == 'Lemper' || $lihat == 'Majungan' || $lihat == 'Murtajih' || $lihat == 'Padelegan' || $lihat == 'Pademawu Barat' || $lihat == 'Pademawu Timur' || $lihat == 'Pagagan' || $lihat == 'Prekbun' || $lihat == 'Sentol' || $lihat == 'Sopaah' || $lihat == 'Sumedangan' || $lihat == 'Tambung' || $lihat == 'Tanjung'){
								echo "<a href='?dataUmkm=".$lihat."&usaha=Industri' class='btn btn-default'>Industri</a> | <a href='?dataUmkm=".$lihat."&usaha=Dagang' class='btn btn-default'>Dagang</a> | <a href='?dataUmkm=".$lihat."&usaha=Jasa' class='btn btn-default'>Jasa</a>";
								if (isset($_GET['usaha'])) {
									echo " | --> | <a href='?dataUmkm=".$lihat."&usaha=".$_GET['usaha']."&kategori=Mikro&peta=".$lihat."' class='btn btn-default'>Mikro</a> | <a href='?dataUmkm=".$lihat."&usaha=".$_GET['usaha']."&kategori=Kecil&peta=".$lihat."' class='btn btn-default'>Kecil</a> | <a href='?dataUmkm=".$lihat."&usaha=".$_GET['usaha']."&kategori=Menengah&peta=".$lihat."' class='btn btn-default'>Menengah</a>";
								}
							}
					}else{?>
						<a href="?rekap"><button class="btn btn-info margin-data"> Lihat Data Rekapitulasi</button></a>
					<?php }?>
				

<div class="pull-right margin-data">
					<form method="GET" action="">
						Tampilkan : 
						<select class="btn btn-info" style="text-align:left;" name="dataUmkm">
							<option value="<?php echo $lihat; ?>"><?php echo $lihat; ?></option>
																<option value="Baddurih">tahunan</option>
									<option value="Barurambat Timur">teluk awur</option>
									<option value="Buddagan">semat</option>
									<option value="Buddih">platar</option>
									<option value="Bunder">mangunan</option>
									<option value="Dasok">petekeyan</option>
									<option value="Durbuk">sukodono</option>
									<option value="Jarin">langon</option>
									<option value="Lawangan Daya">ngabol</option>
									<option value="Lemper">mantingan</option>
									<option value="Majungan">demangan</option>
									<option value="Murtajih">tegalsambi</option>
									<option value="Padelegan">krapyak</option>
									<option value="Pademawu Barat">senenan</option>
									<option value="Pademawu Timur">kecapi</option>
						</select>
						<input class="btn btn-primary" type="submit" name="tampil" value="terapkan">
					</form>
</div> <!-- end pull-right -->
				<div class="panel-body">
					<table class="table table-hover">
					<tr>
						<thead>
							<th>No</th>
							<th>Nama Pemilik</th>
							<th>Nama UMKM</th>
							<th>Desa</th>
							<th>Alamat</th>
							<th>Jenis Usaha</th>
							<th>Kriteria Usaha</th>
							<th>Kontak</th>
							<th>Aksi</th>
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
							if ($_GET['usaha']=='Industri') {
								if ($_GET['kategori']=='Mikro') {
									while ($row = mysqli_fetch_array($industriMikroDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}elseif ($_GET['kategori']=='Kecil') {
									while ($row = mysqli_fetch_array($industriKecilDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}elseif ($_GET['kategori']=='Menengah') {
									while ($row = mysqli_fetch_array($industriMenengahDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}else{
									while ($row = mysqli_fetch_array($desaIndustri)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}
							}elseif ($_GET['usaha']=='Dagang') {
								if ($_GET['kategori']=='Mikro') {
									while ($row = mysqli_fetch_array($dagangMikroDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}elseif ($_GET['kategori']=='Kecil') {
									while ($row = mysqli_fetch_array($dagangKecilDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}elseif ($_GET['kategori']=='Menengah') {
									while ($row = mysqli_fetch_array($dagangMenengahDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}else{
								while ($row = mysqli_fetch_array($desaDagang)) {
								echo "<tr>
									<td>$no</td>
									<td>".$row['nama_pemilik']."</td>
									<td>".$row['nama_umkm']."</td>
									<td>".$row['desa']."</td>
									<td>".$row['alamat']."</td>
									<td>".$row['usaha']."</td>
									<td>".$row['kriteria']."</td>
									<td>".$row['kontak']."</td>
									<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
									</tr>";
								$no++;
									}
								}
							}elseif ($_GET['usaha']=='Jasa') {
								if ($_GET['kategori']=='Mikro') {
									while ($row = mysqli_fetch_array($jasaMikroDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}elseif ($_GET['kategori']=='Kecil') {
									while ($row = mysqli_fetch_array($jasaKecilDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}elseif ($_GET['kategori']=='Menengah') {
									while ($row = mysqli_fetch_array($jasaMenengahDesa)) {
									echo "<tr>
										<td>$no</td>
										<td>".$row['nama_pemilik']."</td>
										<td>".$row['nama_umkm']."</td>
										<td>".$row['desa']."</td>
										<td>".$row['alamat']."</td>
										<td>".$row['usaha']."</td>
										<td>".$row['kriteria']."</td>
										<td>".$row['kontak']."</td>
										<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
										</tr>";
									$no++;
										}
								}else{
								while ($row = mysqli_fetch_array($desaJasa)) {
								echo "<tr>
									<td>$no</td>
									<td>".$row['nama_pemilik']."</td>
									<td>".$row['nama_umkm']."</td>
									<td>".$row['desa']."</td>
									<td>".$row['alamat']."</td>
									<td>".$row['usaha']."</td>
									<td>".$row['kriteria']."</td>
									<td>".$row['kontak']."</td>
									<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
									</tr>";
								$no++;
									}
								}
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
									<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
								</tr>";
							$no++;
								}
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
									<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
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
									<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
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
							<td><a href='?umkm=$row[id]'><span class='glyphicon glyphicon-zoom-in'></span> Detail</a></td>
						</tr>";
						$no++;
					}
				}
					?>
				</table>
				</div>
			</div>
		</div>
	</div> <!-- end rows -->