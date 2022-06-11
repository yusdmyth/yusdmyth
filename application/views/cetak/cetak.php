<main role="main">

  <div class="container-fluid">

    <div class="spasi mb-5">s</div>

    <div class="card mt-5">
      <div class="card-header">
        CETAK BUKTI PENDAFARAN
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <form method="post" action="<?=site_url('cetak');?>">
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