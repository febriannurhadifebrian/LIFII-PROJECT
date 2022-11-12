<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<title>LIFII</title>
</head>
<body>
	<center><h1>Tabel List Reksadana</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<center><?php echo anchor('Export/export','Export (Excel)'); ?></center>
	<center><?php echo anchor('crud/manggil_fpdf','Export (PDF)'); ?></center>
	<center><?php echo anchor('Grafik/grafik','Grafik '); ?></center>

	<!-- <form method="post" action="<?php echo site_url('C_Index/importExcel') ?>" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Submit</button>
	</form> -->


	<div>
		<h3>Import Data</h3>
		
		<form action="<?= site_url('ImportExcel/import_excel'); ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Pilih File Excel</label>
				<input type="file" name="fileExcel">
			</div>
			<div>
				<button class='btn btn-success' type="submit">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					Import		
				</button>
			</div>
		</form>
	</div>


	<table class="table">
		<tr class="table-warning">
			<th >No</th>
			<th>Name</th>
			<th>Jenis</th>
			<th>1 Tahun</th>
			<th>3 Tahun</th>
			<th>aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($rd as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->jenis ?></td>
			<td><?php echo $u->satuthn ?></td>
			<td><?php echo $u->tigathn ?></td>
			<td>
				
				<?php echo anchor('crud/edit/'.$u->no,'Edit'); ?>
                <?php echo anchor('crud/hapus/'.$u->no,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>