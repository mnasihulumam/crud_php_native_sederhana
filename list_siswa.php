	<?php include "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>List Siswa</title>
	<header>Siswa yang sudah mendaftar</header>
</head>
<body>
	<div>
		<a href="form_daftar.php";>Tambah Baru</a>
	</div>
	<div class="container">
		<table border="2">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Sekolah Asal</th>
				<th>Tindakan</th>
			</tr>
			<?php
				$sql = "SELECT * FROM calon_siswa";
				$query = mysqli_query($db, $sql);

				while ($siswa = mysqli_fetch_array($query)) {
					echo "<tr>
					<td>$siswa[id]</td>;
					<td>$siswa[nama]</td>";
					echo "<td>".$siswa['alamat']."</td>";
					echo "<td>".$siswa['jenis_kelamin']."</td>";
					echo "<td>".$siswa['agama']."</td>";
					echo "<td>".$siswa['sekolah_asal']."</td>";

					echo "<td>";
					echo "<a href='form_edit.php?id=".$siswa['id']."'>Edit</a> |
					<a href='form_hapus.php?id=".$siswa['id']."'>Hapus</a>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
</body>
</html>