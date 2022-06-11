<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?=site_url('admin/dashboard');?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
      <a href="<?=site_url('admin/siswa');?>">Karyawan</a>
    </li>
    <li class="breadcrumb-item active">
      Tambah 
    </li>
  </ol>

  <!-- Page Content -->
  <h1>Data Karyawan</h1>
  <hr>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      Tambah Data 
    </div>
    <div class="card-body">

      <form action="<?=site_url('admin/siswa/add');?>" method="post" enctype="multipart/form-data">
        <div class="row">

          <!-- #1 Data Pribadi -->
          <div class="col-md-8">
            <div class="card bg-light mb-3">
              <div class="card-header">DATA PRIBADI #1</div>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="nama_siswa">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama_siswa" value="<?=set_value('nama_siswa');?>">
                  <small class="form-text text-muted">Nama pelamar sesuai dokumen resmi yang berlaku (KTP, Akta atau ijazah sebelumnya).</small>
                  
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <?=form_dropdown('jenis_kelamin', $jenis_kelamin, set_value('jenis_kelamin'), 'class="form-control"');?>
                </div>
                <div class="form-group">
                  <label for="nisn">Pekerjaan Terakhir</label>
                  <input type="text" class="form-control" name="nisn" value="<?=set_value('nisn');?>">
                  <small class="form-text text-muted">Jabatan di tempat kerja terakhir</small>
                  
                </div>
                <div class="form-group">
                  <label for="nik">NIK / No. Kitas (Untuk WNA)</label>
                  <input type="text" class="form-control" name="nik" value="<?=set_value('nik');?>">
                  <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada kartu keluarga,  atau KTP bagi WNI. NIK memiliki format 16 digit angka. Contoh: 6112090906021104.</small>
                  
                  <?=form_error('nik', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <div class="form-group">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" value="<?=set_value('tempat_lahir');?>">
                  <small class="form-text text-muted">Tempat lahir pelamar sesuai dokumen resmi yang berlaku.</small>
                  <?=form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir" value="<?=set_value('tanggal_lahir');?>">
                  
                  <?=form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <div class="form-group">
                  <label for="agama_siswa">Agama & Kepercayaan</label>
                  <?=form_dropdown('agama_siswa', $agama_siswa, set_value('agama_siswa'), 'class="form-control"');?>
                  <small class="form-text text-muted">Agama atau kepercayaan yang dianut oleh peserta . Apabila peserta  adalah penghayat kepercayaan (misalnya pada daerah tertentu yang masih memiliki penganut kepercayaan), dapat memilih opsi Kepercayaan Kepada Tuhan YME.</small>
                  <?=form_error('agama_siswa', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <div class="form-group">
                  <?php
                    $data = [
                      'name'          => 'is_wna',
                      'id'            => 'is_wna',
                      'value'         => '1',
                      'checked'       => FALSE,
                      'style'         => 'margin:10px'
                    ];
                  ?>
                  <label for="is_wna">Apakah WNA?</label>
                  <?=form_checkbox($data);?>
                  <small class="form-text text-muted">Kewarganegaraan pelamar.</small>
                </div>
                <div class="form-group">
                  <label for="nama_negara">Nama Negara</label>
                  <input type="text" class="form-control" name="nama_negara" value="<?=set_value('nama_negara');?>">
                  <small class="form-text text-muted">Kosongkan bila bukan WNA</small>
                </div>
                <div class="form-group">
                  <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                  <small class="form-text text-muted">Kebutuhan khusus yang disandang oleh peserta </small>
                  <?=form_dropdown('kebutuhan_khusus', $kebutuhan_khusus, set_value('kebutuhan_khusus'), 'class="form-control"');?>
                </div>
                <div class="form-group">
                  <label for="alamat_jalan">Alamat Jalan</label>
                  <input type="text" class="form-control" name="alamat_jalan" value="<?=set_value('alamat_jalan');?>">
                  
                  <?=form_error('alamat_jalan', '<small class="form-text text-danger">', '</small>');?>
                </div>
                
                
                <div class="form-group">
                  <label for="kode_pos">Kode Pos</label>
                  <input type="text" class="form-control" name="kode_pos" value="<?=set_value('kode_pos');?>">
                  <?=form_error('kode_pos', '<small class="form-text text-danger">', '</small>');?>
                </div>
                
                <div class="form-group">
                  <label for="tempat_tinggal">Tempat Tinggal</label>
                  <?=form_dropdown('tempat_tinggal', $tempat_tinggal, set_value('tempat_tinggal'), 'class="form-control"');?>
                  <small class="form-text text-muted">Kepemilikan tempat tinggal peserta didik saat ini (yang telah diisikan pada kolom-kolom sebelumnya di atas).</small>
                </div>
                <div class="form-group">
                  <label for="moda_transportasi">Moda Transportasi</label>
                  <?=form_dropdown('moda_transportasi', $moda_transportasi, set_value('moda_transportasi'), 'class="form-control"');?>
                  <small class="form-text text-muted">Jenis transportasi utama atau yang paling sering digunakan  </small>
                </div>
                
                <div class="form-group">
                  <label for="pendidikan_ayah">Pendidikan</label>
                  <?=form_dropdown('pendidikan_ayah', $pendidikan_ayah, set_value('pendidikan_ayah'), 'class="form-control"');?>
                  <small class="form-text text-muted">Pendidikan terakhir .</small>
                </div>
                
              </div>
            </div>


          </div>

          <!-- #2 Data Orang Tua -->
          <div class="col-md-4">
            
            <div class="card bg-light mb-3">
              <div class="card-header">REGISTRASI PESERTA DIDIK #6</div>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="shun">Foto Scan SHUN</label>
                  <input class="form-control" type="file" name="shun">
                  <small class="form-text text-muted">Foto scan SHUN atau Surat Keterangan Lulus dari SMP/MTs telah dilegalisir. Ukuran max 3MB, format: JPG,JPEG,PNG</small>
                  <?=form_error('shun', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <div class="form-group">
                  <label for="pas_foto">Pas Foto 3x4</label>
                  <input class="form-control" type="file" name="pas_foto">
                  <small class="form-text text-muted">Pas foto hitam putih ukuran 3x4. ukuran max 1MB. , format: JPG,JPEG,PNG</small>
                  <?=form_error('pas_foto', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <div class="form-group">
                  <label for="kartu_keluarga">Kartu keluarga</label>
                  <input class="form-control" type="file" name="kartu_keluarga">
                  <small class="form-text text-muted">Foto scan kartu keluarga. ukuran max 3MB. , format: JPG,JPEG,PNG</small>
                  <?=form_error('kartu_keluarga', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <div class="form-group">
                  <label for="ktp_orang_tua">KTP Orang Tua</label>
                  <input class="form-control" type="file" name="ktp_orang_tua">
                  <small class="form-text text-muted">Foto scan KTP orang tua. ukuran max 1MB. , format: JPG,JPEG,PNG</small>
                  <?=form_error('ktp_orang_tua', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <div class="form-group">
                  <label for="akta_kelahiran">Akta Kelahiran</label>
                  <input class="form-control" type="file" name="akta_kelahiran">
                  <small class="form-text text-muted">Foto scan Akta Kelahiran. ukuran max 3MB. , format: JPG,JPEG,PNG</small>
                  <?=form_error('akta_kelahiran', '<small class="form-text text-danger">', '</small>');?>
                </div>

              </div>
            </div>

            <div class="card bg-light mb-3">
              <div class="card-body">
                
                <div class="form-group">
                  <label for="status_pendaftaran">Status Pendaftaran</label>
                  <?=form_dropdown('status_pendaftaran', $status_pendaftaran, set_value('status_pendaftaran'), 'class="form-control"');?>
                </div>

              </div>
            </div>
            
          </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit Pendaftaran</button>
      </form>

    </div>
  </div>

</div>