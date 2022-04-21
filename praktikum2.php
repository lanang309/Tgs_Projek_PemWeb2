<?php 
include_once "header.php";
include_once "sidebar.php";
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 2 </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Belanja Online</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
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
                <form class="p-3 border border-info" action="praktikum2.php" method="POST">
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
                
                </body>
                </html>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">IF Else</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <?php 
                $teman = "Zaki";

                if($teman == "febri"){
                    echo "Zaki adalah teman saya";
                }else{
                    echo "Zaki Bukan teman saya";
                }

                ?>


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Nilai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Form Nilai</title>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                </head>

                <body>
                    <h2 style="text-align: center;">Form Nilai</h2>
                <form method="POST" action="praktikum2.php">
                    <div class="container">
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <input id="name" name="name" placeholder="Masukan nama anda" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="DDP">Dasar-Dasar Pemograman</option>
                        <option value="WEB">Pemograman Web</option>
                        <option value="BASDAT">Basis Data</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukan nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukan nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan nilai Tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </div>
                </form>

                </body>
                </html>

                <hr>

                <?php 
                //ngambil reques data yang kita input
                $proses = $_POST['proses'];
                $nama_siswa = $_POST['name'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];
                $total = $uts + $uas + $tugas;
                $alphabet = $total/3;
                if ($alphabet <= 55){
                    $lulus = "Anda Tidak Lulus";
                }else{
                    $lulus = "Selamat Anda Lulus";
                }
                if ($alphabet >= 85){
                    $grade = "A";
                }elseif ($alphabet >= 70){
                    $grade = "B";
                }elseif ($alphabet >= 56){
                    $grade = "C";
                }elseif ($alphabet >= 36){
                    $grade = "D";
                }elseif ($alphabet >= 10){
                    $grade = "E";
                }else{
                    $grade = "I(Tidak ada nilai)";
                }

                //Menampilkan data yang telah kita ambil
                echo "Nama : $nama_siswa";
                echo "<br/>Mata Kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $uts";
                echo "<br/>Nilai UAS : $uas";
                echo "<br/>Nilai Tugas : $tugas";
                echo "<br/> Grade : $grade";
                echo "<br/>Keterangan : $lulus";
                echo "<br/>Data Telah di $proses";
                ?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
include_once "footer.php";
?>