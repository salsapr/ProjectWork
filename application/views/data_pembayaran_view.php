<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Pembayaran</title>

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
     <?php
                $notif = $this->session->flashdata('notif');
                if(!empty($notif)){
                    echo '
                        <div class="alert alert-danger">
                        '.$notif.'
                        </div>
                    ';
                }
            ?>
       <section id="admin_view">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Data Pembayaran</h2>
          </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <!-- <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Pemesanan</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nomor Telepon</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Jenis Acara</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pesanan as $data) {
                                            echo'
                                                <tr>
                                                    <td>'.$data->KD_BOOKING.'</td>
                                                    <td>'.$data->NAMA_CUST.'</td>
                                                    <td>'.$data->TELP.'</td>
                                                    <td>'.$data->TANGGAL.'</td>
                                                    <td>'.$data->JAM.'</td>
                                                    <td>'.$data->JENIS_ACARA.'</td>
                                                    <td>'.$data->KETERANGAN.'</td>
                                                    <td>'.$data->STATUS.'</td>
                                                    <td>
                                                        <a href="#" class="fa fa-edit">
                                                        <a href="#" class="fa fa-trash-o">
                                                        
                                                    </td>
                                                </tr>
                                            ';
                                        }

                                        ?> -->
                                    </tbody>
                                 </table>
                            </div>
                        </div>
                    </div>
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