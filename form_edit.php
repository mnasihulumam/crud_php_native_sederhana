<?php
	include "config.php";
	if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM calon_siswa WHERE id=$id";
	$query = mysqli_query($db, $sql);
	$siswa = mysqli_fetch_assoc($query);


	}
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Edit</title>
  </head>
  <body>
  	<form action="proses_edit.php" method="POST">
  		<div class="container">
  			<p>
  			<input type="text" name="id" value="<?php echo $siswa['id'] ?>" readonly>
  			</p>
			<p>
				<label for="nama">Nama</label>
				<input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>">
			</p>
			<p>
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" placeholder="Nama Lengkap" value="<?php echo $siswa['alamat'] ?>">
			</p>
			<p>
				<label for="jenis_kelamin">jenis kelamin</label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki - Laki
				<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
				<?php echo $siswa['jenis_kelamin']; ?>
			</p>
			<p>
				<label for="agama">Agama</label>
				<input type="text" name="agama" placeholder="Agama Anda" value="<?php echo $siswa['agama'] ?>">
			</p>
			<p>
				<label for="sekolah_asal">Sekolah Asal</label>
				<input type="text" name="sekolah_asal" placeholder="Nama Lengkap" value="<?php echo $siswa['sekolah_asal'] ?>">
			</p>
			<p>
				<input type="submit" value="Daftar" name="daftar">
			</p>
		</div>
  	</form>
  </body>
  </html>