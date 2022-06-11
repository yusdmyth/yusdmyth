<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
  <li class="breadcrumb-item">
      <a href="<?=site_url('admin/dashboard');?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">
      Data Pelamar Kerja
    </li>
  </ol>

  <!-- Page Content -->
   <hr>
  <?=$this->session->flashdata('pesan');?>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <span>
        Data para Pelamar kerja
      </span>
      <span class="float-right">
        <a class="btn btn-sm btn-primary" href="<?=site_url('admin/siswa/add');?>"><i class="fas fa-plus-circle"></i> Tambah data</a>
      </span>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Lengkap</th>
              <th>Resume</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php if(count($siswa) > 0): ?>
            <?php $no = 1; ?>
            <?php foreach($siswa as $s): ?>
            <tr>
              <td><?=$no++;?></td>
              <td><?=$s['nama_siswa'];?></td>
              <td><?=$s['nisn'];?></td>
              <td>
                <a href="<?=site_url('admin/siswa/detail/'.$s['id']);?>" title="Detail"><i class="fas fa-eye"></i></a>
                <a href="<?=site_url('admin/siswa/verifikasi/'.$s['id']);?>" title="Verifikasi"><i class="fas fa-edit"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">@yap-2022</div>
  </div>

</div>