<?php 
 define ('PHI' , 3.14);
 define ('DBNAME', 'inventori');
 define ('DBSERVER', 'localhost');

 $jari = 8;
 $luas = PHI * $jari * $jari;
 $kll = 2 * PHI * $jari;

 echo "Luas lingkaran dengan jari-jari $jari : $luas";
 echo "<br/>Keliling nya ; $kll";
?>
<hr/>
<?php
echo 'Nama Databesnya : ' .DBNAME;
echo '<br/>Lokasi Databasenya ada di ' .DBSERVER;
?>