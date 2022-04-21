<?php
// buat class persegi panjang
class PersegiPanjang{
    private $panjang;
    private $lebar;

     function luasp(){
        $luas = $this->panjang * $this->lebar;
        return "Luas dari Persegi Panjang : " .$luas;
    }
     function kelilingp(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return "Keliling dari Persegi Panjang : " .$keliling;
    }

     function getlebar($lebar){
        return $this->lebar = $lebar;
    }
    
     function getpanjang($panjang){
        return $this->panjang = $panjang;
    }
}
?>