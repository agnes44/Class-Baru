<?php
class Karpet 
{
    public $bahan;
    public $ukuran;
    public $warna;

    const MIN = 0, MAX = 400;
    
    public $width, $height;

    public function __construct($w = 0, $h = 0)
    {
        $this->width = self::clamp($w);
        $this->height = self::clamp($h);
    }

    public function __toString()
    {
        return "Ukuran [width=$this->width, height=$this->height]";
    }


    protected static function clamp($value)
    {
        if($value < self::MIN) $value = self::MIN;
        if($value > self::MAX) $value = self::MAX;

        return $value;
    }

    public function karpet()
    {
        return "Alas serbaguna";
    }
}

$Karpet = new Karpet();

$Karpet->bahan = "Wol";
$Karpet->warna = "Coklat";

echo $Karpet->bahan;
echo "<br/>";
echo (new Karpet(170, 230));
echo "<br/>";
echo $Karpet->warna;
echo "<br/>";
echo $Karpet->karpet();
?>