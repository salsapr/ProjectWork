<!DOCTYPE html>
<html lang="en">

<script type="text/javascript">
   $(function(){
   $("#tanggal").datepicker({ minDate: 0 });
            $('#tanggal').datepicker({dateFormat: 'yy-mm-dd'});
   });
  </script>

  <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js" type="text/javascript"></script>  
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/sunny/jquery-ui.css" type="text/css" rel="stylesheet"/>


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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SMK Telkom Malang</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#informasi">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pemesanan">Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>konfirmasi/">Konfirmasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Selamat Datang!</div>
          <div class="intro-heading text-uppercase">Persewaan Aula SMK Telkom Malang</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#pemesanan">Pesan Sekarang!</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Fasilitas</h2>
            <h3 class="section-subheading text-muted">Beberapa fasilitas yang disediakan.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-volume-up fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Sound</h4>
             <p>Sound system beserta 2 microphone</p>            
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-users fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Kursi</h4>
            <p>Kursi lipat sebanyak 150 dan meja 4 set</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-user-secret fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Keamanan</h4>
            <p>Keamanan dari Binmas, Babinsa dan Security</p>
          </div>
        </div>
      </div>
    </section>

    <!-- galeri Grid -->
    <section class="bg-light" id="galeri">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Galeri</h2>
    <!--<h3 class="section-subheading text-muted">Foto keseluruhan.</h3>-->          
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 galeri-item">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/galeri/aula3.jpg" alt="">
            <div class="galeri-caption">
              <h4>Aula SMK Telkom</h4>
              <p class="text-muted">Tampak depan aula</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 galeri-item">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/galeri/aula2.jpg" alt="">
            <div class="galeri-caption">
              <h4>Acara Internal</h4>
              <p class="text-muted">Kegitan Sekolah di Aula</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 galeri-item">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/galeri/aula1.jpg" alt="">
            <div class="galeri-caption">
              <h4>Acara Umum</h4>
              <p class="text-muted">Kegiatan umum di aula</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 galeri-item">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/galeri/aula4.jpg" alt="">
            <div class="galeri-caption">
              <h4>Acara Resepsi</h4>
              <p class="text-muted">Acara resepsi pernikahan di aula</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 galeri-item">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/galeri/aula6.jpg" alt="">
            <div class="galeri-caption">
              <h4>Acara Resepsi</h4>
              <p class="text-muted">Acara resepsi pernikahan di aula</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 galeri-item">
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/galeri/aula5.jpg" alt="">
            <div class="galeri-caption">
              <h4>Acara Resepsi</h4>
              <p class="text-muted">Acara resepsi pernikahan di aula</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- informasi -->
    <section id="informasi">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Informasi</h2>
            <h3 class="section-subheading text-muted">Tata cara menyewa gedung ini</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
            <li class="timeline-inverted">
                <div class="timeline-image">
                   <!-- <i class="rounded-circle fa fa-file-text-o fa-stack fa-4x fa-inverse"></i> -->              
                   <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/ideas-icon.png" alt="">               
                  </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Hal yang wajib diketahui,</h4>
                    <h4 class="subheading">Daftar Harga</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Even pernikahan : Rp 4.000.000</p>
                    <p>Even sosial : Rp 2.000.000</p>
                    <p>NB: Harga sudah termasuk fasilitas</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                   <!-- <i class="rounded-circle fa fa-file-text-o fa-stack fa-4x fa-inverse"></i> -->              
                   <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/icon-forms.png" alt="">                
                  </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Pertama,</h4>
                    <h4 class="subheading">Isi Form Pemesanan</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Isilah formulir pemesanan dengan lengkap dan benar kemudian "kirim" form tersebut</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                 <!-- <i class="fa fa-check-square-o fa-volume-up fa-stack fa-4x fa-inverse"></i> -->
                  <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/form-code.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Kedua,</h4>
                    <h4 class="subheading">Dapatkan Kode Pemesanan</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Anda selanjutnya akan mendapatkan kode pemesanan setelah mengisi lengkap form yang tersedia, jangan lupa screenshot</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <!-- <i class="fa fa-credit-card fa-volume-up fa-stack fa-4x fa-inverse"></i> -->
                  <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/credit-card.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Ketiga,</h4>
                    <h4 class="subheading">Lakukan Pembayaran</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lakukan pembayaran ke rekening yang tersedia sesuai harga yang telah ditetapkan</p>
                    <p>Batas maksimal pembayaran 6 hari setelah pemesanan</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <!-- <i class="fa fa-thumbs-o-up fa-volume-up fa-stack fa-4x fa-inverse"></i> -->
                  <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/img/about/thumb-up.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Keempat,</h4>
                    <h4 class="subheading">Konfirmasi Pembayaran</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Setelah melakukan transfer, isi form konfirmasi pembayaran di tab "Konfirmasi"</p>
                    <p>Jika ada pertanyaan silahkan hubungi Suko Harianto (0851-0207-7834)</p>
                  </div>
                </div>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="pemesanan">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Pemesanan</h2>
            <h3 class="section-subheading text-muted">Untuk memesan silahkan isi formulir di bawah ini.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <?php
              if (!empty($notif)) {
              echo '<div class="alert alert-danger">';
              echo $notif;
              echo '</div>';
            }
          ?>
            <form method="post" id="target" action="<?php echo base_url();?>home/pesan">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <span class="form-group" style="color: white; font-weight: bold;">Nama Lengkap :</span>
                    <input class="form-control" id="nama" name="nama_cust" type="text" placeholder="Nama Lengkap" required data-validation-required-message="Masukan Nama Lengkap.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                  <span class="form-group" style="color: white; font-weight: bold;">Nomor Telephone :</span>
                    <input class="form-control" id="tlp" name="telp" type="number" placeholder="Nomor Telepon" required data-validation-required-message="Masukan Nomor Telepon yang bisa dihubungi.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <span class="form-group" style="color: white; font-weight: bold;">Tanggal Pelaksanaan :</span>
                    <input class="form-control" id="datepicker" name="tanggal" type="date" placeholder="Tanggal Acara" required data-validation-required-message="Masukan Tanggal yang akan dipesan.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <span class="form-group" style="color: white; font-weight: bold;">Jam Pelaksanaan :</span>
                    <input class="form-control" id="jam" name="jam" type="time" placeholder="Jam Pelaksanaan" required data-validation-required-message="Masukan Jam yang akan dipesan.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <?php
                      function generateCode(){
                        $done = 0;
                        do{
                          $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                            $code = '';
                            for ($i = 0; $i < 7; $i++){
                                $code .= $characters[mt_rand(0, 61)];
                            }
                            $done = 1;
                        }while($done != 1);
                        return $code;
                      }

                      $code = generateCode();
                    ?>
                    <input type="hidden" name="generatecode" value="<?php echo $code;?>">
                </div><!-- samllekom -->
                
                  

                <div class="col-md-6">
                  <div class="form-group">
                     <span style="color: white; font-weight: bold;">Email :</span>
                    <input class="form-control" id="email" name="email" type="email" placeholder="Email" required data-validation-required-message="Masukan Email Anda yang aktif.">
                    <p class="help-block text-danger"></p>
                  </div>
                <div class="form-group" style="color: white; font-weight: bold;margin-top: -6%">
                  <br>  
                  <label>Jenis Acara   :</label><br>&nbsp &nbsp &nbsp 
                  <input class="radio" type="radio" name="jenis" value="Acara Umum">Acara Umum &nbsp &nbsp &nbsp &nbsp 
                  <input class="radio" type="radio" name="jenis" value="Acara Sosial">Acara Sosial

                   <!--  <select class="form-control" id="jenis_acara" name="jenis">
                      <option value="" disabled>PILIH JENIS ACARA</option>
                      <option value="acara umum">ACARA UMUM</option>
                      <option value="acara sosial">ACARA SOSIAL</option>
                     
                    </select> -->
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group" style="margin-top: -4%">
                    <span style="color: white; font-weight: bold;">Keterangan :</span>
                    <textarea class="form-control" id="ket" name="keterangan" placeholder="Keterangan" rows="1"></textarea>
                    <span class="form-group" style="color: red;"></span>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input type="submit" name="send" id="other" class="btn btn-primary btn-xl" value="KIRIM" data-toggle="modal" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


