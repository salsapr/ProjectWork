<!DOCTYPE html>
<html>
	<head>
		<title>Detil Data Pesanan </title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	</head>
	<body>
		<div class="container" style="max-width: 800px"><br>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-info">
							<div class="panel-heading">Lihat Detil Data Pesanan</div>
					    	<div class="panel-body">
					    		<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9"><div class="input-group">
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
										<input type="text" id="status" name="status" autofocus placeholder="Status" class="form-control"  value="<?php  echo $detil->STATUS ?>" />
									</div>
								</div>
							
								<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="margin-top: 10px;">
									<a href="<?php echo base_url(); ?>admin/data_transaksi_pesanan/" class="btn btn-md btn-default">Kembali</a>
									<a href="<?php echo base_url(); ?>admin/update/" class="btn btn-md btn-primary">Simpan</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<br>
		</div>
	</body>
</html>