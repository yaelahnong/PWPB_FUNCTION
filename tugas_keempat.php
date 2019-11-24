<?php require 'functions.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Tugas PWPB</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">
  <link rel="shortcut icon" href="img/logo.png">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <style>
    .content {
      width: 100%;
    }

    .content h1 {
      position: relative;
      left: -299px;
    }

    .content table {
      position: relative;
      left: 160px;
    }
  </style>
  <!-- Custom styles for this template -->
</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Kelompok 9</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="tugas_pertama.php">Tugas pertama</a>
      <a class="p-2 text-dark" href="tugas_kedua.php">Tugas kedua</a>
      <a class="p-2 text-dark" href="tugas_ketiga.php">Tugas ketiga</a>
      <a class="p-2 text-dark" href="tugas_keempat.php">Tugas keempat</a>
    </nav>
    <a class="btn btn-outline-success" href="index.php">Home</a>
  </div>

  <!-- CONTENT -->
  <div class="container text-center">
    <?php tugas4(); ?>
  </div>
  <!-- AKHIR CONTENT -->


  <div class="container">
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <?php webFooter(); ?>
    </footer>
  </div>
</body>

</html>