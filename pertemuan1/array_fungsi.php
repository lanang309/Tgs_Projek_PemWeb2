<?php
$ar_buah = ["p"=>"pepaya","a"=> "apel","m"=> "mangga","j"=>"jambu"];
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li> $buah - $v </li>";
}
echo "</ol>";
//fungsi sort berguna mengurutkan array dalam urutan menaik
sort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</lo>";
//Fungsi asort berguna mengurutkan array dalam menurun
arsort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li>$buah - $k </li>";
}
echo "</ol>"
?>

<?php 
$tims = ["erwin","heru","ali","zaki"];
array_pop($tims );
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>

<?php 
$tims = ["erwin","heru","ali","zaki"];
array_push($tims, "wati");
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>

<?php 
$tims = ["erwin","heru","ali","zaki"];
array_shift($tims);
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>

<?php 
$tims = ["erwin","heru","ali","zaki"];
array_unshift($tims, "joko","wati");
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>