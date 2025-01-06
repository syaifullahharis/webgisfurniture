<?php 
session_start();
if (empty($_SESSION['umkm'])) {
	header("location:login.php");
}else{
require_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin | Sigfurniture Kecamatan Tahunan</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>SIG</span> Furniture Kecamatan Tahunan</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo $admin['1'];?><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="?desa"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Desa</a></li>
							<li><a href="?admin"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="active"><a href="?beranda"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Beranda</a></li>
			<li><a href="?profilPdmw"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profil Tahunan</a></li>
			<li><a href="?dataUmkm"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Data Usaha</a></li>
			<li role="presentation" class="divider"></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<?php
			if (isset($_GET['?beranda'])) {
				require_once 'beranda.php';
			}elseif (isset($_GET['profilPdmw']) || isset($_GET['editProfil'])) {
				require_once 'profilPdmw.php';
			}elseif (isset($_GET['dataUmkm'])) {
				require_once 'umkm.php';
			}elseif (isset($_GET['tambah'])) {
				require_once 'tambah.php';
			}elseif (isset($_GET['hapus'])) {
				require_once 'hapus.php';
			}elseif (isset($_GET['edit'])) {
				require_once 'edit.php';
			}elseif (isset($_GET['admin'])) {
				require_once 'admin.php';
			}elseif (isset($_GET['desa']) || isset($_GET['editDesa'])) {
				require_once 'desa.php';
			}
			else{
				require_once 'beranda.php';
			}
		?>
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</body>
</html>
<?php
require_once 'proses.php';
 } ?>