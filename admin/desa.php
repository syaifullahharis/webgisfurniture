<?php
	if (isset($_GET['editDesa'])) {
	$idDesa = $_GET['editDesa'];
	$ambil = mysqli_query($konek, "SELECT * FROM desa WHERE id='$idDesa'");
	$edit = mysqli_fetch_array($ambil);
?>
	<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Edit Desa
			</div>
			<div class="panel-body">
				<form method="POST" action="">
				<input type="hidden" name="idDesa" value="<?php echo $edit[0];?>">
				<div class="form-group">
					<label>Nama Desa </label>
					<div class="form-control-static"><?php echo $edit['1'];?></div>
				</div>
				<div class="form-group">
					<label>Longitude </label>
					<input class="form-control" type="text" name="longitudeDesa" value="<?php echo $edit['2'];?>">
				</div>
				<div class="form-group">
					<label>Latitude </label>
					<input class="form-control" type="text" name="latitudeDesa" value="<?php echo $edit['3'];?>">
				</div>
				<input type="submit" name="simpanDesa" value="SIMPAN" class="btn btn-primary">
				<a href="?desa" class="btn btn-default pull-right">BATAL</a>
			</form>
			</div>
		</div>
	</div>
</div> <!-- end row -->

<?php
	}else{
?>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Daftar Desa Kecamatan Tahunan
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Desa</th>
							<th>Longitude</th>
							<th>Latitude</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no=1;
							while ($row = mysqli_fetch_array($ndeso)) {
								echo "<tr>
									<td>".$no."</td>
									<td>".$row['1']."</td>
									<td>".$row['2']."</td>
									<td>".$row['3']."</td>
									<td><a href='?editDesa=".$row[0]."' title='Edit'><span class='glyphicon glyphicon-edit'></span> Edit</a></td>
								</tr>";
								$no++;
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div> <!-- end row -->

<?php } ?>