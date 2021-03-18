<?php
class laptop{
	public $merk;
	public $pemilik;

	function hidupkan_laptop(){
		return "Hidupkan laptop";
	}
	function matikan_laptop(){
		return "matikan laptop";
	}
}

$laptop = new laptop;
$laptop->merk="ASUS";
$laptop->pemilik="A";

echo $laptop->merk;
echo "<br/>";
echo $laptop->pemilik;
echo "<br/>";

echo $laptop->hidupkan_laptop();

echo "<br/>";
$laptop = new laptop;
$laptop->merk="Acer";
$laptop->pemilik="B";

echo $laptop->merk;
echo "<br/>";
echo $laptop->pemilik;
echo "<br/>";

echo $laptop->matikan_laptop();

echo "<br/>";
$laptop = new laptop;
$laptop->merk="Lenovo";
$laptop->pemilik="C";

echo $laptop->merk;
echo "<br/>";
echo $laptop->pemilik;
echo "<br/>";

echo $laptop->hidupkan_laptop();
echo "<br/>";
echo $laptop->matikan_laptop();
?>