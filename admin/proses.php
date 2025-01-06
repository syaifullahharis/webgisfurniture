<?php
	$namaPemilik = $_GET['namaPemilik'];
	$namaUMKM = $_GET['namaUMKM'];
	$namaDesa = $_GET['desa'];
	$alamat = $_GET['alamat'];
	$namaUsaha = $_GET['usaha'];
	$jenisUsaha = $_GET['jenisUsaha'];
	$kUsaha = $_GET['kriteria'];
	$kontak = $_GET['kontak'];
	$longi = $_GET['longitude'];
	$lati = $_GET['latitude'];
	$ket = $_GET['keterangan'];

if (isset($_GET['saveTambah'])) {

	if ($namaUMKM == "" || $namaUMKM == "" || $namaDesa == "" || $alamat == "" || $jenisUsaha == "" || $kUsaha == "" || $kontak == "" || $longi == "" || $lati == "") {
		 echo "<script>
		alert('Data Tidak Boleh Kosong !');
		location=(href='index.php?tambah');
		</script>";
	}else{
		$insert = mysqli_query ($konek, "INSERT INTO data (id, nama_pemilik, nama_umkm, alamat, usaha, jenis_usaha, desa, kriteria, kontak, lat, longi, keterangan) VALUES (NULL, '$namaPemilik', '$namaUMKM', '$alamat', '$namaUsaha', '$jenisUsaha', '$namaDesa', '$kUsaha', '$kontak', '$lati', '$longi', '$ket' )");
		
		if ($insert) {
	    echo "<script>
		alert('Data Berhasil ditambahkan !');
		location=(href='index.php?dataUmkm');
		</script>";
		} else {
		    echo "<script>
			alert('Data Gagal ditambah !');
			location=(href='index.php?tambah');
			</script>";
		}
	}
}elseif (isset($_GET['update'])) {
	$id = $_GET['id'];

	$update = mysqli_query ($konek, "UPDATE data SET nama_pemilik='$namaPemilik', nama_umkm='$namaUMKM', alamat='$alamat', usaha='$namaUsaha', jenis_usaha='$jenisUsaha', desa='$namaDesa', kriteria='$kUsaha', kontak='$kontak', lat='$lati', longi='$longi', keterangan='$ket' WHERE id='$id'");
	if (update) {
		echo "<script>
		alert('Data berhasil dirubah !');
		location=(href='index.php?dataUmkm');
		</script>";
	}else{
		echo "<script>
		alert('Data gagal dirubah !');
		location=(href='index.php?edit=$id');
		</script>";
	}
}elseif (isset($_POST['save'])) {
	$no = 1;
	$artikel = $_POST['artikel'];
	$save = mysqli_query ($konek, "UPDATE profil SET artikel='$artikel' WHERE id='$no'");

	if($save){
		echo "<script>
		alert('Profil berhasil dirubah !');
		location=(href='index.php?profilPdmw');
		</script>";
	}else{
		echo "<script>
		alert('Profil gagal dirubah !');
		location=(href='index.php?editProfil');
		</script>";
	}
}elseif(isset($_POST['saveProf'])) {
	$no = 1;
	$namaLengkap = $_POST['namaLengkap'];
	$jendre = $_POST['jendre'];
	$moto = $_POST['moto'];
	$password = md5($_POST['password']);

	if ($password == $admin['4']) {
		$setAdmin = mysqli_query($konek, "UPDATE user SET nama='$namaLengkap', jendre='$jendre', ket='$moto' WHERE id='$no'");
		if($setAdmin){
			echo "<script>
			alert('Profil berhasil dirubah !');
			location=(href='index.php?admin');
			</script>";
		}
	}else{
		echo "<script>
			alert('Masukkan Password Anda dengan Benar !');
			location=(href='index.php?admin=edit');
			</script>";
	}	
}elseif (isset($_POST['savePas'])) {
	$no = 1;
	$pasLama = md5($_POST['pasLama']);
	$pasBaru = md5($_POST['pasBaru']);
	$lagi = md5($_POST['lagi']);

	if ($pasLama == $admin['4']) {
		if ($passLama == 'd41d8cd98f00b204e9800998ecf8427e' || $lagi == 'd41d8cd98f00b204e9800998ecf8427e' || $pasBaru != $lagi) {
			echo "<script>
				alert('Masukkan Password Baru dengan Benar !');
				location=(href='index.php?admin=password');
				</script>";
		}elseif ($pasBaru == $lagi) {
			$ubah = mysqli_query ($konek, "UPDATE user SET pass='$pasBaru' WHERE id='$no'");
			if ($ubah) {
				echo "<script>
				alert('Password berhasil dirubah !');
				location=(href='index.php?admin');
				</script>";
			}
		}
	}else{
		echo "<script>
				alert('Masukkan Password Lama Dengan Benar !');
				location=(href='index.php?admin=password');
				</script>";
	}
}elseif (isset($_POST['simpanDesa'])) {
	$idDesa = $_POST['idDesa'];
	$longitudeDesa = $_POST['longitudeDesa'];
	$latitudeDesa = $_POST['latitudeDesa'];

	$simpanDesa = mysqli_query ($konek, "UPDATE desa SET longi='$longitudeDesa', lati='$latitudeDesa' WHERE id='$idDesa'");

	if ($simpanDesa) {
		echo "<script>
				alert('Data desa telah dirubah !');
				location=(href='index.php?desa');
				</script>";
	}
}

?>