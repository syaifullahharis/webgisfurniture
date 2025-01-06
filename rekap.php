
		<div class="row">
			<div class="col-lg-12">
			<h2 class='page-header'> Total Usaha Di Kecamatan Tahunan  : <?php	echo $jmlData; ?></h2>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked "><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $jmlIndustri;?></div>
							<div class="text-muted">pengrajin</div>
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
							<div class="large"><?php echo $jmlJasa;	?></div>
							<div class="text-muted">toko</div>
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
							<div class="large"><?php echo $jmlDagang; ?></div>
							<div class="text-muted">pengrajin dan toko</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Rekapitulasi Data Usaha Di Kecamatan Tahunan</div>
					<div class="panel-body">
						<table class="table table-hover table-bordered" >
						    <thead>
						    <tr >
						        <th rowspan="2" style="text-align:center;">No</th>
						        <th rowspan="2" style="text-align:center;">Desa / Kelurahan</th>
						        <th rowspan="2" style="text-align:center;">Jumlah UMKM</th>
						        <th colspan="3" style="text-align:center;">Jenis Usaha</th>
						        <th colspan="3" style="text-align:center;">Kriteria Usaha</th>
						        <th rowspan="2" style="text-align:center;">Aksi</th>
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
						    	<td>Baddurih</td>
						    	<td><?php echo $jmlBaddurih; ?></td>
						    	<td><?php echo $indBaddurih; ?></td>
						    	<td><?php echo $dagBaddurih; ?></td>
						    	<td><?php echo $jasBaddurih; ?></td>
						    	<td><?php echo $mikBaddurih; ?></td>
						    	<td><?php echo $kecBaddurih; ?></td>
						    	<td><?php echo $menBaddurih; ?></td>
						    	<td><a href="?peta=Baddurih" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">2</td>
						    	<td>Barurambat Timur</td>
						    	<td><?php echo $jmlBarurambatTimur; ?></td>
						    	<td><?php echo $indBarurambatTimur; ?></td>
						    	<td><?php echo $dagBarurambatTimur; ?></td>
						    	<td><?php echo $jasBarurambatTimur; ?></td>
						    	<td><?php echo $mikBarurambatTimur; ?></td>
						    	<td><?php echo $kecBarurambatTimur; ?></td>
						    	<td><?php echo $menBarurambatTimur; ?></td>
						    	<td><a href="?peta=Barurambat Timur" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">3</td>
						    	<td>Buddagan</td>
						    	<td><?php echo $jmlBuddagan; ?></td>
						    	<td><?php echo $indBuddagan; ?></td>
						    	<td><?php echo $dagBuddagan; ?></td>
						    	<td><?php echo $jasBuddagan; ?></td>
						    	<td><?php echo $mikBuddagan; ?></td>
						    	<td><?php echo $kecBuddagan; ?></td>
						    	<td><?php echo $menBuddagan; ?></td>
						    	<td><a href="?peta=Buddagan" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">4</td>
						    	<td>Buddih</td>
						    	<td><?php echo $jmlBuddih; ?></td>
						    	<td><?php echo $indBuddih; ?></td>
						    	<td><?php echo $dagBuddih; ?></td>
						    	<td><?php echo $jasBuddih; ?></td>
						    	<td><?php echo $mikBuddih; ?></td>
						    	<td><?php echo $kecBuddih; ?></td>
						    	<td><?php echo $menBuddih; ?></td>
						    	<td><a href="?peta=Buddih" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">5</td>
						    	<td>Bunder</td>
						    	<td><?php echo $jmlBunder; ?></td>
						    	<td><?php echo $indBunder; ?></td>
						    	<td><?php echo $dagBunder; ?></td>
						    	<td><?php echo $jasBunder; ?></td>
						    	<td><?php echo $mikBunder; ?></td>
						    	<td><?php echo $kecBunder; ?></td>
						    	<td><?php echo $menBunder; ?></td>
						    	<td><a href="?peta=Bunder" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">6</td>
						    	<td>Dasok</td>
						    	<td><?php echo $jmlDasok; ?></td>
						    	<td><?php echo $indDasok; ?></td>
						    	<td><?php echo $dagDasok; ?></td>
						    	<td><?php echo $jasDasok; ?></td>
						    	<td><?php echo $mikDasok; ?></td>
						    	<td><?php echo $kecDasok; ?></td>
						    	<td><?php echo $menDasok; ?></td>
						    	<td><a href="?peta=Dasok" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">7</td>
						    	<td>Durbuk</td>
						    	<td><?php echo $jmlDurbuk; ?></td>
						    	<td><?php echo $indDurbuk; ?></td>
						    	<td><?php echo $dagDurbuk; ?></td>
						    	<td><?php echo $jasDurbuk; ?></td>
						    	<td><?php echo $mikDurbuk; ?></td>
						    	<td><?php echo $kecDurbuk; ?></td>
						    	<td><?php echo $menDurbuk; ?></td>
						    	<td><a href="?peta=Durbuk" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">8</td>
						    	<td>Jarin</td>
						    	<td><?php echo $jmlJarin; ?></td>
						    	<td><?php echo $indJarin; ?></td>
						    	<td><?php echo $dagJarin; ?></td>
						    	<td><?php echo $jasJarin; ?></td>
						    	<td><?php echo $mikJarin; ?></td>
						    	<td><?php echo $kecJarin; ?></td>
						    	<td><?php echo $menJarin; ?></td>
						    	<td><a href="?peta=Jarin" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">9</td>
						    	<td>Lawangan Daya</td>
						    	<td><?php echo $jmlLawanganDaya; ?></td>
						    	<td><?php echo $indLawanganDaya; ?></td>
						    	<td><?php echo $dagLawanganDaya; ?></td>
						    	<td><?php echo $jasLawanganDaya; ?></td>
						    	<td><?php echo $mikLawanganDaya; ?></td>
						    	<td><?php echo $kecLawanganDaya; ?></td>
						    	<td><?php echo $menLawanganDaya; ?></td>
						    	<td><a href="?peta=Lawangan Daya" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">10</td>
						    	<td>Lemper</td>
						    	<td><?php echo $jmlLemper; ?></td>
						    	<td><?php echo $indLemper; ?></td>
						    	<td><?php echo $dagLemper; ?></td>
						    	<td><?php echo $jasLemper; ?></td>
						    	<td><?php echo $mikLemper; ?></td>
						    	<td><?php echo $kecLemper; ?></td>
						    	<td><?php echo $menLemper; ?></td>
						    	<td><a href="?peta=Lemper" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">11</td>
						    	<td>Majungan</td>
						    	<td><?php echo $jmlMajungan; ?></td>
						    	<td><?php echo $indMajungan; ?></td>
						    	<td><?php echo $dagMajungan; ?></td>
						    	<td><?php echo $jasMajungan; ?></td>
						    	<td><?php echo $mikMajungan; ?></td>
						    	<td><?php echo $kecMajungan; ?></td>
						    	<td><?php echo $menMajungan; ?></td>
						    	<td><a href="?peta=Majungan" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">12</td>
						    	<td>Murtajih</td>
						    	<td><?php echo $jmlMurtajih; ?></td>
						    	<td><?php echo $indMurtajih; ?></td>
						    	<td><?php echo $dagMurtajih; ?></td>
						    	<td><?php echo $jasMurtajih; ?></td>
						    	<td><?php echo $mikMurtajih; ?></td>
						    	<td><?php echo $kecMurtajih; ?></td>
						    	<td><?php echo $menMurtajih; ?></td>
						    	<td><a href="?peta=Murtajih" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">13</td>
						    	<td>Padelegan</td>
						    	<td><?php echo $jmlPadelegan; ?></td>
						    	<td><?php echo $indPadelegan; ?></td>
						    	<td><?php echo $dagPadelegan; ?></td>
						    	<td><?php echo $jasPadelegan; ?></td>
						    	<td><?php echo $mikPadelegan; ?></td>
						    	<td><?php echo $kecPadelegan; ?></td>
						    	<td><?php echo $menPadelegan; ?></td>
						    	<td><a href="?peta=Padelegan" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">14</td>
						    	<td>Pademawu Barat</td>
						    	<td><?php echo $jmlPademawuBarat; ?></td>
						    	<td><?php echo $indPademawuBarat; ?></td>
						    	<td><?php echo $dagPademawuBarat; ?></td>
						    	<td><?php echo $jasPademawuBarat; ?></td>
						    	<td><?php echo $mikPademawuBarat; ?></td>
						    	<td><?php echo $kecPademawuBarat; ?></td>
						    	<td><?php echo $menPademawuBarat; ?></td>
						    	<td><a href="?peta=Pademawu Barat" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">15</td>
						    	<td>Pademawu Timur</td>
						    	<td><?php echo $jmlPademawuTimur; ?></td>
						    	<td><?php echo $indPademawuTimur; ?></td>
						    	<td><?php echo $dagPademawuTimur; ?></td>
						    	<td><?php echo $jasPademawuTimur; ?></td>
						    	<td><?php echo $mikPademawuTimur; ?></td>
						    	<td><?php echo $kecPademawuTimur; ?></td>
						    	<td><?php echo $menPademawuTimur; ?></td>
						    	<td><a href="?peta=Pademawu Timur" >Lihat Data</a></td>
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
						    	<td><a href="?peta=Pagagan" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">17</td>
						    	<td>Prekbun</td>
						    	<td><?php echo $jmlPrekbun; ?></td>
						    	<td><?php echo $indPrekbun; ?></td>
						    	<td><?php echo $dagPrekbun; ?></td>
						    	<td><?php echo $jasPrekbun; ?></td>
						    	<td><?php echo $mikPrekbun; ?></td>
						    	<td><?php echo $kecPrekbun; ?></td>
						    	<td><?php echo $menPrekbun; ?></td>
						    	<td><a href="?peta=Prekbun" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">18</td>
						    	<td>Sentol</td>
						    	<td><?php echo $jmlSentol; ?></td>
						    	<td><?php echo $indSentol; ?></td>
						    	<td><?php echo $dagSentol; ?></td>
						    	<td><?php echo $jasSentol; ?></td>
						    	<td><?php echo $mikSentol; ?></td>
						    	<td><?php echo $kecSentol; ?></td>
						    	<td><?php echo $menSentol; ?></td>
						    	<td><a href="?peta=Sentol" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">19</td>
						    	<td>Sopaah</td>
						    	<td><?php echo $jmlSopaah; ?></td>
						    	<td><?php echo $indSopaah; ?></td>
						    	<td><?php echo $dagSopaah; ?></td>
						    	<td><?php echo $jasSopaah; ?></td>
						    	<td><?php echo $mikSopaah; ?></td>
						    	<td><?php echo $kecSopaah; ?></td>
						    	<td><?php echo $menSopaah; ?></td>
						    	<td><a href="?peta=Sopaah" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">20</td>
						    	<td>Sumedangan</td>
						    	<td><?php echo $jmlSumedangan; ?></td>
						    	<td><?php echo $indSumedangan; ?></td>
						    	<td><?php echo $dagSumedangan; ?></td>
						    	<td><?php echo $jasSumedangan; ?></td>
						    	<td><?php echo $mikSumedangan; ?></td>
						    	<td><?php echo $kecSumedangan; ?></td>
						    	<td><?php echo $menSumedangan; ?></td>
						    	<td><a href="?peta=Sumedangan" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">21</td>
						    	<td>Tambung</td>
						    	<td><?php echo $jmlTambung; ?></td>
						    	<td><?php echo $indTambung; ?></td>
						    	<td><?php echo $dagTambung; ?></td>
						    	<td><?php echo $jasTambung; ?></td>
						    	<td><?php echo $mikTambung; ?></td>
						    	<td><?php echo $kecTambung; ?></td>
						    	<td><?php echo $menTambung; ?></td>
						    	<td><a href="?peta=Tambung" >Lihat Data</a></td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">22</td>
						    	<td>Tanjung</td>
						    	<td><?php echo $jmlTanjung; ?></td>
						    	<td><?php echo $indTanjung; ?></td>
						    	<td><?php echo $dagTanjung; ?></td>
						    	<td><?php echo $jasTanjung; ?></td>
						    	<td><?php echo $mikTanjung; ?></td>
						    	<td><?php echo $kecTanjung; ?></td>
						    	<td><?php echo $menTanjung; ?></td>
						    	<td><a href="?peta=Tanjung">Lihat Data</a></td>
						    </tr>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
