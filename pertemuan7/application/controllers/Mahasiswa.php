<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('mahasiswa_model', 'mhs1');

        // buat objek model 1 dan nilainya
        $this->mhs1->id=112;
        $this->mhs1->nim="01143";
        $this->mhs1->nama='Putra P';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model', 'mhs2');

        // buat objek model 2 dan nilainya
        $this->mhs2->id=113;
        $this->mhs2->nim="01122";
        $this->mhs2->nama='Yulia';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        // simpan objek yang kita buat tadi ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/index', $data);
    }

    //method dosen
    public function dosen(){
        //dosen 1
        $this->load->model('dosen_model','dsn1');

        $this->dsn1->nidn="022011";
        $this->dsn1->pendidikan='S1';

        //dosen 2
        $this->load->model('dosen_model','dsn2');

        $this->dsn2->nidn="023011";
        $this->dsn2->pendidikan='S1';
        
        //dosen 3
        $this->load->model('dosen_model','dsn3');

        $this->dsn3->nidn="022011";
        $this->dsn3->pendidikan='S1';  
        
        // simpan objek yang kita buat tadi ke dalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/dosen', $data);
    }

    //method matakuliah
    public function matakuliah(){
        //matkul 1
        $this->load->model('matakuliah_model','matkul1');

        $this->matkul1->nama="Basis Data";
        $this->matkul1->sks="2";
        $this->matkul1->kode="Basdat";

        //matkul 2
        $this->load->model('matakuliah_model','matkul2');

        $this->matkul2->nama="Pemograman Web";
        $this->matkul2->sks="3";
        $this->matkul2->kode="PW";

        //matkul 3
        $this->load->model('matakuliah_model','matkul3');

        $this->matkul3->nama="Jaringan Komputer";
        $this->matkul3->sks="2";
        $this->matkul3->kode="Jarkom";

        // simpan objek yang kita buat tadi ke dalam array
        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_matkul'] = $list_matkul;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/matakuliah', $data);

    }
}
?>