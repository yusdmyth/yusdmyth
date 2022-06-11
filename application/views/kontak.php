<main role="main">

  <div display="none" class="mb-5">

  </div>

  <div class="container">
    <!-- Example row of columns -->
    <h1 class="pt-5">Kontak</h1>
    <div class="row">
      <div class="col-md-12">

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mb-2">
                <strong>
                  <i class="fa fa-globe"></i>
                  Nama Perusahaan :
                </strong><br>
                <?=$site['nama_kantor'];?>
              </div>
              <div class="col-md-6 mb-2">
                <strong>
                  <i class="fa fa-envelope"></i>
                  EMAIL :
                </strong><br>
               xxxxx@gmail.com
              </div>
              <div class="col-md-6 mb-2">
                <strong>
                  <i class="fa fa-phone"></i>
                  Phone :
                </strong><br>
                <?=$site['telepon_kantor'];?>            
              </div>
              <div class="col-md-6 mb-2">
                <strong>
                  <i class="fa fa-map-marker"></i>
                  Alamat :
                </strong><br>
                <?=$site['alamat_kantor'];?>       
              </div>
            </div>
					</div>
					<div class="card-footer">
						<div class="float-right">
							Admin : <strong><?=$admin_name;?></strong>
						</div>
					</div>
        </div>

      </div>
      <div class="col-md-12">

        

      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>
