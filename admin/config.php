<?php
error_reporting(0);
//configurasi database, rubah sesuai komputer
$host = "localhost"; //default localhost.
$user = "root"; //default username phpmyadamin.
$pass = ""; //password phpmyadmin, silahkan disesuaikan.
$data = "sigfurniture"; //nama database.

$konek = mysqli_connect($host, $user, $pass, $data)  or die(mysqli_connect_error());

//select data by id
$dataID = $_GET['umkm'];
$idData = mysqli_query($konek, "SELECT * FROM data WHERE id='$dataID'");
$rowData = mysqli_fetch_array($idData);

//select admin
$tblAdmin = mysqli_query($konek, "SELECT * FROM user WHERE id=1");
$admin = mysqli_fetch_array($tblAdmin);

//select data umkm
$data = mysqli_query($konek, "SELECT * FROM data");
$jmlData = mysqli_num_rows($data); //jumlah data total

//select tabel desa
$ndeso = mysqli_query($konek, "SELECT * FROM desa");

//select data profil
$tblProfil = mysqli_query($konek, "SELECT * FROM profil WHERE id=1");
$profil = mysqli_fetch_array($tblProfil);

//select data by jenis
$umkmIndustri = mysqli_query($konek, "SELECT * FROM data WHERE usaha='Industri'"); //umkm Industri
$jmlIndustri = mysqli_num_rows($umkmIndustri); //jumlah data umkm industri
$umkmJasa = mysqli_query($konek, "SELECT * FROM data WHERE usaha='Jasa'"); //umkm Jasa
$jmlJasa = mysqli_num_rows($umkmJasa); //jumlah data umkm jasa
$umkmDagang = mysqli_query($konek, "SELECT * FROM data WHERE usaha='Dagang'"); //umkm Dagang
$jmlDagang = mysqli_num_rows($umkmDagang); //jumlah data umkm dagang

//select data by kategori
$umkmKecil = mysqli_query($konek, "SELECT * FROM data WHERE kriteria='Kecil'"); //umkm Kecil
$jmlKecil = mysqli_num_rows($umkmKecil); //jumlah data umkm kecil
$umkmMenengah = mysqli_query($konek, "SELECT * FROM data WHERE kriteria='Menengah'"); //umkm Menengah
$jmlMenengah = mysqli_num_rows($umkmMenengah); //jumlah data umkm Menengah
$umkmMikro = mysqli_query($konek, "SELECT * FROM data WHERE kriteria='Mikro'"); //umkm Mikro
$jmlMikro = mysqli_num_rows($umkmMikro); //jumlah data umkm Mikro

//select data by desa Baddurih
$Baddurih = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baddurih'");
$dataBaddurih = mysqli_fetch_array($Baddurih);
$jmlBaddurih = mysqli_num_rows($Baddurih);
$BaddurihInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baddurih' AND usaha='Industri'");
$indBaddurih = mysqli_num_rows($BaddurihInd);
$BaddurihJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baddurih' AND usaha='Jasa'");
$jasBaddurih = mysqli_num_rows($BaddurihJas);
$BaddurihDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baddurih' AND usaha='Dagang'");
$dagBaddurih = mysqli_num_rows($BaddurihDag);
$BaddurihMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baddurih' AND kriteria='Mikro'");
$mikBaddurih = mysqli_num_rows($BaddurihMik);
$BaddurihKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baddurih' AND kriteria='Kecil'");
$kecBaddurih = mysqli_num_rows($BaddurihKec);
$BaddurihMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baddurih' AND kriteria='Menengah'");
$menBaddurih = mysqli_num_rows($BaddurihMen);

