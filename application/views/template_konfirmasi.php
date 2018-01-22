<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penyewaan Aula SMK Telkom Malang</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/agency.css" rel="stylesheet">

  </head>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>index.php/home/">SMK Telkom Malang</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>index.php/home/">Kembali ke Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="pemesanan">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Konfirmasi Pembayaran</h2>
            <h3 class="section-subheading text-muted">Isi Untuk konfirmasi setelah pembayaran.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <?php if ($this->session->flashdata('notif')):?>
                <div class="alert alert-info"><?php echo $this->session->flashdata('notif');?></div>
          <?php endif;?>
            <form id="target" method="post" action="<?php echo base_url();?>konfirmasi/konfir">
              <div class="row">
                <div class="col-md-3">
                  
                 
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span style="color: white;">Kode Booking :</span>
                    <input class="form-control" id="kd_booking" name="kd_booking" type="text" placeholder="Kode Booking" required data-validation-required-message="Silahkan isi Kode Booking Anda.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <span style="color: white;">Nama Pengirim :</span>
                    <input class="form-control" id="nama_konfir" name="nama_konfir" type="text" placeholder="Nama Pengirim" required data-validation-required-message="Silahkan isi nomor pemesanan Anda.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <span style="color: white;">Nomor Rekening :</span>
                    <input class="form-control" id="no_rekening" name="no_rekening" type="text" placeholder="Nomor Rekening" required data-validation-required-message="Silahkan isi nomor rekening Anda.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <span style="color: white;">Jumlah Uang :</span>
                    <input class="form-control" id="jml_uang" name="jml_uang" type="text" placeholder="Jumlah Uang" required data-validation-required-message="Silahkan isi jumlah uang yang telah Anda bayar.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-3">
                  
                </div>

                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input type="submit" name="send" id="other" class="btn btn-primary btn-xl text-uppercase" value="KIRIM" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/js/agency.min.js"></script>
  </body>
</html>