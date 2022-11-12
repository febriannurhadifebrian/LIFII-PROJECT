<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<!-- <link rel="stylesheet" href="style.css"> -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<center>
			<!-- <h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1> -->
			<h3 style="font-size: 2rem; font-weight: 800;">Tambah data baru</h3>
		</center>

		<form class="row g-3" action="<?php echo site_url('crud/tambah_aksi'); ?>" method="post">
			
			<div class="col-12">
				<label class="form-label">Nama</label>
				<input type="text" class="form-control"  name="nama" placeholder="Nama">
			</div>
			<div class="col-12">
				<label  class="form-label">Jenis </label>
				<input type="text" class="form-control" name="jenis" placeholder="Jenis">
			</div>

			<div class="col-md-6">
				<label  class="form-label">1 Tahun</label>
				<input type="text" class="form-control" name="satuthn" placeholder="1 Tahun">
			</div>
			<div class="col-md-6">
				<label  class="form-label">3 Tahun</label>
				<input type="text" class="form-control" name="tigathn" placeholder="3 Tahun">
			</div>
			
			<div class="col-12">
				<button type="submit" value="Tambah" class="btn btn-primary">Tambah</button>
			</div>
		</form>	
	</div>
</body>
</html>