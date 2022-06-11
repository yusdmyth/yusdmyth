<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/style.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/creative.css">
  <link href="<?=base_url('assets');?>/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url('assets');?>/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url('assets/vendor');?>/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?=base_url('assets/vendor');?>/toastr/toastr.min.css">
  <!-- End CSS -->

  <script src="<?=base_url('assets');?>/vendor/jquery/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?=base_url('assets/vendor');?>/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="<?=base_url('assets/vendor');?>/toastr/toastr.min.js"></script>
  <title><?=$title;?></title>
</head>
<body>
  <!-- Nav -->
  <?php require_once('_nav.php'); ?>
  <!-- End Nav -->
  
  <!-- Notif -->
  <?=$this->session->flashdata('notif');?>
  <!-- End Notif -->

  <!-- Contents -->
  <?=$contents;?>
  <!-- End Contents -->

  <!-- Footer -->
  <?php require_once('_footer.php'); ?>
  <!-- End Footer -->
  <!-- JS -->
  <script src="<?=base_url('assets');?>/js/bootstrap.min.js"></script>
  <script src="<?=base_url('assets');?>/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- End JS -->

  <script>
    $(function(){
      $('.datepicker').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
      });
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
          items:1,
          lazyLoad:true,
          loop:true,
          autoplay:true
        });
      });
    });
  </script>
</body>
</html>