//select data by kelurahan Baturambat Timur
$BarurambatTimur = mysqli_query($konek, "SELECT * FROM data WHERE desa='Barurambat Timur'");
$jmlBarurambatTimur = mysqli_num_rows($BarurambatTimur);
$dataBarurambatTimur = mysqli_fetch_array($BarurambatTimur);
$BarurambatTimurInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Barurambat Timur' AND usaha='Industri'");
$indBarurambatTimur = mysqli_num_rows($BarurambatTimurInd);
$BarurambatTimurJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baturambat Timur' AND usaha='Jasa'");
$jasBarurambatTimur = mysqli_num_rows($BarurambatTimurJas);
$BarurambatTimurDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baturambat Timur' AND usaha='Dagang'");
$dagBarurambatTimur = mysqli_num_rows($BarurambatTimurDag);
$BarurambatTimurMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baturambat Timur' AND kriteria='Mikro'");
$mikBarurambatTimur = mysqli_num_rows($BarurambatTimurMik);
$BarurambatTimurKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baturambat Timur' AND kriteria='Kecil'");
$kecBarurambatTimur = mysqli_num_rows($BarurambatTimurKec);
$BarurambatTimurMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Baturambat Timur' AND kriteria='Menengah'");
$menBarurambatTimur = mysqli_num_rows($BarurambatTimurMen);

//select data by kelurahan buddagan
$Buddagan = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddagan'");
$jmlBuddagan = mysqli_num_rows($Buddagan);
$dataBuddagan = mysqli_fetch_array($Buddagan);
$BuddaganInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddagan' AND usaha='Industri'");
$indBuddagan = mysqli_num_rows($BuddaganInd);
$BuddaganJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddagan' AND usaha='Jasa'");
$jasBuddagan = mysqli_num_rows($BuddaganJas);
$BuddaganDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddagan' AND usaha='Dagang'");
$dagBuddagan = mysqli_num_rows($BuddaganDag);
$BuddaganMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddagan' AND kriteria='Mikro'");
$mikBuddagan = mysqli_num_rows($BuddaganMik);
$BuddaganKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddagan' AND kriteria='Kecil'");
$kecBuddagan = mysqli_num_rows($BuddaganKec);
$BuddaganMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddagan' AND kriteria='Menengah'");
$menBuddagan = mysqli_num_rows($BuddaganMen);

//select data by desa Buddih
$Buddih = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddih'");
$jmlBuddih = mysqli_num_rows($Buddih);
$dataBuddih = mysqli_fetch_array($Buddih);
$BuddihInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddih' AND usaha='Industri'");
$indBuddih = mysqli_num_rows($BuddihInd);
$BuddihJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddih' AND usaha='Jasa'");
$jasBuddih = mysqli_num_rows($BuddihJas);
$BuddihDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddih' AND usaha='Dagang'");
$dagBuddih = mysqli_num_rows($BuddihDag);
$BuddihMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddih' AND kriteria='Mikro'");
$mikBuddih = mysqli_num_rows($BuddihMik);
$BuddihKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddih' AND kriteria='Kecil'");
$kecBuddih = mysqli_num_rows($BuddihKec);
$BuddihMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Buddih' AND kriteria='Menengah'");
$menBuddih = mysqli_num_rows($BuddihMen);

//select data by Desa Bunder
$Bunder = mysqli_query($konek, "SELECT * FROM data WHERE desa='Bunder'");
$jmlBunder = mysqli_num_rows($Bunder);
$dataBunder = mysqli_fetch_array($Bunder);
$BunderInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Bunder' AND usaha='Industri'");
$indBunder = mysqli_num_rows($BunderInd);
$BunderJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Bunder' AND usaha='Jasa'");
$jasBunder = mysqli_num_rows($BunderJas);
$BunderDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Bunder' AND usaha='Dagang'");
$dagBunder = mysqli_num_rows($BunderDag);
$BunderMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Bunder' AND kriteria='Mikro'");
$mikBunder = mysqli_num_rows($BunderMik);
$BunderKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Bunder' AND kriteria='Kecil'");
$kecBunder = mysqli_num_rows($BunderKec);
$BunderMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Bunder' AND kriteria='Menengah'");
$menBunder = mysqli_num_rows($BunderMen);

