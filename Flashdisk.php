<?php
class Flashdisk
{
    public $merek;
    public $kapasitas;
    public $bentuk;
    public $warna;

    const KAP = array('4gb','8gb','16gb','32gb');

    function __construct()
    {
        $a = func_get_args();
        $c = func_num_args();
        if(method_exists($this, $l ='__construct'.$c))
        {
            call_user_func_array(array($this,$l),$a);
        }
    }


    function __construct1($a1,$a2)
    {
        echo('kapasitas yang tersedia: '.$a1.','.$a2.PHP_EOL);
    }    

    public function flashdisk()
    {
        return "Untuk meyimpan data atau file ";
    }
}

$Flashdisk = new Flashdisk();

$Flashdisk->merek = "Sandisk";
$Flashdisk->bentuk = "Gelang";
$Flashdisk->warna = "Merah";

echo $Flashdisk->merek;
echo "<br/>";
echo Flashdisk::KAP[2];
echo "<br/>";
echo $Flashdisk->bentuk;
echo "<br/>";
echo $Flashdisk->warna;
echo "<br/>";
echo $Flashdisk->flashdisk();
$Flashdisk = new Flashdisk('32gb','8gb');
?>
