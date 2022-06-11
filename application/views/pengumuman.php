<?php if($site['setpengumuman'] == 'Buka'): ?>
  <main role="main">
    <div class="container-fluid">
      <div class="spasi mb-5">s</div>
      <div class="card mt-5">
        <div class="card-header">
          SILAHKAN CEK KELULUSAN ANDA
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <p>Masukan NISN Anda untuk melihat apakah Anda Diterima atau Tidak</p>
              <form method="post" action="<?=site_url('pengumuman');?>">
                <div class="form-group">
                  <label for="nisn">NISN :</label>
                  <input type="text" class="form-control" placeholder="Masukan NISN" name="nisn" id="nisn" value="<?=set_value('nisn');?>">
                  <?=form_error('nisn', '<small class="form-text text-danger">', '</small>');?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->
  </main>
<?php else: ?>
  <div class="pt-5"></div>
  <main role="main">
    <div class="container mt-5">
      <section class="col-sm-12 mb-5">
        <div class="page-header"><h3>MAAF PENGUMUMAN SUDAH DITUTUP</h3></div>
        <p>Jika sudah mendaftar, silahkan <a href="<?=site_url('cetak');?>">cetak bukti pendaftaran</a></p>
      </section>
    </div>
  </main>
<?php endif; ?>