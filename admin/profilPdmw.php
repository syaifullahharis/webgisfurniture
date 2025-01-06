<?php 
	if (isset($_GET['editProfil'])) {
?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo $profil; ?>
			</div>
			<div class="panel-body">
			<form method="POST" action="">
				<div class="form-group">
				<textarea class="form-control" rows="20" name="artikel" ><?php echo $profil['2']; ?> </textarea>
				</div>
				<input type="submit" name="save" value="SIMPAN" class="btn btn-primary">
				<a href="?profilPdmw" class="btn btn-default pull-right">BATAL</a>
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
				<?php echo $profil['1']; ?> <a href="?editProfil"><button class="btn btn-primary pull-right">Edit Profil</button></a>
			</div>
			<div class="panel-body" align="justify">
				<?php echo $profil['2']; ?>
			</div>
		</div>
	</div>
</div> <!-- end row -->
<?php } ?>