//select data by desa Dasok
$Dasok = mysqli_query($konek, "SELECT * FROM data WHERE desa='Dasok'");
$jmlDasok = mysqli_num_rows($Dasok);
$dataDasok = mysqli_fetch_array($Dasok);
$DasokInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Dasok' AND usaha='Industri'");
$indDasok = mysqli_num_rows($DasokInd);
$DasokJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Dasok' AND usaha='Jasa'");
$jasDasok = mysqli_num_rows($DasokJas);
$DasokDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Dasok' AND usaha='Dagang'");
$dagDasok = mysqli_num_rows($DasokDag);
$DasokMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Dasok' AND kriteria='Mikro'");
$mikDasok = mysqli_num_rows($DasokMik);
$DasokKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Dasok' AND kriteria='Kecil'");
$kecDasok = mysqli_num_rows($DasokKec);
$DasokMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Dasok' AND kriteria='Menengah'");
$menDasok = mysqli_num_rows($DasokMen);

//select data by desa Durbuk
$Durbuk = mysqli_query($konek, "SELECT * FROM data WHERE desa='Durbuk'");
$jmlDurbuk = mysqli_num_rows($Durbuk);
$dataDurbuk = mysqli_fetch_array($Durbuk);
$DurbukInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Durbuk' AND usaha='Industri'");
$indDurbuk = mysqli_num_rows($DurbukInd);
$DurbukJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Durbuk' AND usaha='Jasa'");
$jasDurbuk = mysqli_num_rows($DurbukJas);
$DurbukDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Durbuk' AND usaha='Dagang'");
$dagDurbuk = mysqli_num_rows($DurbukDag);
$DurbukMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Durbuk' AND kriteria='Mikro'");
$mikDurbuk = mysqli_num_rows($DurbukMik);
$DurbukKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Durbuk' AND kriteria='Kecil'");
$kecDurbuk = mysqli_num_rows($DurbukKec);
$DurbukMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Durbuk' AND kriteria='Menengah'");
$menDurbuk = mysqli_num_rows($DurbukMen);

//select data by desa Jarin
$Jarin = mysqli_query($konek, "SELECT * FROM data WHERE desa='Jarin'");
$jmlJarin = mysqli_num_rows($Jarin);
$dataJarin = mysqli_fetch_array($Jarin);
$JarinInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Jarin' AND usaha='Industri'");
$indJarin = mysqli_num_rows($JarinInd);
$JarinJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Jarin' AND usaha='Jasa'");
$jasJarin = mysqli_num_rows($JarinJas);
$JarinDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Jarin' AND usaha='Dagang'");
$dagJarin = mysqli_num_rows($JarinDag);
$JarinMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Jarin' AND kriteria='Mikro'");
$mikJarin = mysqli_num_rows($JarinMik);
$JarinKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Jarin' AND kriteria='Kecil'");
$kecJarin = mysqli_num_rows($JarinKec);
$JarinMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Jarin' AND kriteria='Menengah'");
$menJarin = mysqli_num_rows($JarinMen);

//select data by kelurahan Lawangan Daya
$LawanganDaya = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lawangan Daya'");
$jmlLawanganDaya = mysqli_num_rows($LawanganDaya);
$dataLawanganDaya = mysqli_fetch_array($LawanganDaya);
$LawanganDayaInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lawangan Daya' AND usaha='Industri'");
$indLawanganDaya = mysqli_num_rows($LawanganDayaInd);
$LawanganDayaJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lawangan Daya' AND usaha='Jasa'");
$jasLawanganDaya = mysqli_num_rows($LawanganDayaJas);
$LawanganDayaDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lawangan Daya' AND usaha='Dagang'");
$dagLawanganDaya = mysqli_num_rows($LawanganDayaDag);
$LawanganDayaMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lawangan Daya' AND kriteria='Mikro'");
$mikLawanganDaya = mysqli_num_rows($LawanganDayaMik);
$LawanganDayaKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lawangan Daya' AND kriteria='Kecil'");
$kecLawanganDaya = mysqli_num_rows($LawanganDayaKec);
$LawanganDayaMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lawangan Daya' AND kriteria='Menengah'");
$menLawanganDaya = mysqli_num_rows($LawanganDayaMen);

