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
            <h1>Praktikum 3</h1>
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
                <h3 class="card-title">Tugas Pertemuan 3</h3>

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
                <a href="pertemuan3/tgs_bootstrap/tampilan.php">Bikin Sidebar , Header , Footer di AdminLTE</a>
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
                <h3 class="card-title">Bikin Form Nilai </h3>

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
                <form method="POST" action="praktikum3.php">
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

                <?php 
                //ngambil reques data yang kita input
                $proses = $_POST['proses'];
                $nama_siswa = $_POST['name'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];
                $total = $uts + $uas + $tugas;
                $_nilai = $total/3;
                $hasil_ujian = kelulusan($_nilai);
                $peringkat = grade($_nilai);

                //Menampilkan data yang telah kita ambil
                echo "Nama : $nama_siswa";
                echo "<br/>Mata Kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $uts";
                echo "<br/>Nilai UAS : $uas";
                echo "<br/>Nilai Tugas : $tugas";
                echo "<br/> Grade : $peringkat";
                echo "<br/>Keterangan : $hasil_ujian";
                echo "<br/>Data Telah di $proses";
                ?>

                <?php 
                function kelulusan ($_nilai){
                    if ($_nilai > 55){
                        return 'Anda Lulus';
                    }else {
                        return ' Anda tidak lulus , maaf banget';
                    }
                }
                function grade($_nilai){
                    if ($_nilai >= 85){
                        return "A";
                    }elseif ($_nilai >= 70){
                        return "B";
                    }elseif ($_nilai >= 56){
                    return  "C";
                    }elseif ($_nilai >= 36){
                        return "D";
                    }elseif ($_nilai >= 10){
                        return "E";
                    }else{
                        return "I(Tidak ada nilai)";
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

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bikin Atas , Bawah , dan Tampil</h3>

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
                    <title>SASS-STTNF</title>
                </head>
                <body>
                    <header>
                        <h2>Student Activity Score</h2>
                        <a href="#">Home</a>
                        <a href="#">Activity</a>
                        <a href="#">MyScore</a>
                        <a href="#">Login</a>
                    </header>
                    <hr/>

                    <footer>
                        <p>Created By Mahasiswa <a href="https://elena.nurulfikri.ac.id/" target="_blank"></a> STT NF 2022</p>
                    </footer>
                </body>
                </html> 

                <?php 
                include_once 'atas.php';
                ?>
                <h1>Welcome To MY Blog</h1>
                <?php 
           
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