<!DOCTYPE html>
<html>
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
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="widatah=device-widatah, initial-scale=1.0"/>
	</head>

	<body>
	<section class="bg-light" id="tim">
      <div class="container">
        <div class="row">
        <!-- <div class="mdl-cell--12-col panel panel-default text-center">
			</div> -->
          <div class="col-lg-12 text-center">
            <h2 style="color: grey" class="section-heading text-uppercase">Screenshoot! Catat Kode Booking!</h2>
            <a>Transfer ke no rekening <a style="color: red;">BTN 93509930000011100</a> A/n TS-SMK TELKOM MALANG</a>
            <br><p>
            	
            	
            </p>
          </div>
        </div>
        <div class="row">
         	<table widatah="85%"  class="table table-condensed text-center" >
			    <thead>
			        <tr>   
			            <th>Nama</th>
			            <th>Kode Booking</th>
			            <th>Nomor Telepon</th>
			            <th>Tanggal</th>
			            <th>Jam</th>
			            <th>Jenis Acara</th>
			            <th>Keterangan</th>
			        </tr>    
			    </thead>
			    <tbody>
			            <tr><td><?php echo $mesen->NAMA_CUST; ?></td>
			                <td style="color: red"><?php echo $mesen->KD_BOOKING; ?></td>
			                <td><?php echo $mesen->TELP; ?></td>
			                <td><?php echo $mesen->TANGGAL; ?></td>
			                <td><?php echo $mesen->JAM; ?></td>
			                <td><?php echo $mesen->JENIS_ACARA; ?></td>
			                <td><?php echo $mesen->KETERANGAN; ?></td>   
			            </tr>
			    </tbody>
			</table>
        </div>
        <center>
            <h4>Batas waktu transfer maksimal 6 hari setelah mendapat kode booking</h4>
            <h4 style="color:red;">Silahkan cek email anda untuk melihat kode <i>booking</i></h4><br>
            <a href="<?php echo base_url(); ?>home/keluar" class="btn btn-md btn-primary">Tutup</a>
        </center>
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
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		</body>
	</body>

</html>
