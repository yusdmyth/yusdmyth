<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/bootstrap.min.css">

  <script src="<?=base_url('assets');?>/vendor/jquery/jquery.min.js"></script>
  <!-- SweetAlert2 -->

  <script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	</script>

  <style>
    .profil{
      background : url('<?=base_url('data/foto/'.$siswa['foto']);?>');
      background-size: 90px 100px;
      height : 100px;
      width : 90px;
      float : right;
    }
  </style>
  

  <title><?=$title;?></title>
</head>
<body id="main">
  <!-- Contents -->
  <div class="row">
    <div class="col-md-8">
      <main role="main">
        <div class="container-fluid">
          <h3 class="card-title mt-5">BUKTI PENDAFTARAN</h3>
          <hr>
          <div class="card">
            <div class="card-header">
              BUKTI PENDAFTARAN
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="table-responsive">
                    <table>
                      <tbody>
                        <tr>
                          <td>Nomor Registrasi</td>
                          <td>00<?= $siswa['id'];?>/PNT-PPDB/<?= date("y");?></td>
                        </tr>
                        <tr>
                          <td colspan="3"><b>DATA SISWA</b><td></td>
                          <div class="profil"></div>
                        </tr>
                        <tr>
                          <td>NISN</td>
                          <td><?=$siswa['nisn'];?></td>
                        </tr>
                        <tr>
                          <td>Nama Lengkap</td>
                          <td><?=$siswa['nama_siswa'];?></td>
                        </tr>
                        <tr>
                          <td>Jenis Kelamin</td>
                          <td><?=$siswa['jenis_kelamin'];?></td>
                        </tr>
                        <tr>
                          <td>NIK / No. Kitas (Untuk WNA)</td>
                          <td><?=$siswa['nik'];?></td>
                        </tr>
                        <tr>
                          <td>Tempat Lahir</td>
                          <td><?=$siswa['tempat_lahir'];?></td>
                        </tr>
                        <tr>
                          <td>Tanggal Lahir</td>
                          <td><?=$siswa['tanggal_lahir'];?></td>
                        </tr>
                        <tr>
                          <td>Agama & Kepercayaan</td>
                          <td><?=$siswa['agama_siswa'];?></td>
                        </tr>
                        <tr>
                          <td>Apakah WNA?</td>
                          <td><?=$siswa['is_wna'] ? "Ya" : "Bukan" ;?></td>
                        </tr>
                        <tr>
                          <td>Nama Negara</td>
                          <td><?=$siswa['nama_negara'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Berkebutuhan Khusus</td>
                          <td><?=$siswa['kebutuhan_khusus'];?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td><?=$siswa['alamat_siswa'];?></td>
                        </tr>
                        <tr>
                          <td>Kode Pos</td>
                          <td><?=$siswa['kode_pos'];?></td>
                        </tr>
                        <tr>
                          <td>Lintang</td>
                          <td><?=$siswa['lintang'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Bujur</td>
                          <td><?=$siswa['bujur'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Tempat Tinggal</td>
                          <td><?=$siswa['tempat_tinggal'];?></td>
                        </tr>
                        <tr>
                          <td>Moda Transportasi</td>
                          <td><?=$siswa['moda_transportasi'];?></td>
                        </tr>
                        <tr>
                          <td>Nomor KKS (Kartu Keluarga Sejahtera)</td>
                          <td><?=$siswa['nomor_kks'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Anak Keberapa</td>
                          <td><?=$siswa['anak_keberapa'];?></td>
                        </tr>
                        <tr>
                          <td>Nomor KPS/PKH</td>
                          <td><?=$siswa['nomor_kps'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Usulan Dari Sekolah (Layak PIP)?</td>
                          <td><?=$siswa['layak_pip'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Alasan layak PIP</td>
                          <td><?=$siswa['alasan_layak_pip'];?></td>
                        </tr>
                        <tr>
                          <td>Nomor KIP (Kartu Indonesia Pintar)</td>
                          <td><?=$siswa['nomor_kip'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Nama tertera di KIP</td>
                          <td><?=$siswa['nama_kip'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Terima fisik Kartu (KIP)</td>
                          <td><?=$siswa['terima_fisik_kip'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td colspan="3"><b>DATA KONTAK</b></td>
                        </tr>
                        <tr>
                          <td>Nomor Telepon Rumah</td>
                          <td><?=$siswa['nomor_telepon'] ?: "-" ;?></td>
                        </tr>
                        <tr>
                          <td>Nomor HP</td>
                          <td><?=$siswa['nomor_hp'];?></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td><?=$siswa['email'];?></td>
                        </tr>
                        <tr>
                          <td colspan="3"><b>DATA ORANGTUA / WALI</b></td>
                        </tr>
                        <tr>
                          <td>Nama Ayah</td>
                          <td><?=$siswa['nama_ayah'];?></td>
                        </tr>
                        <tr>
                          <td>NIK Ayah</td>
                          <td><?=$siswa['nik_ayah'];?></td>
                        </tr>
                        <tr>
                          <td>Pendidikan Ayah</td>
                          <td><?=$siswa['pendidikan_ayah'];?></td>
                        </tr>
                        <tr>
                          <td>Pekerjaan Ayah</td>
                          <td><?=$siswa['pekerjaan_ayah'];?></td>
                        </tr>
                        <tr>
                          <td>Penghasilan Ayah</td>
                          <td><?=$siswa['penghasilan_ayah'];?></td>
                        </tr>
                        <tr>
                          <td>Nama Ibu</td>
                          <td><?=$siswa['nama_ibu'];?></td>
                        </tr>
                        <tr>
                          <td>NIK Ibu</td>
                          <td><?=$siswa['nik_ibu'];?></td>
                        </tr>
                        <tr>
                          <td>Pendidikan Ibu</td>
                          <td><?=$siswa['pendidikan_ibu'];?></td>
                        </tr>
                        <tr>
                          <td>Pekerjaan Ibu</td>
                          <td><?=$siswa['pekerjaan_ibu'];?></td>
                        </tr>
                        <tr>
                          <td>Penghasilan Ibu</td>
                          <td><?=$siswa['penghasilan_ibu'];?></td>
                        </tr>
                        <tr>
                          <td>Nama Wali</td>
                          <td>
                            <?php if ($siswa['nama_wali'] == NULL): ?>
                            -
                            <?php else: ?>
                            <?=$siswa['nama_wali'];?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>NIK Wali</td>
                          <td>
                            <?php if ($siswa['nama_wali'] == NULL): ?>
                            -
                            <?php else: ?>
                            <?=$siswa['nik_wali'];?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>Pendidikan Wali</td>
                          <td>
                            <?php if ($siswa['nama_wali'] == NULL): ?>
                            -
                            <?php else: ?>
                            <?=$siswa['pendidikan_wali'];?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>Pekerjaan Wali</td>
                          <td>
                            <?php if ($siswa['nama_wali'] == NULL): ?>
                            -
                            <?php else: ?>
                            <?=$siswa['pekerjaan_wali'];?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>Penghasilan Wali</td>
                          <td>
                            <?php if ($siswa['nama_wali'] == NULL): ?>
                            -
                            <?php else: ?>
                            <?=$siswa['penghasilan_wali'];?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3"><b>DATA RINCIAN</b></td>
                        </tr>
                        <tr>
                          <td>Tinggi Badan</td>
                          <td><?=$siswa['tinggi_badan'];?> Cm</td>
                        </tr>
                        <tr>
                          <td>Berat Badan</td>
                          <td><?=$siswa['berat_badan'];?> Kg</td>
                        </tr>
                        <tr>
                          <td>Jumlah Saudara Kandung</td>
                          <td><?=$siswa['jumlah_saudara_kandung'];?></td>
                        </tr>
                      </tbody>
                    </table>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /container -->
      </main>
    </div>
  </div>
  <a href=""><button onclick="printContent('main')" class="btn btn-primary ml-4"><i class="fa fa-print fa-fw"></i>PRINT</button></a></p>
  <!-- End Contents -->

  <!-- JS -->
  <script src="<?=base_url('assets');?>/js/bootstrap.min.js"></script>
</body>
</html>