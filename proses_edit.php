<?php
include "config.php";

 extract($_POST);

	$sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id='$id'";
	$query = mysqli_query($db, $sql);

	if ($query) {	
		echo "Data Berhasil diperbaharui";
	}
?>