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
      Aplikasi
    </li>
  </ol>

  <!-- Page Content -->
  <h1>Konfigurasi Aplikasi</h1>
  <hr>
  <!-- DataTables Example -->
  <div class="row">
    <div class="col-md-8">

			<form action="<?=site_url('admin/konfigurasi/aplikasi');?>" method="post" enctype="multipart/form-data">
        <div class="card mb-3">
          <div class="card-header">
            General
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>Nama Aplikasi</td>
                    <td>
                      <input class="form-control" type="text" name="nama_website" id="nama_website" value="<?=$site['nama_website'];?>">
                      <?=form_error('nama_website', '<small class="form-text text-danger">', '</small>');?>
                    </td>
                  </tr>
                  <tr>
                    <td>Nama Perusahaan</td>
                    <td>
                      <input class="form-control" type="text" name="nama_kantor" id="nama_kantor" value="<?=$site['nama_kantor'];?>">
                      <?=form_error('nama_kantor', '<small class="form-text text-danger">', '</small>');?>
                    </td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>
                      <textarea class="form-control" name="alamat_kantor" id="alamat_kantor"><?=$site['alamat_kantor'];?></textarea>
                      <?=form_error('alamat_kantor', '<small class="form-text text-danger">', '</small>');?>
                    </td>
                  </tr>
                  <tr>
                    <td>Telepon</td>
                    <td>
                      <input class="form-control" type="text" name="telepon_kantor" id="telepon_kantor" value="<?=$site['telepon_kantor'];?>">
                      <?=form_error('telepon_kantor', '<small class="form-text text-danger">', '</small>');?>
                    </td>
                  </tr>
                  <tr>
                    <td>Keterangan</td>
                    <td>
                      <textarea class="form-control" name="keterangan" id="keterangan"><?=$site['keterangan'];?></textarea>
                      <?=form_error('keterangan', '<small class="form-text text-danger">', '</small>');?>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						User
					</div>
					<div class="card-body">
					<div class="table-responsive">
							<input type="hidden" name="id_admin" value="<?=$admin->id;?>">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>Nama Admin</td>
                    <td>
                      <input class="form-control" type="text" name="nama_admin" id="nama_admin" value="<?=$admin->name;?>">
                      <?=form_error('nama_admin', '<small class="form-text text-danger">', '</small>');?>
                    </td>
									</tr>
									<tr>
										<td>Username</td>
										<td>
											<input class="form-control" type="text" name="username" id="username" value="<?=$admin->username;?>">
											<?=form_error('username', '<small class="form-text text-danger">', '</small>');?>
										</td>
									</tr>
									<tr>
										<td>Password</td>
										<td>
											<input class="form-control" type="password" name="password" id="password">
											<?=form_error('password', '<small class="form-text text-danger">', '</small>');?>
										</td>
									</tr>
                </tbody>
              </table>
            </div>
					</div>
				</div>
        <button type="submit" class="btn btn-primary mt-3 mb-3">Sumbit</button>
			</form>

    </div>
  </div>
</div>
