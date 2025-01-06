<?php
$select = $_GET['edit'];
//edit by id
$dataEdit = mysqli_query($konek, "SELECT * FROM data WHERE id='$select'");
$edit = mysqli_fetch_array($dataEdit);
?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Edit Data usaha
			</div>
			<div class="panel-body">
				<form method="GET" action="">
					<div class="form-group">
						<table class="table">
							<input type="hidden" name="id" value="<?php echo $select;?>">
							<tr>
								<td><label>Nama Pemilik</label></td>
								<td colspan="2"><input class="form-control" type="text" name="namaPemilik" value="<?php echo $edit['nama_pemilik'];?>"></td>
							</tr>
							<tr>
								<td><label>Nama usaha</label></td>
								<td colspan="2"><input type="text" name="namaUMKM" value="<?php echo $edit['nama_umkm'];?>" class="form-control"></td>
							</tr>
							<tr>
								<td><label>Desa</label></td>
								<td><select name="desa" class="form-control">
									<option value="<?php echo $edit['desa'];?>"><?php echo $edit['desa'];?></option>
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
									</select></td>
									<td></td>
							</tr>
							<tr>
								<td><label>Alamat</label></td>
								<td colspan="2"><textarea class="form-control" name="alamat" rows="2"><?php echo $edit['alamat'];?></textarea></td>
							</tr>
							<tr>
								<td><label>Jenis produksi</label></td>
								<td><select name="usaha" class="form-control">
									<option value="<?php echo $edit['usaha'];?>"><?php echo $edit['usaha'];?></option>
									<option value="meja">meja</option>
									<option value="kursi">kursi</option>
									<option value="almari">almari</option>
									<option value="dipan">dipan</option>
									<option value="hiasan">hiasan</option>
									<option value="custom">custom</option>
									</select></td>
								<td><input type="text" name="jenisUsaha" value="<?php echo $edit['jenis_usaha'];?>" class="form-control"></td>
							</tr>
							<tr>
								<td><label>jenis usaha</label></td>
								<td><select name="kriteria" class="form-control">
									<option value="<?php echo $edit['kriteria'];?>"><?php echo $edit['kriteria'];?></option>
									<option value="toko">toko</option>
									<option value="pengrajin">pengrajin</option>
									<option value="toko dan pengrajin">toko dan pengrajin</option>
									</select></td>
								<td></td>
							</tr>
							<tr>
								<td><label>Kontak Person</label></td>
								<td colspan="2"><input type="text" name="kontak" value="<?php echo $edit['kontak'];?>" class="form-control"></td>
							</tr>
							<tr>
								<td><label>LongLat (Titik Koordinat)</label></td>
								<td><input type="text" name="longitude" value="<?php echo $edit['longi'];?>" class="form-control"></td>
								<td><input type="text" name="latitude" value="<?php echo $edit['lat'];?>" class="form-control"></td>
							</tr>
							<tr>
								<td><label>Keterangan</label></td>
								<td colspan="2"><textarea class="form-control" rows="2" name="keterangan"><?php echo $edit['keterangan'];?></textarea></td>
							</tr>
							<tr>
								<td><input class="btn btn-primary" type="submit" name="update" value="SIMPAN"></td>
								<td></td>
								<td><a href="?dataUmkm" class="btn btn-default">BATAL</a></td>
							</tr>
						</table>
					</div> <!-- end form-group -->
				</form>
			</div><!--end panel-body -->
		</div> <!-- end panel -->
	</div>
</div> <!-- end row -->
