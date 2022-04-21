<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="p-5">
    <h3>Belanja Online</h3>
    <hr />
<div class="container-fluid row">
        <div class="col-8">
<form class="p-3 border border-info" action="form_belanja.php" method="POST">
<div class="container">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="proses" value="proses" class="btn btn-success">Kirim</button>
    </div>
  </div>
</div>
</form> 
</div> 

<div class="col-4">
            <div class="container-fluid bg-primary text-white p-2 border border-primary">
                Daftar Harga
            </div>
            <div class="container-fluid p-2 border border-info">
                TV : 4.200.000
            </div>
            <div class="container-fluid p-2 border border-info">
                Kulkas: 3.100.000
            </div>
            <div class="container-fluid p-2 border border-info">
                Mesin Cuci : 3.800.000
            </div>
            <div class="container-fluid bg-primary text-white p-2 border border-primary">
                Harga dapat berubah setiap saat
            </div>
        </div>


<div class="row justify-content-between"style="margin-top: 4px;" >
    <div class="col-md-4 pb-1">
        <?php 
        $nama = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if ($produk == "TV") {
            $total = $jumlah * 4200000;
        }elseif($produk == "Kulkas"){
            $total = $jumlah * 3100000;
        }elseif($produk == "Mesin Cuci"){
            $total = $jumlah * 3800000;
        }else{
            0 ;
        }

        echo "Nama Customer : $nama";
        echo "<br>Produk Pilihan : $produk";
        echo "<br>Jumlah Beli : $jumlah";
        echo "<br>Total Belanja : Rp. " . number_format($total) . ".-"; 

        ?>
    </div>
</div>
<hr />
</body>
</html>