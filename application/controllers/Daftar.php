<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

  private $_shun = NULL;
  private $_foto = NULL;
  private $_kartu_keluarga = NULL;
  private $_ktp = NULL;
  private $_akta = NULL;
  
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('upload');
    $this->load->model('Daftar_model');
  }
  
  public function index()
  {
    $data = konfigurasi('Daftar');

    // Siswa
    $data['jenis_kelamin'] = [
      'Laki - laki'=>'Laki - laki',
      'Perempuan'=>'Perempuan'
    ];
    $data['agama_siswa'] = [
      'Islam'=>'Islam',
      'Kristen Protetan'=>'Kristen Protetan',
      'Katholik'=>'Katholik',
      'Hindu'=>'Hindu',
      'Budha'=>'Budha',
      'Khonghucu'=>'Khonghucu',
      'Kepercayaan Kepada Tuhan YME'=>'Kepercayaan Kepada Tuhan YME',
      'Lainnya'=>'Lainnya'
    ];
    $data['kebutuhan_khusus'] = [
      'Tidak'=>'Tidak',
      'Netra (A)'=>'Netra (A)',
      'Rungu (B)'=>'Rungu (B)',
      'Grahita Ringan (C)'=>'Grahita Ringan (C)',
      'Grahita Sedang (C1)'=>'Grahita Sedang (C1)',
      'Daksa Ringan (D)'=>'Daksa Ringan (D)',
      'Daksa Sedang (D1)'=>'Daksa Sedang (D1)',
      'Laras (E)'=>'Laras (E)',
      'Wicara (F)'=>'Wicara (F)',
      'Tuna Ganda (G)'=>'Tuna Ganda (G)',
      'Hiper Aktif (H)'=>'Hiper Aktif (H)',
      'Cerdas Istimewa (I)'=>'Cerdas Istimewa (I)',
      'Bakat Istimewa (J)'=>'Bakat Istimewa (J)',
      'Kesulitan Belajar (K)'=>'Kesulitan Belajar (K)',
      'Narkoba (N)'=>'Narkoba (N)',
      'Indigo (O)'=>'Indigo (O)',
      'Down Sindrome (P)'=>'Down Sindrome (P)',
      'Autis (Q)'=>'Autis (Q)'
    ];
    $data['tempat_tinggal'] = [
      'Bersama Orang Tua'=>'Bersama Orang Tua',
      'Wali'=>'Wali',
      'Kos'=>'Kos',
      'Asrama'=>'Asrama',
      'Panti Asuhan'=>'Panti Asuhan',
      'Lainnya'=>'Lainnya'
    ];
    $data['moda_transportasi'] = [
      'Jalan Kaki'=>'Jalan Kaki',
      'Kendaraan Priadi'=>'Kendaraan Priadi',
      'Kendaraan Umum/Angkot/Pete-pete'=>'Kendaraan Umum/Angkot/Pete-pete',
      'Jemputan Sekolah'=>'Jemputan Sekolah',
      'Kereta Api'=>'Kereta Api',
      'Ojek'=>'Ojek',
      'Andong/Bendi/Sado/Dokar/Delman/Beca'=>'Andong/Bendi/Sado/Dokar/Delman/Beca',
      'Perahu Penyebrangan/Rakit/Getek'=>'Perahu Penyebrangan/Rakit/Getek',
      'Lainnya'=>'Lainnya'
    ];
    $data['alasan_layak_pip'] = [
      '-'=>'-',
      'Pemegang PKH/KPS/KIP'=>'Pemegang PKH/KPS/KIP',
      'Penerima BSM 2014'=>'Penerima BSM 2014',
      'Yatim Piatu/Panti Asuhan/Panti Sosial'=>'Yatim Piatu/Panti Asuhan/Panti Sosial',
      'Dampak Bencana Alam'=>'Dampak Bencana Alam',
      'Pernah Drop OUT'=>'Pernah Drop OUT',
      'Siswa Miskin/Rentan Miskin'=>'Siswa Miskin/Rentan Miskin',
      'Daerah Konflik'=>'Daerah Konflik',
      'Keluarga Terpidana'=>'Keluarga Terpidana',
      'Kelainan Fisik'=>'Kelainan Fisik'
    ];

   
    
    $this->form_validation->set_rules('shun', 'SHUN', 'callback_upload_shun');
    $this->form_validation->set_rules('pas_foto', 'Pas Foto', 'callback_upload_foto');
    $this->form_validation->set_rules('kartu_keluarga', 'Kartu Keluarga', 'callback_upload_kartu_keluarga');
    $this->form_validation->set_rules('ktp_orang_tua', 'KTP Orang Tua', 'callback_upload_orang_tua');
    $this->form_validation->set_rules('akta_kelahiran', 'Akta Kelahiran', 'callback_upload_akta');
    
    if ($this->form_validation->run() == FALSE) {
      if($this->_shun != NULL){
        if(file_exists('data/shun/'.$this->_shun)){
          unlink('data/shun/'.$this->_shun);
        }
      }
      if($this->_foto != NULL){
        if(file_exists('data/foto/'.$this->_foto)){
          unlink('data/foto/'.$this->_foto);
        }
      }
      if($this->_kartu_keluarga != NULL){
        if(file_exists('data/kartu_keluarga/'.$this->_kartu_keluarga)){
          unlink('data/kartu_keluarga/'.$this->_kartu_keluarga);
        }
      }
      if($this->_ktp != NULL){
        if(file_exists('data/ktp/'.$this->_ktp)){
          unlink('data/ktp/'.$this->_ktp);
        }
      }
      if($this->_akta != NULL){
        if(file_exists('data/akta/'.$this->_akta)){
          unlink('data/akta/'.$this->_akta);
        }
      }
      $this->template->load('templates/template', 'daftar', $data);
    } else {
      $post = $this->input->post(NULL, TRUE);
      $data = [
        'nama_siswa'=>$post['nama_siswa'],
        'jenis_kelamin'=>$post['jenis_kelamin'],
        
        'nik'=>$post['nik'],
        'tempat_lahir'=>$post['tempat_lahir'],
        'tanggal_lahir'=>$post['tanggal_lahir'],
        'agama_siswa'=>$post['agama_siswa'],
        'nama_negara'=>$post['nama_negara'],
        'kebutuhan_khusus'=>$post['kebutuhan_khusus'],
        'alamat_siswa'=>$post['alamat_jalan'].', RT '.$post['alamat_rt'].', RW '.$post['alamat_rw'].', Dusun '.$post['nama_dusun'].', Kelurahan '.$post['alamat_kelurahan'].', Kecamatan '.$post['alamat_kecamatan'],
        'kode_pos'=>$post['kode_pos'],
        
        'tempat_tinggal'=>$post['tempat_tinggal'],
        'moda_transportasi'=>$post['moda_transportasi'],
        
        'pendidikan_ayah'=>$post['pendidikan_ayah'],
        'pekerjaan_ayah'=>$post['pekerjaan_ayah'],
       
        
        'foto'=>$this->_foto,
        'kartu_keluarga'=>$this->_kartu_keluarga,
        'ktp'=>$this->_ktp,
        'akta_kelahiran'=>$this->_akta,
        'status_pendaftaran'=>'Belum Diverifikasi',
        'tanggal_pendaftaran'=>date('Y-m-h')
      ];

      if($this->input->post('is_wna') != NULL) {
        $data['is_wna'] = $post['is_wna'];
      }
      if($this->input->post('layak_pip') != NULL) {
        $data['layak_pip'] = $post['layak_pip'];
      }
      if($this->input->post('terima_fisik_kip') != NULL) {
        $data['terima_fisik_kip'] = $post['terima_fisik_kip'];
      }

      if($this->Daftar_model->insert($data)){
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show mt-5 mb-0 pt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading">Pendaftaran Berhasil!</h4>
            <p>
              Terima kasih telah mendaftar, silahkan menunggu email balasan dari kami apabila anda memenuhi kriteria sekolah kami.
              Silahkan menunggu beberapa hari kemudian untuk mendapatkan email balasan. Balasan email bisa lebih cepat atau lebih lambat.
              </p>
            <hr>
            <p class="mb-0">Kami akan mengirimkan email hasil evaluasi pada '.$post['email_siswa'].'.</p>
          </div>
        ');
        redirect('home');
      }else{
        $this->session->set_flashdata('notif', '
          <script>
            toastr.error("Pendaftaran Gagal. Silahkan coba lagi nanti.")
          </script>
        ');
        redirect('home');
      }
    }
  }

  public function upload_shun()
  {
    $config['upload_path']   = './data/shun/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['file_name']     = 'shun_'.substr(md5(rand()),0,7);
    $config['overwrite']     = TRUE;
    $config['max_size']      = 1024*3;

    $this->upload->initialize($config);
    if (!$this->upload->do_upload('shun')){
      $this->form_validation->set_message('upload_shun', $this->upload->display_errors());
      return false;
    } else {
      $this->_shun = $this->upload->data('file_name');
      return true;
    }  
  }

  public function upload_foto()
  {
    $config['upload_path']   = './data/foto/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['file_name']     = 'foto_'.substr(md5(rand()),0,7);
    $config['overwrite']     = TRUE;
    $config['max_size']      = 1024;

    $this->upload->initialize($config);
    if (!$this->upload->do_upload('pas_foto')){
      $this->form_validation->set_message('upload_foto', $this->upload->display_errors());
      return false;
    } else {
      $this->_foto = $this->upload->data('file_name');
      return true;
    }  
  }

  public function upload_kartu_keluarga()
  {
    $config['upload_path']   = './data/kartu_keluarga/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['file_name']     = 'kk_'.substr(md5(rand()),0,7);
    $config['overwrite']     = TRUE;
    $config['max_size']      = 1024*3;

    $this->upload->initialize($config);
    if (!$this->upload->do_upload('kartu_keluarga')){
      $this->form_validation->set_message('upload_kartu_keluarga', $this->upload->display_errors());
      return false;
    } else {
      $this->_kartu_keluarga = $this->upload->data('file_name');
      return true;
    }  
  }

  

  public function upload_akta()
  {
    $config['upload_path']   = './data/akta/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['file_name']     = 'akta_'.substr(md5(rand()),0,7);
    $config['overwrite']     = TRUE;
    $config['max_size']      = 1024*3;

    $this->upload->initialize($config);
    if (!$this->upload->do_upload('akta_kelahiran')){
      $this->form_validation->set_message('upload_akta', $this->upload->display_errors());
      return false;
    } else {
      $this->_akta = $this->upload->data('file_name');
      return true;
    }  
  }

}

/* End of file Daftar.php */
