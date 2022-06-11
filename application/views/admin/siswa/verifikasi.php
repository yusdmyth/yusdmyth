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
      Verifikasi 
    </li>
  </ol>

  <!-- Page Content -->
  
  <hr>
  <!-- DataTables Example -->
  <div class="row">
    <div class="col-md-6">

      <div class="card mb-3">
        <div class="card-header">
          Verifikasi siswa : <?=$siswa['nama_siswa']?>
        </div>
        <div class="card-body">
          <form action="<?=site_url('admin/siswa/verifikasi/'.$siswa['id']);?>" method="post">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>Nama Siswa</td>
                    <td><input class="form-control" type="text" disabled name="nama_siswa" id="nama_siswa" value="<?=$siswa['nama_siswa'];?>"></td>
                  </tr>
                  <tr>
                    <td>NISN</td>
                    <td><input class="form-control" type="text" disabled name="nisn" id="nisn" value="<?=$siswa['nisn'];?>"></td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>
                      <?=form_dropdown('status_pendaftaran', $status_pendaftaran, $siswa['status_pendaftaran'], 'class="form-control"');?>
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