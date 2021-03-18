<?php
	class buku {
		var $judulbuku;
		var $pengarang;
		var $penerbit;
		var $tahun;
		var $cetakan;

		function tampilkan_judulbuku(){
			return "Senandika <br/>";
		}
		function tampilkan_pengarang(){
			return "Nana <br/>";
		}
		function tampilkan_penertbit(){
			return "Neo City <br/>";
		}
	}
	$buku=new buku();

	echo $buku -> tampilkan_judulbuku();
	echo $buku -> tampilkan_pengarang();
	echo $buku -> tampilkan_penertbit();
?>