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
            <h1>Pertemuan 4</h1>
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
                <h3 class="card-title">Lingkaran </h3>

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
                //Membuat class lingkaran
                class Lingkaran{
                    //buat property
                    private $jari;
                    const PHI = 3.14;

                    //Method
                    function __construct($r)
                    {
                        $this->jari = $r;
                    }

                    //buat method getluas untuk hitung luas lingkaram
                    function getluas(){
                        return self::PHI * $this->jari * $this->jari;
                    }
                    
                    //buat method getkeliling untuk hitung keliling lingkaran
                    function getkeliling(){
                        return 2 * self::PHI * $this->jari;
                    }
                }
                // tutup class
                ?>

                <?php 
                // memanggil file atau class_lingkaran.php
                echo "Nilai PHI adalah = " . Lingkaran::PHI;
                $lingkar1 = new Lingkaran(10);
                $lingkar2 = new Lingkaran(4);
                echo "<br/>";
                //Menghitung luas lingkaran menggunakan fungsi getluas
                echo "<br/> Luas Lingkaran I adalah = " . $lingkar1->getluas();
                echo "<br/> Luas Lingkaran II adalah = " . $lingkar2->getluas();
                echo "<br/>";

                //Menghitung keliling lingkaran menggunakan fungsi getkeliling
                echo "<br/> Keliling lingkaran I adalah = " . $lingkar1->getkeliling();
                echo "<br/> Keliling lingkaran II adalah = " . $lingkar2->getkeliling();
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
                <h3 class="card-title">Manusia</h3>

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
                // Membuat class manusia
                class Manusia{
                    // Buat Property
                    var $nama;
                    var $warna;
                    // buatlag method atau function
                    function tampilkan_nama(){
                        return '<br>Nama saya adalah M Ramadhan Putra P';
                    }

                    function __construct(){
                        return 'Kulit saya berwarna Sawo Mateng';
                    }
                }
                // buat objek
                $manusia = new Manusia();

                echo $manusia -> __construct();
                echo $manusia -> tampilkan_nama();


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
                <h3 class="card-title">Form Nilai Siswa</h3>

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
                    <title>Document</title>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                </head>
                <body>
                    <div class="container">
                        <h2 style="text-align:center">Form Nilai Siswa</h2>
                        <hr/>
                <form method="POST" action="praktikum4.php">
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label> 
                    <div class="col-8">
                    <input id="nim" name="nim" placeholder="Masukan NIM Anda" type="text" class="form-control">
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
                    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                    <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Masukan Nilai Anda" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </div>
                </form>
                <?php 
                if($_POST){
                    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                    $keterangan = $ns->hitungNilai();
                    $hasil = $ns->kelulusan($keterangan);
                    $hasil2 = $ns->grade($keterangan);
                    echo 'NIM : ' . $ns->nim;
                    echo '<br/>Mata Kuliah : ' . $ns->matkul;
                    echo '<br/>Nilai : ' . $ns->nilai;
                    echo '<br/>Status : ' . $ns->kelulusan($keterangan);
                    echo '<br/>Grade : ' . $ns->grade($keterangan);
                }
                ?>
                </body>
                </html>

                <?php 
                class NilaiMahasiswa{
                    public $nim;
                    public $matkul;
                    public $nilai;
                    //buat method atau function construct, hitung nilai, predikat,grade
                    function __construct($nim, $matkul, $nilai)
                    {
                        //fungsi this -> memanggil properti dari method lain atau di luar function
                        $this->nim = $nim;
                        $this->matkul = $matkul;
                        $this->nilai = $nilai;
                    }

                    function hitungNilai(){
                        return $this->nilai;
                    }
                    function kelulusan($keterangan){
                        if($keterangan > 55){
                            return 'Anda Lulus';
                        }else{
                            return 'Anda tidak Lulus';
                        }
                    }
                    function grade($keterangan){
                        if ($keterangan >= 85 && $keterangan == 100){
                            return 'A';
                        }else if($keterangan >= 70 && $keterangan <= 84){
                            return 'B';
                        }else if($keterangan >= 56 && $keterangan <= 69){
                            return 'C';
                        }else if($keterangan >= 36 && $keterangan <= 55){
                            return 'D';
                        }else if($keterangan >= 10 && $keterangan <= 35){
                            return 'E';
                        }else{
                            return 'I';
                        }
                    }
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
  </div>
  <!-- /.content-wrapper -->
<?php 
include_once "footer.php";
?>