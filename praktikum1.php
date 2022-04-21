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
            <h1>Praktikum 1</h1>
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
                <h3 class="card-title">Array Buah</h3>

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
                    $ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];
                    //cetak buah index ke 2
                    echo "Ini adalah hasil data buah dalam array";
                    echo "<br/>$ar_buah[2]";
                    //cetak jumlah buah
                    echo '<br/>Jumlah buah ' .count($ar_buah);
                    //cetak seluruh buah
                    echo "<ol>";
                    foreach ($ar_buah as $buah) {
                        echo "<li>$buah</li>";
                    }
                    echo "<ol>";
                    //tambahkan data array
                    $ar_buah[] = "Durian";
                    //Hapus salah satu buah berdaskan indexnya 
                    unset ($ar_buah[1]);
                    //Ubah buah index ke dua menjadi manggis
                    $ar_buah[2] = "Manggis";
                    echo "<ul>";
                    foreach ($ar_buah as $k => $v) {
                        echo "<li>Buah index ke - $k adalah $v </li>";
                    }
                    echo "</ul>";
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
                <h3 class="card-title">Array Fungsi</h3>

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
                        <h3 class="card-title">Array Siswa</h3>

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
                            $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
                            $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
                            $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
                            $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
                            $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
                        ?>
                            <h2 style="text-align: center" >Daftar Nilai Siswa</h2>
                            <!--Buka table--> 
                            <table style="text-align: center" border="1" width="100%">
                                <thead style ="background-color:darksalmon">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            NIM
                                        </th>
                                        <th>
                                            UTS
                                        </th><th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $nomor = 1;
                                        foreach ($ar_nilai as $nilai) {
                                            echo '<tr><td>'.$nomor.'</td>';
                                            echo '<td>'.$nilai['nim'].'</td>';
                                            echo '<td>'.$nilai['uts'].'</td>';
                                            echo '<td>'.$nilai['uas'].'</td>';
                                            echo '<td>'.$nilai['tugas'].'</td>';
                                            $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
                                            echo '<td>'. number_format($nilai_akhir,2,',','.').'</td>';
                                            echo '<tr/>';
                                            $nomor++;
                                    }
                                    ?>
                                </tbody>
                            <table>
                        
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
                        <h3 class="card-title"><b>Variabel Konsta</b></h3>

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
                    <h3 class="card-title"><b>Variabel User</b></h3>

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
                        $nama = "Muhammad Ramadhan Putra Prayoga";
                        $umur = 20;
                        $berat = 60;

                        echo "Nama : $nama ";
                        echo "<br/>Umur : $umur Tahun ";
                        echo "<br/>Berat : $berat Kg";

                        echo "<br/>Hello $nama apa kabar";
                        echo "<br/>Hai nama saya $nama umur saya $umur salam kenal semua ";
                        echo "<hr/>";
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