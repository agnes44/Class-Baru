<?php
class Headset
{
    public $pemilik;
    public $merek;
    public $warna;

    const TITLE='headset';

    public static function getAll()
    {
        $a  = get_called_class();
        return "Macam macam property`".$a::TITLE."`";	
    }

    public function headset()
    {
        return "Untuk reproduksi suara ";
    }	
}

$Headset_me = new Headset();

$Headset_me->pemilik = "Agnes";
$Headset_me->merek = "Samsung";
$Headset_me->warna = "Biru";

echo Headset::getAll()."<br/>";
echo $Headset_me->pemilik;
echo "<br/>";
echo $Headset_me->merek;
echo "<br/>";
echo $Headset_me->warna;
echo "<br/>";
echo $Headset_me->headset()."<br><br/>";

class Earphone extends Headset
{
    const TITLE='earphone';  
}


$Earphone_me = new Earphone();

$Earphone_me->pemilik = "Lina";
$Earphone_me->merek = "Nokia";
$Earphone_me->warna = "Putih";

echo Earphone::getAll()."<br/>";
echo $Earphone_me->pemilik;
echo "<br/>";
echo $Earphone_me->merek;
echo "<br/>";
echo $Earphone_me->warna;
echo "<br/>";
echo $Earphone_me->headset();	
?>
