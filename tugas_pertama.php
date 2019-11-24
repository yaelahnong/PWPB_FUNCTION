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

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">

  <!-- LOGO AS -->
  <link rel="icon" href="img/logo.png">
  <style>
    .user {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
    }

    .tentang_user span {
      font-weight: 600;
      font-size: 24px;
    }

    .tentang_user p {
      font-weight: 300;
      font-size: 16px;
      letter-spacing: 1.5px;
    }

    .card-body {
      box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .card {
      border-radius: 10px
    }

    #btn-profile-2 {
      position: relative;
      top: 48px;
    }

    #btn-profile-3 {
      position: relative;
      top: 72px;
    }
  </style>
  <!-- Custom styles for this template <--></-->
</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <?php webHeader(); ?>
  </div>
  
  <!-- CONTENT -->
    <?php tugas1(); ?>
  <!-- END OF CONTENT -->

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <?php webFooter(); ?>
  </footer>
</body>

</html>