<!-- Modal -->
<?php if(isset($tanggal)):?>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Kode Pemesanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Kode Pemesanan Anda : <?php echo generateCode(); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
          
        </div>
      </div>
    </div>
  </div>
  <script>
    $('#myModal').modal({ show : true});
  </script>
<?php endif;?>

</body>
    <!-- tim -->
    <section class="bg-light" id="tim">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Tim Pengembang</h2>
            <h3 class="section-subheading text-muted">Siswa SMK Telkom Malang Kelas 12</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="tim-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/mala.jpg" alt="">
              <h5>Nurkumala Budi Fajrin</h5>
              <br>
         <!--      <p class="text-muted">Lorem Ipsum</p> -->
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/malbuf/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="tim-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/ridha.jpg" alt="">
              <h5>Ridha Nadhira Febyani</h5>
              <br>
              <!-- <p class="text-muted">Lorem Ipsum</p> -->
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/riridhh/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="tim-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/salsa.jpg" alt="">
              <h5>Salsabila Putri Rayieningtyas</h5>
              <br>
              <!-- <p class="text-muted">Lorem Ipsum</p> -->
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/salspr_/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/js/agency.min.js"></script>
    <script type="text/javascript">
      // $("#other").click(function() {
      //   console.log("ayo");
      //   $("#target").submit();
      // });
    </script>
  </body>

</html>