//select data by desa Lemper
$Lemper = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lemper'");
$jmlLemper = mysqli_num_rows($Lemper);
$dataLemper = mysqli_fetch_array($Lemper);
$LemperInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lemper' AND usaha='Industri'");
$indLemper = mysqli_num_rows($LemperInd);
$LemperJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lemper' AND usaha='Jasa'");
$jasLemper = mysqli_num_rows($LemperJas);
$LemperDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lemper' AND usaha='Dagang'");
$dagLemper = mysqli_num_rows($LemperDag);
$LemperMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lemper' AND kriteria='Mikro'");
$mikLemper = mysqli_num_rows($LemperMik);
$LemperKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lemper' AND kriteria='Kecil'");
$kecLemper = mysqli_num_rows($LemperKec);
$LemperMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Lemper' AND kriteria='Menengah'");
$menLemper = mysqli_num_rows($LemperMen);

//select data by desa Majungan
$Majungan = mysqli_query($konek, "SELECT * FROM data WHERE desa='Majungan'");
$jmlMajungan = mysqli_num_rows($Majungan);
$dataMajungan = mysqli_fetch_array($Majungan);
$MajunganInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Majungan' AND usaha='Industri'");
$indMajungan = mysqli_num_rows($MajunganInd);
$MajunganJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Majungan' AND usaha='Jasa'");
$jasMajungan = mysqli_num_rows($MajunganJas);
$MajunganDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Majungan' AND usaha='Dagang'");
$dagMajungan = mysqli_num_rows($MajunganDag);
$MajunganMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Majungan' AND kriteria='Mikro'");
$mikMajungan = mysqli_num_rows($MajunganMik);
$MajunganKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Majungan' AND kriteria='Kecil'");
$kecMajungan = mysqli_num_rows($MajunganKec);
$MajunganMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Majungan' AND kriteria='Menengah'");
$menMajungan = mysqli_num_rows($MajunganMen);

//select data by desa Murtajih
$Murtajih = mysqli_query($konek, "SELECT * FROM data WHERE desa='Murtajih'");
$jmlMurtajih =mysqli_num_rows($Murtajih);
$dataMurtajih = mysqli_fetch_array($Murtajih);
$MurtajihInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Murtajih' AND usaha='Industri'");
$indMurtajih = mysqli_num_rows($MurtajihInd);
$MurtajihJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Murtajih' AND usaha='Jasa'");
$jasMurtajih = mysqli_num_rows($MurtajihJas);
$MurtajihDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Murtajih' AND usaha='Dagang'");
$dagMurtajih = mysqli_num_rows($MurtajihDag);
$MurtajihMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Murtajih' AND kriteria='Mikro'");
$mikMurtajih = mysqli_num_rows($MurtajihMik);
$MurtajihKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Murtajih' AND kriteria='Kecil'");
$kecMurtajih = mysqli_num_rows($MurtajihKec);
$MurtajihMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Murtajih' AND kriteria='Menengah'");
$menMurtajih = mysqli_num_rows($MurtajihMen);

//select data by desa Padelegan
$Padelegan = mysqli_query($konek, "SELECT * FROM data WHERE desa='Padelegan'");
$jmlPadelegan = mysqli_num_rows($Padelegan);
$dataPadelegan = mysqli_fetch_array($Padelegan);
$PadeleganInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Padelegan' AND usaha='Industri'");
$indPadelegan = mysqli_num_rows($PadeleganInd);
$PadeleganJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Padelegan' AND usaha='Jasa'");
$jasPadelegan = mysqli_num_rows($PadeleganJas);
$PadeleganDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Padelegan' AND usaha='Dagang'");
$dagPadelegan = mysqli_num_rows($PadeleganDag);
$PadeleganMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Padelegan' AND kriteria='Mikro'");
$mikPadelegan = mysqli_num_rows($PadeleganMik);
$PadeleganKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Padelegan' AND kriteria='Kecil'");
$kecPadelegan = mysqli_num_rows($PadeleganKec);
$PadeleganMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Padelegan' AND kriteria='Menengah'");
$menPadelegan = mysqli_num_rows($PadeleganMen);

