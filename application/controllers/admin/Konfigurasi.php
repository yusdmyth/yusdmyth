<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  
  public function index()
  {
    redirect('admin/konfigurasi/aplikasi');
  }

  public function pendaftaran()
  {
    $data = konfigurasi('Konfigurasi Pendaftaran');
    $data['daftar'] = [
      'Buka'=>'Buka',
      'Tutup'=>'Tutup'
    ];
    $data['pengumuman'] = [
      'Buka'=>'Buka',
      'Tutup'=>'Tutup'
    ];
    $this->form_validation->set_rules('setdaftar', 'Pengaturan Pendaftaran', 'trim|required');
    $this->form_validation->set_rules('setpengumuman', 'Pengaturan Pengumuman', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->template->load('admin/template/template', 'admin/konfigurasi/pendaftaran', $data);
    } else {
      $post = $this->input->post(NULL, TRUE);
      $data = [
        'setdaftar'=>$post['setdaftar'],
        'setpengumuman'=>$post['setpengumuman']
      ];
      if($this->Konfigurasi_model->update($data)) {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.success("Berhasil update.")
          </script>
        ');
        redirect('admin/konfigurasi/pendaftaran');
      } else {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.error("GAGAL! Silahkan coba lagi nanti.")
          </script>
        ');
        redirect('admin/konfigurasi/pendaftaran');
      }
    }
  }

  public function aplikasi()
  {
		$data = konfigurasi('Konfigurasi Aplikasi');
		$data['admin'] = $this->db->get_where('users', ['level'=>1])->row();

    $this->form_validation->set_rules('nama_website', 'Nama Aplikasi', 'trim|required');
    $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
    $this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'trim|required');
    $this->form_validation->set_rules('telepon_sekolah', 'Telepon Sekolah', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->template->load('admin/template/template', 'admin/konfigurasi/aplikasi', $data);
    } else {
			$post = $this->input->post(NULL, TRUE);
      $data = [
        'nama_website'=>$post['nama_website'],
        'nama_sekolah'=>$post['nama_sekolah'],
        'alamat_sekolah'=>$post['alamat_sekolah'],
        'telepon_sekolah'=>$post['telepon_sekolah'],
				'keterangan'=>$post['keterangan'],
				'nama_kepsek'=>$post['nama_kepsek'],
				'nama_wakasek'=>$post['nama_wakasek']
			];
			if(!empty($_FILES['foto_kepsek']['name'])){
				$fotoKepsek = $this->_do_upload('foto_kepsek', 'kepsek.jpg');
				$data['foto_kepsek'] = $fotoKepsek['data']['upload_data']['file_name'];
			}
			if(!empty($_FILES['foto_wakasek']['name'])){
				$fotoWakasek = $this->_do_upload('foto_wakasek', 'wakasek.jpg');
				$data['foto_wakasek'] = $fotoWakasek['data']['upload_data']['file_name'];
			}

			$data_admin = [
				'name' => $post['nama_admin'],
				'username' => $post['username']
			];
			if(!empty($post['password'])){
				$data_admin['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
			}

			$this->db->update('users', $data_admin, ['id'=>$post['id_admin']]);

      if($this->Konfigurasi_model->update($data)) {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.success("Berhasil update.")
          </script>
        ');
        redirect('admin/konfigurasi/aplikasi');
      } else {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.error("GAGAL! Silahkan coba lagi nanti.")
          </script>
        ');
        redirect('admin/konfigurasi/aplikasi');
      }
    }
	}
	
	private function _do_upload($file, $file_name)
	{
		$this->load->library('upload');
		$config['upload_path']          = './assets/img/visi/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1024;
		$config['overwrite']            = TRUE;
		$config['file_name']						=	$file_name;

		$this->upload->initialize($config);
		$response = [
			'status' => 'false'
		];
		if (!$this->upload->do_upload($file)){
			$response['data'] = array('error' => $this->upload->display_errors());
		}else{
			$response['status']  = 'true';
			$response['data'] = array('upload_data' => $this->upload->data());
		}
		return $response;
	}

}

/* End of file Konfigurasi.php */
