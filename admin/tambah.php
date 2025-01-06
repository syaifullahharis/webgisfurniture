<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tambah Data usaha
			</div>
			<div class="panel-body">
				<form method="GET" action="">
					<div class="form-group">
						<table class="table">
							<tr>
								<td><label>Nama Pemilik</label></td>
								<td colspan="2"><input class="form-control" type="text" name="namaPemilik" placeholder="Nama Pemilik"></td>
							</tr>
							<tr>
								<td><label>Nama usaha</label></td>
								<td colspan="2"><input type="text" name="namaUMKM" placeholder="Nama UMKM" class="form-control"></td>
							</tr>
							<tr>
								<td><label>Desa</label></td>
								<td><select name="desa" class="form-control">
									<option value="">Pilih Desa</option>
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
								<td colspan="2"><textarea class="form-control" name="alamat" rows="2" placeholder="Alamat"></textarea></td>
							</tr>
							<tr>
								<td><label>Jenis produksi</label></td>
								<td><select name="usaha" class="form-control">
									<option value="">Pilih Jenis Usaha</option>
									<option value="meja">meja</option>
									<option value="kursi">kursi</option>
									<option value="almari">almari</option>
									<option value="dipan">dipan</option>
									<option value="hiasan">hiasan</option>
									<option value="custom">custom</option>
									</select></td>
								<td><input type="text" name="jenisUsaha" placeholder="Nama Usaha" class="form-control"></td>
							</tr>
							<tr>
								<td><label>Kriteria Usaha</label></td>
								<td><select name="kriteria" class="form-control">
									<option value="">Pilih Kriteria Usaha</option>
									<option value="toko">toko</option>
									<option value="pengrajin">pengrajin</option>
									<option value="toko dan pengrajin">toko dan pengrajin</option>
									</select></td>
								<td></td>
							</tr>
							<tr>
								<td><label>Kontak Person</label></td>
								<td colspan="2"><input type="text" name="kontak" placeholder="Kontak Person" class="form-control"></td>
							</tr>
							<tr>
								<td><label>LongLat (Titik Koordinat)</label></td>
								<td><input type="text" name="longitude" placeholder="Logintude ex: 113.517531" class="form-control"></td>
								<td><input type="text" name="latitude" placeholder="Latitude ex: -7.189682" class="form-control"></td>
							</tr>
							<tr>
								<td><label>Keterangan</label></td>
								<td colspan="2"><textarea class="form-control" rows="2" name="keterangan" placeholder="Keterangan"></textarea></td>
							</tr>
							<tr>
								<td><input class="btn btn-primary" type="submit" name="saveTambah" value="TAMBAH"></td>
								<td><input class="btn btn-default" type="reset" name="reset" value="RESET"></td>
								<td></td>
							</tr>
						</table>
					</div> <!-- end form-group -->
				</form>
			</div> <!-- end panel-body -->
		</div> <!-- end panel -->
	</div>
</div> <!-- end row -->