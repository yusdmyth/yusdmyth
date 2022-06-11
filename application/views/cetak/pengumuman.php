<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?=base_url('assets/css/');?>style-pdf.css">
  <title><?=$title;?></title>
</head>
<body>
  <div style="text-align: center;">
    <img src="<?=base_url('assets/img');?>/head.PNG" width="100%" height="auto"/><br/>
  </div><br/>
  <div style="text-align: center;">
    <h3>BUKTI DITERIMA</h3><br/>
  </div>
  <p>Berdasarkan hasil peninjaun dan penilaian kami, maka kami menyatakan bahwa data siswa dibawah ini</p><br/>
  <table class="items" width="100%" cellpadding="8" border="1">
    <tbody>
      <tr>
        <td colspan="2" align="center"><h4>No.Pendafataran: 00<?= $formulir->id;?>/PNT-PPDB/<?= date("y");?></h4></td>
      </tr>
      <tr>
        <td>Nama Siswa</td>
        <td><?= $formulir->nama_siswa;?></td>
      </tr>
      <tr>
        <td>NISN</td>
        <td><?= $formulir->nisn?></td>
      </tr>
      <tr>
        <td>Tanggal Pendaftaran</td>
        <td><?= $formulir->tanggal_pendaftaran?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><b>DINYATAKAN :</b></td>
      </tr>
      <tr>
        <td style="text-transform: uppercase;" colspan="2" align="center"><h3>......<?= $formulir->status_pendaftaran; ?>......</h3></td>
      </tr>
    </tbody>
  </table>
  <br/>
  <p>Bagi siswa yang telah dinyatakan diterima bisa langsung datang kembali ke sekolah dengan menyerahkan bukti ini kepada pihak sekolah</p><br/>
</body>
</html>