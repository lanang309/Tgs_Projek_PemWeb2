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
            <h1>Praktikum 5</h1>
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
                <h3 class="card-title">Tugas</h3>

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
                class Dispenser{
                    protected $volume;
                    protected $hargasegelas;
                    const volumeGelas = 250;
                    public $namaMinuman;

                    public function set_volume($v){
                        return $this->volume = $v;
                    }
                    public function set_hargasegelas($hs){
                        return $this->hargasegelas = $hs;
                    }
                    public function pengurangan($vol){
                        $this->volume = $vol - self::volumeGelas;
                        echo "Hasil volume bernilai ".$this->volume ." " ."ML";
                    }
                }

                $air = new Dispenser();
                echo $air -> namaMinuman  = "<b>AIR MINERAL SEGAR</b>";
                echo "<hr/>";
                echo $air -> set_volume("Volume galon 1000 ML");
                echo "<br/>";
                echo $air -> set_hargasegelas("Harga segelas Rp. " .number_format("3000",0,".","."));
                echo "<br/>";
                echo "Putra membeli 1 gelas air yang volumenya " . Dispenser::volumeGelas ."  " ." ML";
                echo "<br/>";
                $air->pengurangan(1000);
                ?>

                <hr>

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

                <?php 
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
                    <title>Account Bank</title>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
                </head>
                <body>
                <table class="table" text->
                <h5><b>Account Bank</b></h5>
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
                <h3 class="card-title">Buah & Fruit</h3>

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
                //buka class buah
                class buah{
                    //buat property
                    public $name;
                    protected $color;
                    private $berat;

                    //buat method
                    public function set_color($c){
                        return $this -> color = $c;
                    }
                    public function set_berat($b){
                        return $this -> berat = $b;
                    }
                }
                //buat object
                $mangga = new buah();
                echo $mangga -> name = 'Mangga';
                echo "<br/>";
                echo $mangga -> set_color('Hijau');
                echo "<br/>";
                echo $mangga -> set_berat('300 KG');
                ?>

                <hr>

                <?php
                class Fruit{
                    public $name;
                    public $warna;

                    public function __construct($name, $warna)
                    {
                        $this->name = $name;
                        $this->warna = $warna;
                    }

                    public function intro(){
                        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
                    }
                }
        
                class Strawberry extends Fruit{
                    public function message(){
                        echo "Aku adalah sebuah Strawberry atau Pisang?";
                    }
                }
                $buah = new Strawberry("Strawberry", "Merah");
                $buah->message();
                $buah->intro();
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