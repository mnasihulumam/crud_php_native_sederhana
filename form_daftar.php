<?php include "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran</title>
</head>
<body>
	<form action="proses_pendaftaran.php" method="POST">
		<div class="container">
			<p>
				<label for="nama">Nama</label>
				<input type="text" name="nama" placeholder="Nama Lengkap">
			</p>
			<p>
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" placeholder="Nama Lengkap">
			</p>
			<p>
				<label for="jenis_kelamin">jenis kelamin</label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki - Laki
				<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
			</p>
			<p>
				<label for="agama">Agama</label>
				<input type="text" name="agama" placeholder="Agama Anda">
			</p>
			<p>
				<label for="sekolah_asal">Sekolah Asal</label>
				<input type="text" name="sekolah_asal" placeholder="Nama Lengkap">
			</p>
			<p>
				<input type="submit" value="Daftar" name="daftar">
			</p>
		</div>
	</form>
</body>
</html>