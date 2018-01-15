<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="widatah=device-widatah, initial-scale=1.0"/>
	</head>

	<body>
		<div class="box-body mdl-cell--12-col">

		<h3 class="mdl-cell mdl-cell--12-col">Sewa Gedung Aula SMK Telkom</h3>

		<div class="mdl-cell--12-col panel panel-default ">
			 <a href="<?php echo base_url(); ?>home/exit/" class="btn btn-md btn-primary">Tutup</a>
		<div class="panel-body">

			<table widatah="85%"  class="table table-condensed" >
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
			                <td><?php echo $mesen->KD_BOOKING; ?></td>
			                <td><?php echo $mesen->TELP; ?></td>
			                <td><?php echo $mesen->TANGGAL; ?></td>
			                <td><?php echo $mesen->JAM; ?></td>
			                <td><?php echo $mesen->JENIS_ACARA; ?></td>
			                <td><?php echo $mesen->KETERANGAN; ?></td>   
			            </tr>

	
			    </tbody>
			</table>
		</div></div>
		</div>  

		<div class="box-footer clearfix">
		<?php //echo $jum_penguji;  ?>
		</div>
		</div>    

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		</body>
	</body>

</html>
