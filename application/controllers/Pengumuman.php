<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Pengumuman_model');
  }
  
  public function index()
  {
    $data = konfigurasi('Pengumuman');
    $this->form_validation->set_rules('nisn', 'NISN', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->template->load('templates/template', 'pengumuman', $data);
    } else {
      $nisn = $this->input->post('nisn', TRUE);
      if($this->Pengumuman_model->getByNisn($nisn)->num_rows() < 1) {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.error("NISN Belum Terdaftar, Silahkan Mendaftar Terlebih Dahulu");
          </script>
        ');
        redirect('pengumuman');
      } else {
        $formulir = $this->Pengumuman_model->getByNisn($nisn)->row();
        if($formulir->status_pendaftaran == "Belum Diverifikasi") {
          $this->session->set_flashdata('notif', '
            <script>
              toastr.warning("Data anda belum diverifikasi, silahkan menunggu.");
            </script>
          ');
          redirect('pengumuman');
        }
        $data['formulir'] = $formulir;
        $this->printPDF($data);
      }
    }
  }

  private function printPDF($data)
	{
		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('cetak/pengumuman', $data, TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}

}

/* End of file Pengumuman.php */
