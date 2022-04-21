<?php
//  manggil file atau class_persegiPanjang.php
require_once 'class_persegiPanjang.php';
$LuasPersegi = new PersegiPanjang();
echo "Didapati : ";
echo "<br>";
echo "Panjang dari Persegi Panjang : " .$LuasPersegi->getpanjang(20) ." " ."cm";
echo "<br>";
echo "Lebar dari Persegi Panjang : " .$LuasPersegi->getlebar(8) ." " ."cm";
echo "<hr/>";
echo "Hasilnya : ";
echo "<br>";
echo $LuasPersegi->luasp() ." " ."cm";
echo "<br>";
echo $LuasPersegi->kelilingp() ." " ."cm";
?>