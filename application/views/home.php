<?=$this->session->flashdata('pesan');?>
<main role="main">
  <div class="container-fluid">
    <!-- Set up your HTML -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" height="600px" src="<?=base_url('assets/img/carousel/img1.jpg');?>" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Human Resource Management System App</h2 >
        
            <p><h4 class="text-dark">App HRMS PT XXXXXXXX </h4></p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="600px" src="<?=base_url('assets/img/carousel/img2.jpg');?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="600px" src="<?=base_url('assets/img/carousel/img3.jpg');?>" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
</main>