//select data by desa Pademawu Barat
$PademawuBarat = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Barat'");
$jmlPademawuBarat = mysqli_num_rows($PademawuBarat);
$dataPademawuBarat = mysqli_fetch_array($PademawuBarat);
$PademawuBaratInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Barat' AND usaha='Industri'");
$indPademawuBarat = mysqli_num_rows($PademawuBaratInd);
$PademawuBaratJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Barat' AND usaha='Jasa'");
$jasPademawuBarat = mysqli_num_rows($PademawuBaratJas);
$PademawuBaratDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Barat' AND usaha='Dagang'");
$dagPademawuBarat = mysqli_num_rows($PademawuBaratDag);
$PademawuBaratMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Barat' AND kriteria='Mikro'");
$mikPademawuBarat = mysqli_num_rows($PademawuBaratMik);
$PademawuBaratKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Barat' AND kriteria='Kecil'");
$kecPademawuBarat = mysqli_num_rows($PademawuBaratKec);
$PademawuBaratMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Barat' AND kriteria='Menengah'");
$menPademawuBarat = mysqli_num_rows($PademawuBaratMen);

//select data by desa Pademawu Timur
$PademawuTimur = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Timur'");
$jmlPademawuTimur = mysqli_num_rows($PademawuTimur);
$dataPademawuTimur = mysqli_fetch_array($PademawuTimur);
$PademawuTimurInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Timur' AND usaha='Industri'");
$indPademawuTimur = mysqli_num_rows($PademawuTimurInd);
$PademawuTimurJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Timur' AND usaha='Jasa'");
$jasPademawuTimur = mysqli_num_rows($PademawuTimurJas);
$PademawuTimurDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Timur' AND usaha='Dagang'");
$dagPademawuTimur = mysqli_num_rows($PademawuTimurDag);
$PademawuTimurMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Timur' AND kriteria='Mikro'");
$mikPademawuTimur = mysqli_num_rows($PademawuTimurMik);
$PademawuTimurKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Timur' AND kriteria='Kecil'");
$kecPademawuTimur = mysqli_num_rows($PademawuTimurKec);
$PademawuTimurMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pademawu Timur' AND kriteria='Menengah'");
$menPademawuTimur = mysqli_num_rows($PademawuTimurMen);

//select data by desa Pagagan
$Pagagan = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pagagan'");
$jmlPagagan = mysqli_num_rows($Pagagan);
$dataPagagan = mysqli_fetch_array($Pagagan);
$PagaganInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pagagan' AND usaha='Industri'");
$indPagagan = mysqli_num_rows($PagaganInd);
$PagaganJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pagagan' AND usaha='Jasa'");
$jasPagagan = mysqli_num_rows($PagaganJas);
$PagaganDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pagagan' AND usaha='Dagang'");
$dagPagagan = mysqli_num_rows($PagaganDag);
$PagaganMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pagagan' AND kriteria='Mikro'");
$mikPagagan = mysqli_num_rows($PagaganMik);
$PagaganKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pagagan' AND kriteria='Kecil'");
$kecPagagan = mysqli_num_rows($PagaganKec);
$PagaganMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Pagagan' AND kriteria='Menengah'");
$menPagagan = mysqli_num_rows($PagaganMen);

//select data by desa Prekbun
$Prekbun = mysqli_query($konek, "SELECT * FROM data WHERE desa='Prekbun'");
$jmlPrekbun = mysqli_num_rows($Prekbun);
$dataPagagan = mysqli_fetch_array($Prekbun);
$PrekbunInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Prekbun' AND usaha='Industri'");
$indPrekbun = mysqli_num_rows($PrekbunInd);
$PrekbunJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Prekbun' AND usaha='Jasa'");
$jasPrekbun = mysqli_num_rows($PrekbunJas);
$PrekbunDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Prekbun' AND usaha='Dagang'");
$dagPrekbun = mysqli_num_rows($PrekbunDag);
$PrekbunMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Prekbun' AND kriteria='Mikro'");
$mikPrekbun = mysqli_num_rows($PrekbunMik);
$PrekbunKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Prekbun' AND kriteria='Kecil'");
$kecPrekbun = mysqli_num_rows($PrekbunKec);
$PrekbunMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Prekbun' AND kriteria='Menengah'");
$menPrekbun = mysqli_num_rows($PrekbunMen);

