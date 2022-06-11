<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

  private $_shun = NULL;
  private $_foto = NULL;
  private $_kartu_keluarga = NULL;
  private $_ktp = NULL;
  private $_akta = NULL;

  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('status') != 'is_login') redirect('auth/login');
    $this->load->model('admin/Siswa_model');
    $this->load->library('form_validation');
    $this->load->library('upload');
  }

  public function index()
  {
    $data = konfigurasi('Siswa');
    $data['siswa'] = $this->Siswa_model->getAll()->result_array();
    $this->template->load('admin/template/template', 'admin/siswa/siswa', $data);
  }

  public function add()
  {
    $data = konfigurasi('Siswa');

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

    // Ayah
    $data['pendidikan_ayah'] = [
      'Tidak Sekolah'=>'Tidak Sekolah',
      'Putus SD'=>'Putus SD',
      'SD Sederajat'=>'SD Sederajat',
      'SMP Sederajat'=>'SMP Sederajat',
      'SMA Sederajat'=>'SMA Sederajat',
      'D1'=>'D1',
      'D2'=>'D2',
      'D3'=>'D3',
      'D4/S1'=>'D4/S1',
      'S2'=>'S2',
      'S3'=>'S3'
    ];
    $data['pekerjaan_ayah'] = [
      'Tidak Bekerja'=>'Tidak Bekerja',
      'Nelayan'=>'Nelayan',
      'Petani'=>'Petani',
      'Peternak'=>'Peternak',
      'PNS/TNI/POLRI'=>'PNS/TNI/POLRI',
      'Karyawan Swasta'=>'Karyawan Swasta',
      'Pedagang Kecil'=>'Pedagang Kecil',
      'Pedagang Besar'=>'Pedagang Besar',
      'Wiraswasta'=>'Wiraswasta',
      'Wirausaha'=>'Wirausaha',
      'Buruh'=>'Buruh',
      'Pensiunan'=>'Pensiunan',
      'Lain-lain'=>'Lain-lain',
      'Meninggal Dunia'
    ];
    $data['penghasilan_ayah'] = [
      '-',
      'Kurang dari 500.000'=>'Kurang dari 500.000',
      '500.000 - 999.999'=>'500.000 - 999.999',
      '1 juta - 1.999.999'=>'1 juta - 1.999.999',
      '2 juta - 4.999.999'=>'2 juta - 4.999.999',
      '5 juta - 20 juta'=>'5 juta - 20 juta',
      'Lebih dari 20 juta'=>'Lebih dari 20 juta'
    ];
    $data['status_pendaftaran'] = [
      'Belum Diverifikasi'=>'Belum Diverifikasi',
      'Diterima'=>'Diterima',
      'Tidak Diterima'=>'Tidak Diterima'
    ];

    $this->form_validation->set_rules('nama_siswa', 'Nama Lengkap', 'trim|required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
    $this->form_validation->set_rules('nisn', 'NISN', 'trim|required|is_unique[formulir.nisn]');
    $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
    $this->form_validation->set_rules('agama_siswa', 'Agama & Kepercayaan', 'trim|required');
    $this->form_validation->set_rules('alamat_jalan', 'Alamat Jalan', 'trim|required');
    $this->form_validation->set_rules('alamat_rt', 'Alamat RT', 'trim|required');
    $this->form_validation->set_rules('alamat_rw', 'Alamat RW', 'trim|required');
    $this->form_validation->set_rules('alamat_kelurahan', 'Alamat Kelurahan', 'trim|required');
    $this->form_validation->set_rules('alamat_kecamatan', 'Alamat Kecamatan', 'trim|required');
    $this->form_validation->set_rules('kode_pos', 'Kode POS', 'trim|required');
    $this->form_validation->set_rules('tempat_tinggal', 'Tempat Tinggal', 'trim|required');
    $this->form_validation->set_rules('moda_transportasi', 'Moda Transportasi', 'trim|required');
    $this->form_validation->set_rules('anak_keberapa', 'Anak Keberapa', 'trim|required');
    $this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'trim|required');
    $this->form_validation->set_rules('email_siswa', 'Email Siswa', 'trim|required|is_unique[formulir.email]', [
      'is_unique'=>'Email sudah digunakan'
    ]);
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'trim|required');
    $this->form_validation->set_rules('nik_ayah', 'NIK Ayah', 'trim|required');
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'trim|required');
    $this->form_validation->set_rules('tahun_lahir_ayah', 'Tahun Lahir Ayah', 'trim|required');
    $this->form_validation->set_rules('nama_ibu', 'Nama ibu', 'trim|required');
    $this->form_validation->set_rules('nik_ibu', 'NIK ibu', 'trim|required');
    $this->form_validation->set_rules('nama_ibu', 'Nama ibu', 'trim|required');
    $this->form_validation->set_rules('tahun_lahir_ibu', 'Tahun Lahir ibu', 'trim|required');
    $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'trim|required');
    $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'trim|required');
    $this->form_validation->set_rules('jumlah_saudara_kandung', 'Jumlah Saudara Kandung', 'trim|required');
    
    
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
      $this->template->load('admin/template/template', 'admin/siswa/add', $data);
    } else {
      $post = $this->input->post(NULL, TRUE);
      $data = [
        'nama_siswa'=>$post['nama_siswa'],
        'jenis_kelamin'=>$post['jenis_kelamin'],
        'nisn'=>$post['nisn'],
        'nik'=>$post['nik'],
        'tempat_lahir'=>$post['tempat_lahir'],
        'tanggal_lahir'=>$post['tanggal_lahir'],
        'agama_siswa'=>$post['agama_siswa'],
        'nama_negara'=>$post['nama_negara'],
        'kebutuhan_khusus'=>$post['kebutuhan_khusus'],
        'alamat_siswa'=>$post['alamat_jalan'].', RT '.$post['alamat_rt'].', RW '.$post['alamat_rw'].', Dusun '.$post['nama_dusun'].', Kelurahan '.$post['alamat_kelurahan'].', Kecamatan '.$post['alamat_kecamatan'],
        'kode_pos'=>$post['kode_pos'],
        'lintang'=>$post['lintang'],
        'bujur'=>$post['bujur'],
        'tempat_tinggal'=>$post['tempat_tinggal'],
        'moda_transportasi'=>$post['moda_transportasi'],
        'nomor_kks'=>$post['nomor_kks'],
        'anak_keberapa'=>$post['anak_keberapa'],
        'nomor_kps'=>$post['nomor_kps'],
        'nomor_kip'=>$post['nomor_kip'],
        'nama_kip'=>$post['nama_kip'],
        'alasan_layak_pip'=>$post['alasan_layak_pip'],
        'nomor_telepon'=>$post['nomor_telepon'],
        'nomor_hp'=>$post['nomor_hp'],
        'email'=>$post['email_siswa'],
        'nama_ayah'=>$post['nama_ayah'],
        'nik_ayah'=>$post['nik_ayah'],
        'tahun_lahir_ayah'=>$post['tahun_lahir_ayah'],
        'pendidikan_ayah'=>$post['pendidikan_ayah'],
        'pekerjaan_ayah'=>$post['pekerjaan_ayah'],
        'penghasilan_ayah'=>$post['penghasilan_ayah'],
        'nama_ibu'=>$post['nama_ibu'],
        'nik_ibu'=>$post['nik_ibu'],
        'tahun_lahir_ibu'=>$post['tahun_lahir_ibu'],
        'pendidikan_ibu'=>$post['pendidikan_ibu'],
        'pekerjaan_ibu'=>$post['pekerjaan_ibu'],
        'penghasilan_ibu'=>$post['penghasilan_ibu'],
        'nama_wali'=>$post['nama_wali'],
        'nik_wali'=>$post['nik_wali'],
        'tahun_lahir_wali'=>$post['tahun_lahir_wali'],
        'pendidikan_wali'=>$post['pendidikan_wali'],
        'pekerjaan_wali'=>$post['pekerjaan_wali'],
        'penghasilan_wali'=>$post['penghasilan_wali'],
        'tinggi_badan'=>$post['tinggi_badan'],
        'berat_badan'=>$post['berat_badan'],
        'jumlah_saudara_kandung'=>$post['jumlah_saudara_kandung'],
        'shun'=>$this->_shun,
        'foto'=>$this->_foto,
        'kartu_keluarga'=>$this->_kartu_keluarga,
        'ktp'=>$this->_ktp,
        'akta_kelahiran'=>$this->_akta,
        'status_pendaftaran'=>$post['status_pendaftaran'],
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

      if($this->Siswa_model->insert($data)){
        $this->session->set_flashdata('pesan', '
          <script>
            toastr.success("Pendaftaran Berhasil")
          </script>
        ');
        redirect('admin/siswa');
      }else{
        $this->session->set_flashdata('notif', '
          <script>
            toastr.error("Pendaftaran Gagal. Silahkan coba lagi nanti.")
          </script>
        ');
        redirect('admin/siswa');
      }
    }
  }

  public function detail($id = NULL)
  {
    if($id == NULL) redirect('admin/siswa');
    $data = konfigurasi('Detail Siswa');
    $data['siswa'] = $this->Siswa_model->getById($id)->row_array();
    $this->template->load('admin/template/template', 'admin/siswa/detail', $data);
  }

  public function delete($id = NULL)
  {
    if($id == NULL) redirect('admin/siswa');
    $siswa = $this->Siswa_model->getById($id)->row_array();
    if($this->Siswa_model->delete($id)) {
      if(file_exists('data/shun/'.$siswa['shun'])){
        unlink('data/shun/'.$siswa['shun']);
      }
      if(file_exists('data/foto/'.$siswa['foto'])){
        unlink('data/foto/'.$siswa['foto']);
      }
      if(file_exists('data/kartu_keluarga/'.$siswa['kartu_keluarga'])){
        unlink('data/kartu_keluarga/'.$siswa['kartu_keluarga']);
      }
      if(file_exists('data/ktp/'.$siswa['ktp'])){
        unlink('data/ktp/'.$siswa['ktp']);
      }
      if(file_exists('data/akta/'.$siswa['akta_kelahiran'])){
        unlink('data/akta/'.$siswa['akta_kelahiran']);
      }
      $this->session->set_flashdata('pesan', '
        <script>
          toastr.success("Berhasil Hapus.")
        </script>
      ');
      redirect('admin/siswa');
    } else {
      $this->session->set_flashdata('pesan', '
        <script>
          toastr.error("Gagal Hapus.")
        </script>
      ');
      redirect('admin/siswa');
    }
  }

  public function diterima()
  {
    $data = konfigurasi('Siswa Diterima');
    $data['siswa'] = $this->Siswa_model->getAll('Diterima')->result_array();
    $this->template->load('admin/template/template', 'admin/siswa/diterima', $data);
  }

  public function ditolak()
  {
    $data = konfigurasi('Siswa Ditolak');
    $data['siswa'] = $this->Siswa_model->getAll('Tidak Diterima')->result_array();
    $this->template->load('admin/template/template', 'admin/siswa/ditolak', $data);
  }
  
  public function belum_diverifikasi()
  {
    $data = konfigurasi('Siswa Belum Diverifikasi');
    $data['siswa'] = $this->Siswa_model->getAll('Belum Diverifikasi')->result_array();
    $this->template->load('admin/template/template', 'admin/siswa/belum_diverifikasi', $data);
  }

  public function verifikasi($id = NULL)
  {
    if($id == NULL) redirect('admin/siswa');
    $data = konfigurasi('Verifikasi Siswa');
    $data['status_pendaftaran'] = [
      'Belum Diverifikasi'=>'Belum Diverifikasi',
      'Diterima'=>'Diterima',
      'Tidak Diterima'=>'Tidak Diterima'
    ];
    $data['siswa'] = $this->Siswa_model->getById($id)->row_array();

    $this->form_validation->set_rules('status_pendaftaran', 'Status Pendaftaran', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->template->load('admin/template/template', 'admin/siswa/verifikasi', $data);
    } else {
      $status_pendaftaran = $this->input->post('status_pendaftaran', TRUE);
      $data = [
        'status_pendaftaran'=>$status_pendaftaran
      ];
      if($this->Siswa_model->verifikasi($id, $data)) {
        $this->session->set_flashdata('pesan', '
          <script>
            toastr.success("Berhasil verifikasi.")
          </script>
        ');
        redirect('admin/siswa');
      } else {
        $this->session->set_flashdata('pesan', '
          <script>
            toastr.error("GAGAL! Silahkan coba lagi nanti.")
          </script>
        ');
        redirect('admin/siswa');
      }
    }
  }

  // Callback -------------------------------->>

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

  public function upload_orang_tua()
  {
    $config['upload_path']   = './data/ktp/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['file_name']     = 'ktp_'.substr(md5(rand()),0,7);
    $config['overwrite']     = TRUE;
    $config['max_size']      = 1024*3;

    $this->upload->initialize($config);
    if (!$this->upload->do_upload('ktp_orang_tua')){
      $this->form_validation->set_message('upload_orang_tua', $this->upload->display_errors());
      return false;
    } else {
      $this->_ktp = $this->upload->data('file_name');
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

/* End of file Siswa.php */
