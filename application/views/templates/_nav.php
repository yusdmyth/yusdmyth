<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-home"></i> <?=$site['nama_kantor'];?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?=site_url('home');?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-print"></i> Profil</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?=site_url('home/profil');?>">Visi & Misi</a>
            <a class="dropdown-item" href="<?=site_url('home/kontak');?>">Kontak</a>
          </div>
        </li>
        
        
        
        <?php if($this->session->userdata('status') == 'is_login'): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=site_url('admin/dashboard');?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=site_url('auth/login');?>"><i class="fas fa-sign-in-alt"></i> Login</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>