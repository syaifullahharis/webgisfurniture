<script>
var myCenter=new google.maps.LatLng(<?php echo $rowData['lat'].",".$rowData['longi'];?>);

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

<div class="rows">
	<div class="col-md-8">
		<h2><?php echo $rowData['nama_umkm']; ?> <span class="badge pull-right">Usaha <?php echo $rowData['kriteria']; ?></span></h2>
		<div class="detail">
			<table class="table">
				<tr>
					<td>Nama Pemilik</td>
					<td> : </td>
					<td><?php echo $rowData['nama_pemilik']; ?></td>
				</tr>
				<tr>
					<td>Kategori Usaha</td>
					<td> : </td>
					<td><?php echo $rowData['usaha']; ?></td>
				</tr>
				<tr>
					<td>Jenis Usaha</td>
					<td> : </td>
					<td><?php echo $rowData['jenis_usaha']; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> : </td>
					<td><?php echo $rowData['alamat'].", ".$rowData['desa'].", Jepara."; ?></td>
				</tr>
				<tr>
					<td>Kontak</td>
					<td> : </td>
					<td><?php echo $rowData['kontak']; ?></td>
				</tr>
			</table>
		</div>

	</div>
	<div class="col-md-4">
		<div class="panel panel-success lokasi">
			<div class="panel-heading">
				<strong>Lokasi Usaha</strong>
			</div>
			<div class="panel-body">
				<div class="maps-lokasi">
					<div id="googleMap" style="width:100%;height:275px;"></div>
				</div>
			</div> <!-- end panel-body --> 
		</div> <!-- end panel -->
	</div>
</div> <!-- end rows -->