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
	<center>
		<!-- <h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1> -->
		<h3 style="font-size: 2rem; font-weight: 800;">Tambah data baru</h3>
	</center>

	<form action="<?php echo site_url('crud/tambah_aksi'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td>Jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>

			<tr>
				<td>1 tahun</td>
				<td><input type="text" name="satuthn"></td>
			</tr>

			<tr>
				<td>2 Tahun</td>
				<td><input type="text" name="tigathn"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Tambah" class="btn btn-info" style="color:white"></td>
			</tr>
		</table>
	</form>	
</body>
</html>