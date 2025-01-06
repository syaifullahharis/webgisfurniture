<?php 
$no = 1;
?>
<div class="rows">
	<div class="col-md-8">
		<h2 class="page-header">Desa <?php echo $deso; ?></h2>
		<div class="maps">
			<div id="googleMap" style="width:100%;height:430px;"></div>
		</div>

	</div>
	<div class="col-md-4">
		<div class="thumbnail">
			<img src="img/logo.png">
				<h6>Pemerintah Kabupaten Jepara Kecamatan Jepara</h6>
		</div>
		<div class="panel panel-success panel-margin-top">
			<div class="panel-heading">
				<strong>Usaha Desa <?php echo $deso; ?></strong> <span class="badge pull-right"><?php echo $peta; ?></span>
			</div>
			<div class="panel-body">
				<ul class="list-group">
				  <a href="?peta=<?php echo $deso; ?>&industri=<?php echo $deso; ?>"><li class="list-group-item list-group-item-info">Industri <span class="badge"><?php echo $ind; ?></span></li></a>
				  <a href="?peta=<?php echo $deso; ?>&dagang=<?php echo $deso; ?>"><li class="list-group-item list-group-item-warning">Dagang <span class="badge"><?php echo $dag; ?></span></li></a>
				  <a href="?peta=<?php echo $deso; ?>&jasa=<?php echo $deso; ?>"><li class="list-group-item list-group-item-danger">Jasa <span class="badge"><?php echo $jas; ?></span></li></a>
				</ul>
			</div> <!-- end panel-body --> 
		</div> <!-- end panel -->
	</div>
</div> <!-- end rows -->

<?php

	if (isset($_GET['industri'])) {
?>
<div class="rows">
	<div class="panel panel-default" style="clear:both">
		<div class="panel-heading">
		<?php if ($_GET['industri']=='Semua') {
			echo "Data UMKM Desa $deso";
		}else{
			echo "Data UMKM Industri Desa $deso";
		}?>
		<div class="kategori pull-right"><a href="?peta=<?php echo $deso; ?>&industri=<?php echo $deso; ?>&kategori=Menengah" class="btn btn-default">Menengah</a> | <a href="?peta=<?php echo $deso; ?>&industri=<?php echo $deso; ?>&kategori=Kecil" class="btn btn-default">Kecil</a> | <a href="?peta=<?php echo $deso; ?>&industri=<?php echo $deso; ?>&kategori=Mikro" class="btn btn-default">Mikro</a> | <a href="?peta=<?php echo $deso; ?>&industri=Semua" class="btn btn-default">Semua</a></div>
		</div>
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
					if($_GET['kategori']=='Menengah'){
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
					}elseif($_GET['kategori']=='Kecil'){
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
					}elseif($_GET['kategori']=='Mikro'){
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
					}elseif($_GET['industri']=='Semua'){
						while ($row = mysqli_fetch_array($showPeta)) {
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
						while ($row = mysqli_fetch_array($industriDesa)) {
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

<?php
	}elseif (isset($_GET['dagang'])) {
?>

<div class="rows">
	<div class="panel panel-default" style="clear:both">
		<div class="panel-heading">
		<?php if ($_GET['dagang']=='Semua') {
			echo "Data UMKM Desa $deso";
		}else{
			echo "Data UMKM Dagang Desa $deso";
		}?> <div class="kategori pull-right"><a href="?peta=<?php echo $deso; ?>&dagang=<?php echo $deso; ?>&kategori=Menengah" class="btn btn-default">Menengah</a> | <a href="?peta=<?php echo $deso; ?>&dagang=<?php echo $deso; ?>&kategori=Kecil" class="btn btn-default">Kecil</a> | <a href="?peta=<?php echo $deso; ?>&dagang=<?php echo $deso; ?>&kategori=Mikro" class="btn btn-default">Mikro</a> | <a href="?peta=<?php echo $deso; ?>&dagang=Semua" class="btn btn-default">Semua</a></div>
		</div>
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
					if($_GET['kategori']=='Menengah'){
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
					}elseif($_GET['kategori']=='Kecil'){
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
					}elseif($_GET['kategori']=='Mikro'){
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
					}elseif($_GET['dagang']=='Semua'){
						while ($row = mysqli_fetch_array($showPeta)) {
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
						while ($row = mysqli_fetch_array($dagangDesa)) {
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

<?php
	}elseif (isset($_GET['jasa'])) {
?>

<div class="rows">
	<div class="panel panel-default" style="clear:both">
		<div class="panel-heading">
		<?php if ($_GET['jasa']=='Semua') {
			echo "Data UMKM Desa $deso";
		}else{
			echo "Data UMKM Jasa Desa $deso";
		}?> <div class="kategori pull-right"><a href="?peta=<?php echo $deso; ?>&jasa=<?php echo $deso; ?>&kategori=Menengah" class="btn btn-default">Menengah</a> | <a href="?peta=<?php echo $deso; ?>&jasa=<?php echo $deso; ?>&kategori=Kecil" class="btn btn-default">Kecil</a> | <a href="?peta=<?php echo $deso; ?>&jasa=<?php echo $deso; ?>&kategori=Mikro" class="btn btn-default">Mikro</a> | <a href="?peta=<?php echo $deso; ?>&jasa=Semua" class="btn btn-default">Semua</a></div>
		</div>
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
					if($_GET['kategori']=='Menengah'){
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
					}elseif($_GET['kategori']=='Kecil'){
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
					}elseif($_GET['kategori']=='Mikro'){
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
					}elseif($_GET['jasa']=='Semua'){
						while ($row = mysqli_fetch_array($showPeta)) {
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
						while ($row = mysqli_fetch_array($jasaDesa)) {
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

<?php } ?>

<script>
var myCenter=new google.maps.LatLng(<?php echo $iniDesa['lati'].",".$iniDesa['longi'];?>);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
