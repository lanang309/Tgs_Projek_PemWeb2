<?php 
require_once "classbank.php";
$bank1 = new Account("C011", "Ahmad", number_format("6000000",0,".","."));
$bank2 = new Account("C012", "Budi", number_format("5350000",0,".","."));
$bank3 = new Account("C013", "Kurniawan", number_format("2500000",0,".","."));
$ar_bank = [$bank1,$bank2,$bank3];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT BANK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<table class="table" text->
  <h1>Account Bank </h1>
  <hr/>
  <p>Ahmad nabung Rp 1.000.000 <br/> Budi tarik uang Rp 2.500.000</p>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No. Akun</th>
      <th scope="col">Nama</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $nomor = 1;
      foreach ($ar_bank as $bank){
    ?>
    <tr>
        <td scope="row"><?=$nomor?></td>
        <td><?=$bank->no_akun?></td>
        <td><?=$bank->nama?></td>
        <td><?=$bank->saldo?></td>
    </tr>
    <?php 
      $nomor++;
    }  
    ?>
  </tbody>
</table>
</body>
</html>