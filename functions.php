<?php
$conn = mysqli_connect("localhost", "root", "", "db_sekolah");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data)
{
	global $conn;

	$nis = $_POST["NIS"];
	$nama = $_POST["nama"];
	$jk = $_POST["JK"];
	$kelas = $_POST["kelas"];
	$alamat = $_POST["alamat"];

	$result = mysqli_query($conn, "SELECT * FROM data_siswa WHERE NIS = '$nis'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
					alert('Siswa sudah terdaftar !')
				</script>";
		return false;
	}

	$query = mysqli_query($conn, "INSERT INTO data_siswa 
										VALUES
										('', '$nis', '$nama', '$jk', '$kelas', '$alamat')
										");


	mysqli_query($conn, $query);

	return true;
}

function hapus($id)
{
	global $conn;

	mysqli_query($conn, "DELETE FROM data_siswa WHERE id_siswa = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;


	$id =  $data["id"];
	$nis = $_POST["NIS"];
	$nama = $_POST["nama"];
	$jk = $_POST["JK"];
	$kelas = $_POST["kelas"];
	$alamat = $_POST["alamat"];

	$query = mysqli_query($conn, "UPDATE data_siswa 
										SET
										NIS = '$nis',
										nama = '$nama',
										jenis_kelamin = '$jk',
										kelas = '$kelas',
										alamat = '$alamat'
										WHERE id_siswa = $id
										"); // id_siswa -> identifier


	mysqli_query($conn, $query);

	return true;
}


?>


<?php // Function CMS 
?>

<?php function webHeader()
{ ?>

	<h5 class="my-0 mr-md-auto font-weight-normal">Kelompok 9</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-dark" href="tugas_pertama.php">Tugas pertama</a>
		<a class="p-2 text-dark" href="tugas_kedua.php">Tugas kedua</a>
		<a class="p-2 text-dark" href="tugas_ketiga.php">Tugas ketiga</a>
		<a class="p-2 text-dark" href="tugas_keempat.php">Tugas keempat</a>
	</nav>
	<a class="btn btn-outline-success" href="index.php">Home</a>

<?php } ?>


<?php function webFooter(){ ?>

	<div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
        <p class="lead">#PWPB_1</p>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>

<?php } ?>



<?php function contentIndex()
{ ?>

	<h1 class="display-4">PWPB</h1>
	<p class="lead">Tempat mengumpulkan Tugas PWPB</p>
	<img class="m-l-10px" src="img/pcguy.png" width="200px">

<?php } ?>


<?php function tugas1() { ?>

<?php
	$tinggi_satu = 170;
	$tinggi_dua = 160;
	$tinggi_tiga = 160;
	$rata_rata = ($tinggi_satu + $tinggi_dua + $tinggi_tiga) / 3;
?>

	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<h1 class="display-4">Tugas pertama</h1>
		<p class="lead">dibawah ini adalah anggota Kelompok 9</p>
	</div>

	<div class="container">
	  <div class="card-deck mb-3 text-center">
	    <!-- PROFILE 1 -->
	      <?php profile1(); ?>
	    <!-- END PROFILE 1 -->

	    <!-- PROFILE 2 -->
	      <?php profile2(); ?>
	    <!-- END PROFILE 2 -->

	   	<!-- PROFILE 3 -->
	      <?php profile3(); ?>
	    <!-- END PROFILE 3 -->
	</div>
	<div class="pricing-header px-2 py-2 pt-md-2 pb-md-2 mx-auto text-center">
		<p class="lead">Rata-rata tinggi kami = <?php printf("%.1f", $rata_rata) ?></p>
	</div>

<?php } ?>


<?php function profile1(){ ?>
	
<?php
	$nama_satu = "Marino imola";
	$umur_satu = 15;
	$hobi_satu = "main musik, main game";
?>

<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <!-- GAMBAR LO -->
        <img class="user" src="img/profile1.jpg">
        <ul class="list-unstyled mt-3 mb-4">
        <div class="tentang_user">
            <span><?= $nama_satu ?></span>
         	<p>berumur <?= $umur_satu ?> tahun, mempunyai hobi <?= $hobi_satu ?> ia bercita-cita menjadi spiderman waktu kecil, sekarang ia ingin menjadi orang sukses demi masa depan yang lebih baik<p>
        </div>
        </ul>
		<button type="button" class="btn btn-lg btn-block btn-success" id="btn-profile-1">Lebih lanjut</button>
    </div>
</div>

<?php } ?>

<?php function profile2(){ ?>

<?php
	$nama_dua = "Mahyuni";
	$umur_dua = 15;
	$hobi_dua = "berenang,masak";
?>

	<div class="card mb-4 shadow-sm">
        <div class="card-body">
          <!-- GAMBAR LO -->
          <img class="user" src="img/yuni.jpg">
          <ul class="list-unstyled mt-3 mb-4">
            <div class="tentang_user">
              <span>Mahyuni</span>
              <p>berumur <?= $umur_dua ?> tahun,ingin mempunyai sesuatu yang diinginkan ,dan juga bisa membanggakan orang tua .Dan ingin menjadi wanita berkarir</p>
            </div>
        	</ul>
        	<button type="button" class="btn btn-lg btn-block btn-success" id="btn-profile-2">Lebih lanjut</button>
        </div>
    </div>

<?php } ?>

<?php function profile3(){ ?>

<?php
	$nama_tiga = "Salsabila Fauziah Khalda";
	$umur_tiga = 16;
	$hobi_tiga = "makan";
?>

	<div class="card mb-4 shadow-sm">
        <div class="card-body">
          <!-- GAMBAR LO -->
          <img class="user" src="img/eca.jpg">
          <ul class="list-unstyled mt-3 mb-4">
            <div class="tentang_user">
              <span>Salsabila Fauziah Khalda</span>
              <p>
                berumur <?= $umur_tiga ?> tahun, ingin menjadi someone yang sukses, hobby <?= $hobi_tiga ?> kayanya
              </p>
            </div>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-success" id="btn-profile-3">Lebih lanjut</button>
        </div>
      </div>

<?php } ?>



<?php function tugas2(){ ?>

<?php
$kubus = "<img src='img/kubus.gif' class='card-img-top'>";
$tetrahedron = "<img src='img/tetrahedron.gif' width='150px' class='card-img-top'>";
$kerucut = "<img src='img/kerucut.gif' width='150px' class='card-img-top'>";
$balok = "<img src='img/balok.gif' width='150px' class='card-img-top'>";
$prisma = "<img src='img/prisma.gif' width='150px' class='card-img-top'>";
$limas_segiempat = "<img src='img/limas_segiempat.gif' width='150px' class='card-img-top'>";


?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Tugas kedua</h1>
  <p class="lead">dibawah ini adalah kumpulan bangun ruang</p>
</div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
    <!-- BARIS PERTAMA -->
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <!-- <img src="img/kubus.gif" width="150px" class="card-img-top"> -->
            <?php echo $kubus ; ?>
        
            <p class="card-text bg-light">Luas</p>
            <p class="card-text bg-light"><?php echo luas_kubus; ?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>

      <div class="card mb-4 shadow-sm"> 
        <div class="card-body">
          <!-- <img src="img/tetrahedron.gif" width="150px" class="card-img-top"> -->
          <?php echo $tetrahedron; ?>
          <p class="card-text bg-light">Volume</p>
          <p class="card-text bg-light"><?php echo volume_tetrahedron; ?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <!-- <img src="img/kerucut.gif" width="150px" class="card-img-top"> -->
          <?php echo $kerucut; ?>
          <p class="card-text bg-light">Luas</p>
          <p class="card-text bg-light"><?php echo luas_kerucut; ?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>
    </div>
    <!-- END OF BARIS PERTAMA -->

    <!-- BARIS KEDUA -->
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <!-- <img src="img/balok.gif" width="150px" class="card-img-top"> -->
            <?php echo $balok; ?>
            <p class="card-text bg-light">Luas</p>
            <p class="card-text bg-light"><?php echo luas_balok; ?></p>
            <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
          </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <!-- GAMBAR LO -->
          <!-- <img src="img/prisma.gif" width="150px" class="card-img-top"> -->
          <?php echo $prisma; ?>
           <p class="card-text bg-light">Luas</p>
           <p class="card-text bg-light"><?php echo luas_prisma?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <!-- GAMBAR LO -->
          <!-- <img src="img/limas_segiempat.gif" width="150px" class="card-img-top"> -->
          <?php echo $limas_segiempat; ?>
            <p class="card-text bg-light">Luas</p>
            <p class="card-text bg-light"><?php echo volume_limas_segiempat; ?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF BARIS KEDUA -->

<?php } ?>




<?php function tugas3(){ ?>

<div class="card-body" style="width : 100%;">
            <form action="form.php" method="post">
                <h2 class="display-7 text-center">DATA IDENTITAS PESERTA DIDIK BARU</h2>
                <h2 class="display-7 text-center">2019/2020</h2>
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nm"></td>
                    </tr>
                    <tr>
                        <td>Nama Panggilan</td>
                        <td>:</td>
                        <td><input type="text" name="np"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="radio" value="laki-laki">Laki-laki
                            <input type="radio" name="radio" value="perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><input type="text" name="agm"></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><input type="text" name="nisn"></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="text" name="nik"></td>
                    </tr>
                    <tr>
                        <td>Tempat dan Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat-lh" size="10">
                            <select name="Tgl">
                                <option name="Tgl">Tgl
                                <option name="Tgl">1</option>
                                <option name="Tgl">2</option>
                                <option name="Tgl">3</option>
                                <option name="Tgl">4</option>
                                <option name="Tgl">5</option>
                                <option name="Tgl">6</option>
                                <option name="Tgl">7</option>
                                <option name="Tgl">8</option>
                                <option name="Tgl">9</option>
                                <option name="Tgl">10</option>
                                <option name="Tgl">11</option>
                                <option name="Tgl">12</option>
                                <option name="Tgl">13</option>
                                <option name="Tgl">14</option>
                                <option name="Tgl">15</option>
                                <option name="Tgl">16</option>
                                <option name="Tgl">17</option>
                                <option name="Tgl">18</option>
                                <option name="Tgl">19</option>
                                <option name="Tgl">20</option>
                                <option name="Tgl">21</option>
                                <option name="Tgl">22</option>
                                <option name="Tgl">23</option>
                                <option name="Tgl">24</option>
                                <option name="Tgl">26</option>
                                <option name="Tgl">27</option>
                                <option name="Tgl">28</option>
                                <option name="Tgl">29</option>
                                <option name="Tgl">30</option>
                                <option name="Tgl">31</option>
                            </select>
                            <select name="Bln">
                                <option name="Bln">Bln</option>
                                <option name="Bln">Januari</option>
                                <option name="Bln">Februari</option>
                                <option name="Bln">Maret</option>
                                <option name="Bln">April</option>
                                <option name="Bln">Mei</option>
                                <option name="Bln">Juni</option>
                                <option name="Bln">Juli</option>
                                <option name="Bln">Agustus</option>
                                <option name="Bln">September</option>
                                <option name="Bln">Oktober</option>
                                <option name="Bln">November</option>
                                <option name="Bln">Desember</option>
                            </select>
                            <select name="Thn">
                                <option name="Thn">Thn</option>
                                <option name="Thn">2012</option>
                                <option name="Thn">2011</option>
                                <option name="Thn">2010</option>
                                <option name="Thn">2009</option>
                                <option name="Thn">2008</option>
                                <option name="Thn">2007</option>
                                <option name="Thn">2006</option>
                                <option name="Thn">2005</option>
                                <option name="Thn">2004</option>
                                <option name="Thn">2003</option>
                                <option name="Thn">2002</option>
                                <option name="Thn">2001</option>
                                <option name="Thn">2000</option>
                                <option name="Thn">1999</option>
                                <option name="Thn">1998</option>
                                <option name="Thn">1997</option>
                                <option name="Thn">1996</option>
                                <option name="Thn">1995</option>
                                <option name="Thn">1994</option>
                                <option name="Thn">1993</option>
                                <option name="Thn">1992</option>
                                <option name="Thn">1991</option>
                                <option name="Thn">1990</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><input type="text" name="asal-sekolah"></td>
                    </tr>
                    <tr>
                        <td>Nomor SKHU</td>
                        <td>:</td>
                        <td><input type="text" name="skhu"></td>
                    </tr>
                    <tr>
                        <td>Tanggal diterima disekolah ini</td>
                        <td>:</td>
                        <td><input type="date" name="tds"></td>
                    </tr>
                    <tr>
                        <td>Jika Pindahan, Sebutkan Alasan Pindah ke Sekolah ini</td>
                        <td>:</td>
                    </tr>
                    <tr>
                        <td><textarea name="als" cols="40" rows="5" placeholder="Alasan kamu pindah ke sekolah ini...."></textarea></td>
                    </tr>
                    <tr>
                        <td>Alamat :</td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td><textarea name="almt" cols="40" rows="5" placeholder="Alamat kamu...."></textarea></td>
                    </tr>
                    <tr>
                        <td>Tinggal Bersama</td>
                        <td>:</td>
                        <td><input type="text" name="tb"></td>
                    </tr>
                    <tr>
                        <td>Transportasi ke Sekolah</td>
                        <td></td>
                        <td>
                            <input type="text" name="tsp">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><input type="tel" name="telp"></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td><input type="tel" name="hp"></td>
                    </tr>
                    <tr>
                        <td>Nomor Kartu Perlindungan Sosial (bagi yang memiliki)</td>
                        <td>:</td>
                        <td><input type="text" name="kps"></td>
                    </tr>
                    <tr>
                        <td><strong>Data Ayah Kandung</strong> :</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nm-a"></td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tl-a"></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><input type="text" name="pd-a"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><input type="text" name="pk-a"></td>
                    </tr>
                    <tr>
                        <b>
                            <td>Data Ibu Kandung :</td>
                        </b>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nm-i"></td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tl-i"></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><input type="text" name="pd-i"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><input type="text" name="pk-i"></td>
                    </tr>
                </table>
                <div id="button">
                    <input class="btn btn-outline-success" type="submit" name="sbmt" value="Simpan">
                    <input class="btn btn-outline-success" type="reset" name="rst" value="Batal">
                </div>
            </form>
        </div>

<?php } ?>



<?php function tugas4(){ ?>

<?php
    // require 'functions.php';
	global $conn;

    $siswa = query("SELECT * FROM data_siswa");
    ?>

    <section class="content mt-5">
      <h1 class="display-5 mb-3">Data Siswa</h1>
      <table cellpadding="20">
        <tr class="bg-dark text-light">
          <th>No.</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th colspan="2">Action</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($siswa as $row) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td><?= $row["NIS"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["kelas"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td>
              <a class="btn btn-warning" href="ubah.php?id=<?= $row['id_siswa']; ?>">Ubah</a>
              <a class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?')" href="hapus.php?id=<?= $row['id_siswa']; ?>">Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </table>
      <a href="tambah.php" class="btn btn-dark mt-5" style="position : relative; left : 20px;">Tambah Siswa</a>
    </section>

<?php } ?>