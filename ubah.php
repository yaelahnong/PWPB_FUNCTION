<?php
require 'functions.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	// untuk memilih data yang ingin di ubah lalu masuk ke index 0
	$siswa = query("SELECT * FROM data_siswa WHERE id_siswa = $id")[0];
	// var_dump ($siswa['NIS']);
} else {
	header("Location: tugas_keempat.php");
}



// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['simpan'])) {
	
	// mengecek apakah data di ubah
	if (ubah($_POST) > 0) {
		echo "<script>
					alert('data berhasil diubah!');
					document.location.href = 'tugas_keempat.php';
				</script>";
	} else {
		echo "<script>
					alert('data gagal diubah!');
					document.location.href = 'tugas_keempat.php';
				</script>";
	}
}
?>



<!DOCTYPE html>
<html>

<head>
	<title>Ubah Data Siswa</title>
	<link rel="stylesheet" href="css/bootsrap.min.css">
</head>

<body>
	<h1>Ubah Data Siswa</h1>
	<form action="" method="post">
		<!-- UNTUK MEGIRIMKAN ID -->
		<input type="hidden" name="id" value="<?= $siswa['id_siswa']; ?>">
		<ul>
			<li>
				<label for="NIS">NIS :<label>
						<input type="text" name="NIS" id="NIS" value="<?= $siswa['NIS']; ?>" required>
			</li>
			<li>
				<label for="nama">Nama :<label>
						<input type="text" name="nama" id="nama" value="<?= $siswa['nama']; ?>" required>
			</li>
			<li>
				<label for="JK">Jenis kelamin<label>
						<input type="radio" name="JK" value="laki-laki" id="JK" required>Laki-Laki
						<input type="radio" name="JK" value="perempuan" id="JK" required>Perempuan
			</li>
			<li>
				<label for="kelas">Kelas :<label>
						<input type="text" name="kelas" id="kelas" value="<?= $siswa['kelas']; ?>" required>
			</li>
			<li>
				<label for="alamat">Alamat :<label>
						<input type="text" name="alamat" id="alamat" value="<?= $siswa['alamat']; ?>" required>
			</li>
			<li>
				<button type="submit" name="simpan">Simpan</button>
			</li>
		</ul>
	</form>
</body>

</html>