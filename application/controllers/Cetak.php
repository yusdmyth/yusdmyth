<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cetak_model');
    $this->load->library('form_validation');
  }
  
  public function index()
  {
    $data = konfigurasi('Cetak');

    $this->form_validation->set_rules('nisn', 'NISN', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->template->load('templates/template', 'cetak/cetak', $data);
    } else {
      $nisn = $this->input->post('nisn', TRUE);
      if($this->Cetak_model->getByNisn($nisn)->num_rows() < 1) {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.error("NISN Belum Terdaftar, Silahkan Mendaftar Terlebih Dahulu");
          </script>
        ');
        redirect('cetak');
      } else {
        $formulir = $this->Cetak_model->getByNisn($nisn)->row();
        if($formulir->status_pendaftaran == "Belum Diverifikasi") {
          $this->session->set_flashdata('notif', '
            <script>
              toastr.warning("Data anda belum diverifikasi, silahkan menunggu.");
            </script>
          ');
          redirect('cetak');
        } 
        redirect('cetak/bukti/'.$formulir->id);
      }
    }
  }

  public function bukti($id = NULL)
  {
    if ($id == NULL) redirect('cetak');
    $formulir = $this->Cetak_model->getById($id)->row_array();
    if($this->Cetak_model->getById($id)->num_rows() < 1) {
      $this->session->set_flashdata('notif', '
        <script>
          toastr.error("NISN Belum Terdaftar, Silahkan Mendaftar Terlebih Dahulu");
        </script>
      ');
      redirect('cetak');
    } else {
      $formulir = $this->Cetak_model->getById($id)->row_array();
      if($formulir['status_pendaftaran'] == "Belum Diverifikasi") {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.warning("Data anda belum diverifikasi, silahkan menunggu.");
          </script>
        ');
        redirect('cetak');
      }
      $data = konfigurasi('Cetak');
      $data['siswa'] = $formulir;
      $this->load->view('cetak/bukti-pendaftaran', $data);
    }
  }

}

/* End of file Cetak.php */
