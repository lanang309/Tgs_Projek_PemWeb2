<?php 
class Mahasiswa_model extends CI_Model{
    //Buat Property atau Variabel
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        //contoh penggunaan ternary operator
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
?>