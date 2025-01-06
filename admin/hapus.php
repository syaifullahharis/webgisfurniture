<?php
if (isset($_GET['hapus'])) {
	$id = $_GET['hapus'];
	$hapus = mysqli_query($konek, "DELETE FROM data WHERE id='$id'");
	if ($hapus) {
		echo "<script>
		alert('Data berhasil di hapus !');
		location=(href='?dataUmkm');
		</script>";
	}else{
		echo "<script>
		alert('Data gagal di hapus !');
		location=(href='?dataUmkm');
		</script>";
	}
}
?>