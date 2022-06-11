<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?=site_url('admin/dashboard');?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
      <a href="<?=site_url('admin/konfigurasi');?>">Konfigurasi</a>
    </li>
    <li class="breadcrumb-item active">
      Pendaftaran
    </li>
  </ol>

  <!-- Page Content -->
  <h1>Konfigurasi Pendaftaran</h1>
  <hr>
  <!-- DataTables Example -->
  <div class="row">
    <div class="col-md-8">

      <div class="card mb-3">
        <div class="card-header">

        </div>
        <div class="card-body">
          <form action="<?=site_url('admin/konfigurasi/pendaftaran');?>" method="post">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>Pengaturan Pendaftaran</td>
                    <td>
                      <?=form_dropdown('setdaftar', $daftar, $site['setdaftar'], 'class="form-control"');?>
                    </td>
                  </tr>
                  <tr>
                    <td>Pengaturan Pengumuman</td>
                    <td>
                      <?=form_dropdown('setpengumuman', $pengumuman, $site['setpengumuman'], 'class="form-control"');?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button type="submit" class="btn btn-primary">Sumbit</button>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
