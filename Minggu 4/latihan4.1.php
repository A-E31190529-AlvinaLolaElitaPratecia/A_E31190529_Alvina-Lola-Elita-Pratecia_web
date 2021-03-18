<?php
class MobilLengkap{

	public function nonyonTV()
	{
		return"Tv dihidupkan.Mencari chanel<br>TV menampilkan gambar.";
	}
}

class MobilBMW extends MobilLengkap{
	public function hidupkanMobil()
	{
		$pesan ="Menyalakan mobil<br>";
		return $pesan . $this ->nontonTV();
	}
	public function matikanMobil()
	{
		return "Mematikan mobil";
	}
	public function ubahGigi()
	{
		return "Mengubah gigi";
	}
}
?>