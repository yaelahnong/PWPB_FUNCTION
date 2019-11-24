<?php
require 'functions.php';

if (isset($_POST['simpan'])) {



	if (tambah($_POST) > 0) {
		// var_dump($_POST);
		echo "<script>
					alert('Data Berhasil Disimpan !');
					document.location.href = 'tugas_keempat.php';
				</script>";
	} else {
		echo "<script>
					alert('Data Gagal Disimpan !');
					document.location.href = 'tugas_keempat.php';
				</script>";
	}
}
?>






<!DOCTYPE html>
<html>

<head>
	<title>Tambah Data Siswa</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		label {
			display: block;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="display-4 text-center">Tambah Data Siswa</h1>
		<div class="card bg-light text-center" style="padding : 40px;">
			<form action="" method="post">
				<ul class="list-unstyled">
					<li>
						<label for="NIS">NIS :<label>
								<input type="text" name="NIS" id="NIS" required>
					</li>
					<li>
						<label for="nama">Nama :<label>
								<input type="text" name="nama" id="nama" required>
					</li>
					<li>
						<label for="JK">Jenis kelamin<label>
								<input type="radio" name="JK" value="laki-laki" id="JK" required>Laki-Laki
								<input type="radio" name="JK" value="perempuan" id="JK" required>Perempuan
					</li>
					<li>
						<label for="kelas">Kelas :<label>
								<input type="text" name="kelas" id="kelas" required>
					</li>
					<li>
						<label for="alamat">Alamat :<label>
								<input type="text" name="alamat" id="alamat" required>
					</li>
					<li>
						<button type="submit" name="simpan">Simpan</button>
					</li>
				</ul>
			</form>
		</div>
	</div>
</body>

</html>