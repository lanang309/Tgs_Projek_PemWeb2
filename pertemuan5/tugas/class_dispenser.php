<?php 
class Dispenser{
    protected $volume;
    protected $hargasegelas;
    const volumeGelas = 250;
    public $namaMinuman;

    public function set_volume($v){
        return $this->volume = $v;
    }
    public function set_hargasegelas($hs){
        return $this->hargasegelas = $hs;
    }
    public function pengurangan($vol){
        $this->volume = $vol - self::volumeGelas;
        echo "Hasil volume bernilai ".$this->volume ." " ."ML";
    }
}

$air = new Dispenser();
echo $air -> namaMinuman  = "<b>AIR MINERAL SEGAR</b>";
echo "<hr/>";
echo $air -> set_volume("Volume galon 1000 ML");
echo "<br/>";
echo $air -> set_hargasegelas("Harga segelas Rp. " .number_format("3000",0,".","."));
echo "<br/>";
echo "Putra membeli 1 gelas air yang volumenya " . Dispenser::volumeGelas ."  " ." ML";
echo "<br/>";
$air->pengurangan(1000);
?>