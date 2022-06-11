<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
  <li class="breadcrumb-item">
      <a href="<?=site_url('admin/dashboard');?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
      <a href="<?=site_url('admin/siswa');?>">karyawan</a>
    </li>
    <li class="breadcrumb-item active">
      Ditolak
    </li>
  </ol>

  <!-- Page Content -->

  <hr>
  <?=$this->session->flashdata('pesan');?>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <span>
        Data Semua pelamar yang ditolak
      </span>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Lengkap</th>
              <th>NISN</th>
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
                <a onclick="return confirm('Apakah Anda Yakin? Data Yang Terhapus Tidak Bisa Dikembalikan.');" href="<?=site_url('admin/siswa/delete/'.$s['id']);?>" title="Hapus"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>