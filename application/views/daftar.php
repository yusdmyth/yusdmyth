<div class="pt-5"></div>

<main role="main">

  <div class="container mt-5">
    <?php if($site['setdaftar'] != 'Tutup'): ?>
    <form action="<?=site_url('daftar');?>" method="post" enctype="multipart/form-data">
      <div class="row">

				<div class="col-md-12 mb-4">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Petunjuk Pengisian Formulir</h4>
						</div>
						<div class="card-body">
							<ul>
								<li>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</li>
								<li>Isi Data Anda Secara Benar dan Jujur.</li>
							</ul>
						</div>
					</div>
				</div>

        <!-- #1 Data Pribadi -->
        <div class="col-md-8">
          <div class="card bg-light mb-3">
            <div class="card-header">DATA PRIBADI #1</div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="nama_siswa">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_siswa" value="<?=set_value('nama_siswa');?>">
                <small class="form-text text-muted">Nama peserta didik sesuai dokumen resmi yang berlaku (Akta atau ijazah sebelumnya).</small>
                
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                <?=form_dropdown('jenis_kelamin', $jenis_kelamin, set_value('jenis_kelamin'), 'class="form-control"');?>
              </div>
              
              <div class="form-group">
                <label for="nik">NIK / No. Kitas (Untuk WNA) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nik" value="<?=set_value('nik');?>">
                <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada kartu keluarga, Kartu Identitas Anak, atau KTP (jika sudah memiliki) bagi WNI. NIK memiliki format 16 digit angka. Contoh: 6112090906021104.</small>
                <small class="form-text text-muted">Pastikan NIK tidak tertukar dengan No. Kartu Keluarga, karena keduannya memiliki format yang sama. Bagi WNA, diisi dengan nomor Kartu Izin Tinggal Terbatas (KITAS).</small>
                <?=form_error('nik', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?=set_value('tempat_lahir');?>">
                
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?=set_value('tanggal_lahir');?>">
                
              </div>
             
              
              <div class="form-group">
                <label for="alamat_jalan">Alamat Jalan <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_jalan" value="<?=set_value('alamat_jalan');?>">
                <small class="form-text text-muted">Jalur tempat tinggal peserta didik, terdiri atas gang, kompleks, blok, nomor rumah, dan sebagainya selain informasi yang diminta oleh kolom-kolom yang lain pada bgian ini. Sebagai contoh: peserta didik tinggal di sebuah kompleks perumahan Griya Adam yang berada pada Jalan Kemanggisan, dengan nomor rumah 4-C, di lingkungan RT 005 dan RW 011, Dusun Cempaka, Desa Salatiga. Maka dapat diisi dengan Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.</small>
                <?=form_error('alamat_jalan', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="alamat_rt">RT <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_rt" value="<?=set_value('alamat_rt');?>">
                <small class="form-text text-muted">Nomor RT tempat tinggal peserta didik saat ini. Dari contoh diatas, misalnya dapat diisi dengan angka 5.</small>
                <?=form_error('alamat_rt', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="alamat_rw">RW <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat_rw" value="<?=set_value('alamat_rw');?>">
                <small class="form-text text-muted">Nomor RW tempat tinggal peserwa didik saat ini. Dari contoh diatas, misalnya dapat diisi dengan angka 11.</small>
                <?=form_error('alamat_rw', '<small class="form-text text-danger">', '</small>');?>
              </div>
              
              <div class="form-group">
                <label for="tempat_tinggal">Tempat Tinggal <span class="text-danger">*</span></label>
                <?=form_dropdown('tempat_tinggal', $tempat_tinggal, set_value('tempat_tinggal'), 'class="form-control"');?>
                <small class="form-text text-muted">Kepemilikan tempat tinggal peserta didik saat ini (yang telah diisikan pada kolom-kolom sebelumnya di atas).</small>
              </div>
  
    
              
              
              <div class="form-group">
                <label for="nomor_hp">Nomor HP <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nomor_hp" value="<?=set_value('nomor_hp');?>">
                <small class="form-text text-muted">Diisi nomor telepon selular (milik pribadi, orang tua, atau wali) tanpa tanda baca.</small>
                <?=form_error('nomor_hp', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="email_siswa">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email_siswa" value="<?=set_value('email_siswa');?>">
                <small class="form-text text-muted">Diisi alamat surat elektronik (surel) peserta didik yang dapat dihubungi (milik pribadi, orang tua, atau wali).</small>
                <?=form_error('email_siswa', '<small class="form-text text-danger">', '</small>');?>
              </div>

  
         

            </div>
          </div>

        </div>

        <!-- #2 Data Orang Tua -->
        <div class="col-md-4">
          
          <div class="card bg-light mb-3 sticky-top">
            <div class="card-header">FORMULIR PENDUKUNG</div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="shun">Foto Scan Ijasah <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="shun">
                <small class="form-text text-muted">Foto scan SHUN atau Surat Keterangan Lulus dari SMP/MTs telah dilegalisir. Ukuran max 3MB, format: JPG,JPEG,PNG</small>
                <?=form_error('shun', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="pas_foto">Pas Foto 3x4 <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="pas_foto">
                <small class="form-text text-muted">Pas foto hitam putih ukuran 3x4. ukuran max 1MB. , format: JPG,JPEG,PNG</small>
                <?=form_error('pas_foto', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="kartu_keluarga">Kartu keluarga <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="kartu_keluarga">
                <small class="form-text text-muted">Foto scan kartu keluarga. ukuran max 3MB. , format: JPG,JPEG,PNG</small>
                <?=form_error('kartu_keluarga', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="ktp_orang_tua">KTP  <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="ktp_orang_tua">
                <small class="form-text text-muted">Foto scan KTP orang tua. ukuran max 1MB. , format: JPG,JPEG,PNG</small>
                <?=form_error('ktp_orang_tua', '<small class="form-text text-danger">', '</small>');?>
              </div>
              <div class="form-group">
                <label for="akta_kelahiran">Akta Kelahiran <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="akta_kelahiran">
                <small class="form-text text-muted">Foto scan Akta Kelahiran. ukuran max 3MB. , format: JPG,JPEG,PNG</small>
                <?=form_error('akta_kelahiran', '<small class="form-text text-danger">', '</small>');?>
              </div>

            </div>
          </div>
          
        </div>

      </div>
      <button type="submit" class="btn btn-primary">Submit Pendaftaran</button>
    </form>
    <?php else: ?>
    <section class="col-sm-12 mb-5">
      <div class="page-header"><h3>MAAF PENDAFTARAN SUDAH DITUTUP</h3></div>
      <p>Jika sudah mendaftar, silahkan <a href="<?=site_url('cetak');?>">cetak bukti pendaftaran</a></p>
    </section>
    <?php endif; ?>
  </div>

</main>
