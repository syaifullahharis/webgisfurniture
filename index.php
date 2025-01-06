<?php
require_once 'admin/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1">
	<title>SIG | Furniture Kecamatan Tahunan</title>
	<link rel="icon" type="img/icon" href="img/LogoPemda.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="admin/css/datepicker3.css" rel="stylesheet">
	<script src="admin/js/lumino.glyphs.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB04gPQFT3z3-Uh46CUaPgyqXaOyV3iSs"></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container col-md-11">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
		        <span class="sr-only">navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
				<a href="index.php" class="navbar-brand"><span>SIG</span> Furniture Kecamatan Tahunan</a>
			</div> <!-- end navbar-header -->

			<div class="collapse navbar-collapse navbar-right" id="menu">
				<ul class="nav navbar-nav">
					<li><a href="?dataUmkm">FURNITURE</a></li>
					<li><a href="?profil">PROFIL</a></li>
					<li><a href="?about">TENTANG</a></li>
				</ul>
			</div>
		</div>
	</nav> <!-- end navbar -->

	<div class="container col-md-11 margin-top">
		<?php
			if (isset($_GET['dataUmkm'])) {
				require_once 'umkm.php';
			}elseif (isset($_GET['profil'])) {
				require_once 'profil.php';
			}elseif (isset($_GET['about'])) {
				require_once 'about.php';
			}elseif (isset($_GET['rekap'])) {
				require_once 'rekap.php';
			}elseif (isset($_GET['peta']) || isset($_GET['industri']) || isset($_GET['dagang']) || isset($_GET['jasa'])) {
				require_once 'petaDesa.php';
			}elseif (isset($_GET['umkm'])) {
				require_once 'peta.php';
			}
			else{
				require_once 'beranda.php';
			}
		?>
	</div>

	<footer class="panel-footer">Copyright &copy; 2016</footer>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>