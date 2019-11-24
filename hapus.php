<?php
require 'functions.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	header("Location: tugas_keempat.php");
}

// var_dump($_GET['id']);

if (hapus($id) > 0) {
	echo "<script>
				alert('Data Berhasil Dihapus !');
				document.location.href = 'tugas_keempat.php';
			</script>";
} else {
	echo "<script>
				alert('Data Gagal Dihapus !');
				document.location.href = 'tugas_keempat.php';
			</script>";
}
