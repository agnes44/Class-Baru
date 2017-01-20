<?php
class Banner
{
    public $bahan;
    public $bentuk;
    public $ukuran;

    const CONSTANT = 'Properti Banner';

    public function banner()
    {
        return "Untuk meamasang iklan, slogan atau pesan";
    } 
}


$Banner = new Banner();

$Banner->bahan = "Canvas";
$Banner->bentuk = "Persegi Panjang";
$Banner->ukuran = "1.5 m";

echo Banner::CONSTANT;
echo '<br/>';
echo $Banner->bahan;
echo "<br/>";
echo $Banner->bentuk;
echo "<br/>";
echo $Banner->ukuran;
echo "<br/>";
echo $Banner->Banner();
?>