//select data by desa Sentol
$Sentol = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sentol'");
$jmlSentol = mysqli_num_rows($Sentol);
$dataSentol = mysqli_fetch_array($Sentol);
$SentolInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sentol' AND usaha='Industri'");
$indSentol = mysqli_num_rows($SentolInd);
$SentolJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sentol' AND usaha='Jasa'");
$jasSentol = mysqli_num_rows($SentolJas);
$SentolDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sentol' AND usaha='Dagang'");
$dagSentol = mysqli_num_rows($SentolDag);
$SentolMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sentol' AND kriteria='Mikro'");
$mikSentol = mysqli_num_rows($SentolMik);
$SentolKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sentol' AND kriteria='Kecil'");
$kecSentol = mysqli_num_rows($SentolKec);
$SentolMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sentol' AND kriteria='Menengah'");
$menSentol = mysqli_num_rows($SentolMen);

//select data by desa Sopaah
$Sopaah = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sopaah'");
$jmlSopaah = mysqli_num_rows($Sopaah);
$dataSopaah = mysqli_fetch_array($Sopaah);
$SopaahInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sopaah' AND usaha='Industri'");
$indSopaah = mysqli_num_rows($SopaahInd);
$SopaahJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sopaah' AND usaha='Jasa'");
$jasSopaah = mysqli_num_rows($SopaahJas);
$SopaahDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sopaah' AND usaha='Dagang'");
$dagSopaah = mysqli_num_rows($SopaahDag);
$SopaahMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sopaah' AND kriteria='Mikro'");
$mikSopaah = mysqli_num_rows($SopaahMik);
$SopaahKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sopaah' AND kriteria='Kecil'");
$kecSopaah = mysqli_num_rows($SopaahKec);
$SopaahMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sopaah' AND kriteria='Menengah'");
$menSopaah = mysqli_num_rows($SopaahMen);

//select data by desa Sumedangan
$Sumedangan = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sumedangan'");
$jmlSumedangan = mysqli_num_rows($Sumedangan);
$dataSumedangan = mysqli_fetch_array($Sumedangan);
$SumedanganInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sumedangan' AND usaha='Industri'");
$indSumedangan = mysqli_num_rows($SumedanganInd);
$SumedanganJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sumedangan' AND usaha='Jasa'");
$jasSumedangan = mysqli_num_rows($SumedanganJas);
$SumedanganDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sumedangan' AND usaha='Dagang'");
$dagSumedangan = mysqli_num_rows($SumedanganDag);
$SumedanganMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sumedangan' AND kriteria='Mikro'");
$mikSumedangan = mysqli_num_rows($SumedanganMik);
$SumedanganKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sumedangan' AND kriteria='Kecil'");
$kecSumedangan = mysqli_num_rows($SumedanganKec);
$SumedanganMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Sumedangan' AND kriteria='Menengah'");
$menSumedangan = mysqli_num_rows($SumedanganMen);

//select data by desa Tambung
$Tambung = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tambung'");
$jmlTambung = mysqli_num_rows($Tambung);
$dataTambung = mysqli_fetch_array($Tambung);
$TambungInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tambung' AND usaha='Industri'");
$indTambung = mysqli_num_rows($TambungInd);
$TambungJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tambung' AND usaha='Jasa'");
$jasTambung = mysqli_num_rows($TambungJas);
$TambungDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tambung' AND usaha='Dagang'");
$dagTambung = mysqli_num_rows($TambungDag);
$TambungMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tambung' AND kriteria='Mikro'");
$mikTambung = mysqli_num_rows($TambungMik);
$TambungKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tambung' AND kriteria='Kecil'");
$kecTambung = mysqli_num_rows($TambungKec);
$TambungMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tambung' AND kriteria='Menengah'");
$menTambung = mysqli_num_rows($TambungMen);

