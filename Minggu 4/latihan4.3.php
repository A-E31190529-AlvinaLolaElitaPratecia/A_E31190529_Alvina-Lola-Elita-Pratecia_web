<?php
// buat class induk: Tablet
class tablet {

   public $merk;
   public $camera;
   public $memory;

   public function beli_tablet() {
     return "Beli tablet baru";
   }
}

// turunkan class tablet ke handphone
class handphone extends tablet {

   public function lihat_spec() {
     return "merk: $this->merk, camera: $this->camera,
     memory: $this->memory";
   }
}

// buat objek dari class handphone (instansiasi)
$handphone_baru = new handphone();

// isi property objek
$handphone_baru->merk = "Apple";
$handphone_baru->camera ="6 Pixel";
$handphone_baru->memory = "4 GB";

//panggil method objek
echo $handphone_baru->beli_tablet();
echo "<br />";
echo $handphone_baru->lihat_spec();
?>