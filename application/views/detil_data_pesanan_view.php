<!DOCTYPE html>
<html>
	<head>
		<title>Detil Data Pesanan </title>
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
		<div class="container" style="max-width: 800px"><br>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class=" panel-info">
							<div class="panel-heading"><h3 style="text-align: center;">Lihat Detil Data Pesanan</h3></div>
					    	<div class="panel-body">
					    		<form action="<?php echo base_url(); ?>admin/update/<?php echo $detil->TANGGAL; ?>" method="post">
					    			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12"><div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" id="kd_booking" name="kd_booking" autofocus placeholder="Kode Pemesanan" class="form-control" disabled value="<?php echo $detil->KD_BOOKING ?>"/>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" id="nama" name="nama" autofocus placeholder="Nama Lengkap" 
										class="form-control" disabled value="<?php echo $detil->NAMA_CUST ?>"/>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
										<input type="number" id="telp" name="telp" autofocus placeholder="Nomor Telepon" class="form-control" disabled value="<?php  echo $detil->TELP ?>"/>
									</div><br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										<input type="text" id="tanggal" name="tanggal" autofocus placeholder="Tanggal" class="form-control" disabled value="<?php  echo $detil->TANGGAL?>" />
									</div><br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										<input type="text" id="jam" name="jam" autofocus placeholder="Jam" class="form-control" disabled value="<?php  echo $detil->JAM?>" />
									</div><br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										<input type="text" id="jenis_acara" name="jenis_acara" autofocus placeholder="Jenis Acara" class="form-control" disabled value="<?php  echo $detil->JENIS_ACARA?>" />
									</div><br>
						    		<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
										<textarea id="alamat" name="keterangan" placeholder="Keterangan" class="form-control" disabled><?php  echo $detil->KETERANGAN ?></textarea>
									</div><br>
						    		
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>

									<!-- 	<input type="select" id="status" name="status" autofocus placeholder="Status" class="form-control"  value="<?php  echo $detil->STATUS ?>" /> -->
										<select name="status" id="status" class="form-control" <?php  echo $detil->STATUS ?>>
										  <option value="">--Pilih Status--</option>
										  <option value="DP">DP</option>
										  <option value="Lunas">Lunas</option>
										  <option value="Selesai">Selesai</option>
										  <option value="Batal">Batal</option>
										</select>
									</div>
								</div>
							
								<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="margin-top: 10px; text-align: center;">
								<a href="<?php echo base_url(); ?>admin/data_transaksi_pesanan" class="btn btn-md btn-default">
								Kembali</a>
									<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
								</div>
					    		</form>
					    		
							</div>
						</div>
					</div>
				</div>
			<br>
		</div>
	</body>
</html>