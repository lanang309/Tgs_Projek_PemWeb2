<?php
class Account{
    public $no_akun;
    public $nama;
    public $saldo;

    function __construct($no_akun,$nama, $saldo){
        $this->no_akun = $no_akun;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }
}
?>