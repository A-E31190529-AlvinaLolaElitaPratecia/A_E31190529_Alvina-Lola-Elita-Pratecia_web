<?php
	class kendaraan {
		var $jeniskendaraan;
		var $jumlahroda;
		var $warna;
		var $bahanbakar;
		var $harga;
		var $tahunpembuatan;
		var $merek;

		public function status_subsidi($bahanbakar,$tahunpembuatan){
			if ($bahanbakar=='premium' && $tahunpembuatan < 2005)
			{
				return "Ya";
			}else{
				return "Tidak";
			}
		}
		public function hargaSecond($tahunpembuatan,$harga)
		{
			if($tahunpembuatan>2005){
				return $harga-($harga*(20/100));
			}else if ($tahunpembuatan>2005){
				return $harga-($harga*(30/100));
			}else if($tahunpembuatan<2005){
				return $harga-($harga*(40/100));
			}
		}
	}

	$mobil=new kendaraan();
	$motor=new kendaraan();

	$mobil -> bahanbakar = "solar";
	$mobil -> tahunpembuatan = 2008;
	$motor -> bahanbakar = "premium";
	$mobil -> tahunpembuatan = 2014;

	echo $mobil -> status_subsidi ($mobil->bahanbakar,$mobil->tahunpembuatan);
	echo "<br/>";
	echo $mobil -> status_subsidi ($mobil->bahanbakar,$mobil->tahunpembuatan);
	echo "<hr/>";

	$mobil->tahunpembuatan=2016;
	$mobil->harga=60000000;

	echo $mobil->hargaSecond ($mobil->tahunpembuatan,$mobil->harga);
?>