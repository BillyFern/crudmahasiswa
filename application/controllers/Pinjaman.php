<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pinjaman extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pinjaman_model');
  }

  public function index()
  {
     $data['judul'] = "Halaman Pinjaman";
     $data['pinjaman'] = $this->Pinjaman_model->get();
     $this->load->view("layout/header");
     $this->load->view("pinjaman/vw_pinjaman", $data);
     $this->load->view("layout/footer");
  }
  public function tambah(){
    $data['judul'] = "Halaman Tambah Pinjaman";
    $this->load->view("layout/header");
    $this->load->view("pinjaman/vw_tambah_pinjaman", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($nik)
  {
    $this->Pinjaman_model->delete($nik);
    redirect('Pinjaman');
  }
  public function upload(){
    $data = [
      'nik' => $this->input->post('nik'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'alamat' => $this->input->post('alamat'),
      'no_telpon' => $this->input->post('no_telpon'),
      'email' => $this->input->post('email'),
      'besar_pinjaman' => $this->input->post('besar_pinjaman'),
      'durasi' => $this->input->post('durasi'),
    ];
    $this->Pinjaman_model->insert($data);
    redirect('Pinjaman');
  }

  public function edit($nik){
    $data['judul'] = "Halaman edit pinjaman";
    $data['pinjaman'] = $this->Pinjaman_model->getById($nik);
    $this->load->view("layout/header");
    $this->load->view("pinjaman/vw_ubah_pinjaman", $data);
    $this->load->view("layout/footer");
  }

  public function update(){
    $data = [
      'nik' => $this->input->post('nik'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'alamat' => $this->input->post('alamat'),
      'no_telpon' => $this->input->post('no_telpon'),
      'email' => $this->input->post('email'),
      'besar_pinjaman' => $this->input->post('besar_pinjaman'),
      'durasi' => $this->input->post('durasi'),
    ];
    $nik = $this->input->post('nik');
    $this->Pinjaman_model->update(['nik' => $nik], $data);
    redirect('Pinjaman');
  }
}

