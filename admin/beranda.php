
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Total Usaha : <?php echo $jmlData;?></h2>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jmlIndustri?></div>
							<div class="text-muted">toko</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jmlJasa?></div>
							<div class="text-muted">pengrajin</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jmlDagang?></div>
							<div class="text-muted">toko dan pengrajin</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Rekapitulasi Data usaha furniture</div>
					<div class="panel-body">
						<table class="table table-hover table-bordered" >
						    <thead>
						    <tr>
						        <th rowspan="2" style="text-align:center;">No</th>
						        <th rowspan="2" style="text-align:center;">Desa / Kelurahan</th>
						        <th rowspan="2" style="text-align:center;">Jumlah usaha</th>
						        <th colspan="3" style="text-align:center;">Jenis Usaha</th>
						        <th colspan="3" style="text-align:center;">Kriteria Usaha</th>
						        <th rowspan="2" style="text-align:center;">Keterangan</th>
						    </tr>
						    <tr>
						    	<th style="text-align:center;">Industri</th>
						    	<th style="text-align:center;">Dagang</th>
						    	<th style="text-align:center;">Jasa</th>
						    	<th style="text-align:center;">Mikro</th>
						    	<th style="text-align:center;">Kecil</th>
						    	<th style="text-align:center;">Menengah</th>
						    </tr>
						    </thead>
						    <tr>
						    	<td style="text-align:center;">1</td>
						    	<td>tahunan</td>
						    	<td><?php echo $jmlBaddurih; ?></td>
						    	<td><?php echo $indBaddurih; ?></td>
						    	<td><?php echo $dagBaddurih; ?></td>
						    	<td><?php echo $jasBaddurih; ?></td>
						    	<td><?php echo $mikBaddurih; ?></td>
						    	<td><?php echo $kecBaddurih; ?></td>
						    	<td><?php echo $menBaddurih; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">2</td>
						    	<td>semat</td>
						    	<td><?php echo $jmlBarurambatTimur; ?></td>
						    	<td><?php echo $indBarurambatTimur; ?></td>
						    	<td><?php echo $dagBarurambatTimur; ?></td>
						    	<td><?php echo $jasBarurambatTimur; ?></td>
						    	<td><?php echo $mikBarurambatTimur; ?></td>
						    	<td><?php echo $kecBarurambatTimur; ?></td>
						    	<td><?php echo $menBarurambatTimur; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">3</td>
						    	<td>platar</td>
						    	<td><?php echo $jmlBuddagan; ?></td>
						    	<td><?php echo $indBuddagan; ?></td>
						    	<td><?php echo $dagBuddagan; ?></td>
						    	<td><?php echo $jasBuddagan; ?></td>
						    	<td><?php echo $mikBuddagan; ?></td>
						    	<td><?php echo $kecBuddagan; ?></td>
						    	<td><?php echo $menBuddagan; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">4</td>
						    	<td>mangunan</td>
						    	<td><?php echo $jmlBuddih; ?></td>
						    	<td><?php echo $indBuddih; ?></td>
						    	<td><?php echo $dagBuddih; ?></td>
						    	<td><?php echo $jasBuddih; ?></td>
						    	<td><?php echo $mikBuddih; ?></td>
						    	<td><?php echo $kecBuddih; ?></td>
						    	<td><?php echo $menBuddih; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">5</td>
						    	<td>petekeyan</td>
						    	<td><?php echo $jmlBunder; ?></td>
						    	<td><?php echo $indBunder; ?></td>
						    	<td><?php echo $dagBunder; ?></td>
						    	<td><?php echo $jasBunder; ?></td>
						    	<td><?php echo $mikBunder; ?></td>
						    	<td><?php echo $kecBunder; ?></td>
						    	<td><?php echo $menBunder; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">6</td>
						    	<td>sukodono</td>
						    	<td><?php echo $jmlDasok; ?></td>
						    	<td><?php echo $indDasok; ?></td>
						    	<td><?php echo $dagDasok; ?></td>
						    	<td><?php echo $jasDasok; ?></td>
						    	<td><?php echo $mikDasok; ?></td>
						    	<td><?php echo $kecDasok; ?></td>
						    	<td><?php echo $menDasok; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">7</td>
						    	<td>langon</td>
						    	<td><?php echo $jmlDurbuk; ?></td>
						    	<td><?php echo $indDurbuk; ?></td>
						    	<td><?php echo $dagDurbuk; ?></td>
						    	<td><?php echo $jasDurbuk; ?></td>
						    	<td><?php echo $mikDurbuk; ?></td>
						    	<td><?php echo $kecDurbuk; ?></td>
						    	<td><?php echo $menDurbuk; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">8</td>
						    	<td>ngabol</td>
						    	<td><?php echo $jmlJarin; ?></td>
						    	<td><?php echo $indJarin; ?></td>
						    	<td><?php echo $dagJarin; ?></td>
						    	<td><?php echo $jasJarin; ?></td>
						    	<td><?php echo $mikJarin; ?></td>
						    	<td><?php echo $kecJarin; ?></td>
						    	<td><?php echo $menJarin; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">9</td>
						    	<td>mantingan</td>
						    	<td><?php echo $jmlLawanganDaya; ?></td>
						    	<td><?php echo $indLawanganDaya; ?></td>
						    	<td><?php echo $dagLawanganDaya; ?></td>
						    	<td><?php echo $jasLawanganDaya; ?></td>
						    	<td><?php echo $mikLawanganDaya; ?></td>
						    	<td><?php echo $kecLawanganDaya; ?></td>
						    	<td><?php echo $menLawanganDaya; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">10</td>
						    	<td>demangan</td>
						    	<td><?php echo $jmlLemper; ?></td>
						    	<td><?php echo $indLemper; ?></td>
						    	<td><?php echo $dagLemper; ?></td>
						    	<td><?php echo $jasLemper; ?></td>
						    	<td><?php echo $mikLemper; ?></td>
						    	<td><?php echo $kecLemper; ?></td>
						    	<td><?php echo $menLemper; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">11</td>
						    	<td>tagalsambi</td>
						    	<td><?php echo $jmlMajungan; ?></td>
						    	<td><?php echo $indMajungan; ?></td>
						    	<td><?php echo $dagMajungan; ?></td>
						    	<td><?php echo $jasMajungan; ?></td>
						    	<td><?php echo $mikMajungan; ?></td>
						    	<td><?php echo $kecMajungan; ?></td>
						    	<td><?php echo $menMajungan; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">12</td>
						    	<td>krapyak</td>
						    	<td><?php echo $jmlMurtajih; ?></td>
						    	<td><?php echo $indMurtajih; ?></td>
						    	<td><?php echo $dagMurtajih; ?></td>
						    	<td><?php echo $jasMurtajih; ?></td>
						    	<td><?php echo $mikMurtajih; ?></td>
						    	<td><?php echo $kecMurtajih; ?></td>
						    	<td><?php echo $menMurtajih; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">13</td>
						    	<td>senenan</td>
						    	<td><?php echo $jmlPadelegan; ?></td>
						    	<td><?php echo $indPadelegan; ?></td>
						    	<td><?php echo $dagPadelegan; ?></td>
						    	<td><?php echo $jasPadelegan; ?></td>
						    	<td><?php echo $mikPadelegan; ?></td>
						    	<td><?php echo $kecPadelegan; ?></td>
						    	<td><?php echo $menPadelegan; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">14</td>
						    	<td>kecapi</td>
						    	<td><?php echo $jmlPademawuBarat; ?></td>
						    	<td><?php echo $indPademawuBarat; ?></td>
						    	<td><?php echo $dagPademawuBarat; ?></td>
						    	<td><?php echo $jasPademawuBarat; ?></td>
						    	<td><?php echo $mikPademawuBarat; ?></td>
						    	<td><?php echo $kecPademawuBarat; ?></td>
						    	<td><?php echo $menPademawuBarat; ?></td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">16</td>
						    	<td>Pagagan</td>
						    	<td><?php echo $jmlPagagan; ?></td>
						    	<td><?php echo $indPagagan; ?></td>
						    	<td><?php echo $dagPagagan; ?></td>
						    	<td><?php echo $jasPagagan; ?></td>
						    	<td><?php echo $mikPagagan; ?></td>
						    	<td><?php echo $kecPagagan; ?></td>
						    	<td><?php echo $menPagagan; ?></td>
						    	<td></td>
						    </tr>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->