//select data by desa Tanjung
$Tanjung = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tanjung'");
$jmlTanjung = mysqli_num_rows($Tanjung);
$dataTanjung = mysqli_fetch_array($Tanjung);
$TanjungInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tanjung' AND usaha='Industri'");
$indTanjung = mysqli_num_rows($TanjungInd);
$TanjungJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tanjung' AND usaha='Jasa'");
$jasTanjung = mysqli_num_rows($TanjungJas);
$TanjungDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tanjung' AND usaha='Dagang'");
$dagTanjung = mysqli_num_rows($TanjungDag);
$TanjungMik = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tanjung' AND kriteria='Mikro'");
$mikTanjung = mysqli_num_rows($TanjungMik);
$TanjungKec = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tanjung' AND kriteria='Kecil'");
$kecTanjung = mysqli_num_rows($TanjungKec);
$TanjungMen = mysqli_query($konek, "SELECT * FROM data WHERE desa='Tanjung' AND kriteria='Menengah'");
$menTanjung = mysqli_num_rows($TanjungMen);

//penampilan data by get dataUMKM
$lihat = $_GET['dataUmkm'];
$showDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$lihat'");
$dataDesa = mysqli_num_rows($showDesa);

//by industri Desa
$desaIndustri = mysqli_query($konek, "SELECT * FROM data WHERE desa='$lihat' AND usaha='Industri'");
$jmlIndustriDesa = mysqli_num_rows($desaIndustri);

//by dagang Desa
$desaDagang = mysqli_query($konek, "SELECT * FROM data WHERE desa='$lihat' AND usaha='Dagang'");
$jmlDagangDesa = mysqli_num_rows($desaDagang);

//by jasa Desa
$desaJasa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$lihat' AND usaha='Jasa'");
$jmlJasaDesa = mysqli_num_rows($desaJasa);

//by mikro Desa
$desaMikro = mysqli_query($konek, "SELECT * FROM data WHERE desa='$lihat' AND kriteria='Mikro'");
$jmlMikroDesa = mysqli_num_rows($desaMikro);

//by kecil desa
$desaKecil = mysqli_query($konek, "SELECT * FROM data WHERE desa='$lihat' AND kriteria='Kecil'");
$jmlKecilDesa = mysqli_num_rows($desaKecil);

//by menengah desa
$desaMenengah = mysqli_query($konek, "SELECT * FROM data WHERE desa='$lihat' AND kriteria='Menengah'");
$jmlMenengahDesa = mysqli_num_rows($desaMenengah);

//by jenis usaha
$lihatJenis = mysqli_query($konek, "SELECT * FROM data WHERE usaha='$lihat'");
$jenisLihat = mysqli_num_rows($lihatJenis);

//by kriteria
$lihatKriteria = mysqli_query($konek, "SELECT * FROM data WHERE kriteria='$lihat'");
$kriteriaLihat = mysqli_num_rows($lihatKriteria);

//tampil data di peta desa
$deso = $_GET['peta'];
$showPeta = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso'");
$peta = mysqli_num_rows($showPeta);

//industri
$petaInd = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Industri'");
$ind = mysqli_num_rows($petaInd);

//Dagang
$petaDag = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Dagang'");
$dag = mysqli_num_rows($petaDag);

//Jasa
$petaJas = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Jasa'");
$jas = mysqli_num_rows($petaJas);

//select industri Desa
$industriDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Industri'");
$industriMenengahDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Industri' AND kriteria='Menengah'");
$industriKecilDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Industri' AND kriteria='Kecil'");
$industriMikroDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Industri' AND kriteria='Mikro'");

//select Dagang Desa
$dagangDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Dagang'");
$dagangMenengahDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Dagang' AND kriteria='Menengah'");
$dagangKecilDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Dagang' AND kriteria='Kecil'");
$dagangMikroDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Dagang' AND kriteria='Mikro'");

//select Jasa Desa
$jasaDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Jasa'");
$jasaMenengahDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Jasa' AND kriteria='Menengah'");
$jasaKecilDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Jasa' AND kriteria='Kecil'");
$jasaMikroDesa = mysqli_query($konek, "SELECT * FROM data WHERE desa='$deso' AND usaha='Jasa' AND kriteria='Mikro'");


//select loglat desa dari table desa
$longlatDesa = mysqli_query($konek, "SELECT * FROM desa WHERE nama='$deso'");
$iniDesa= mysqli_fetch_array($longlatDesa);
?>