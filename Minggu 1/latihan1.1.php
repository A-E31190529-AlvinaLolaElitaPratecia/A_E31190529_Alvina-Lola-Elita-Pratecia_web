<?php
	class buku {
		var $judulbuku;
		var $pengarang;
		var $penerbit;
		var $tahun;
		var $cetakan;
	}

$nama_buku = new buku();

$nama_buku -> judulbuku = "Senandika";
$nama_buku -> pengarang = "Nana";
$nama_buku -> penerbit = "Neo City";
$nama_buku -> tahun = "2019";
$nama_buku -> cetakan = "2019";

echo $nama_buku -> judulbuku;
echo"<br/>";
echo $nama_buku -> pengarang;
echo"<br/>";
echo $nama_buku -> penerbit;
echo"<br/>";
echo $nama_buku -> tahun;
echo"<br/>";
echo $nama_buku -> cetakan;
echo"<br/>";
?>