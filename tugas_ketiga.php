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
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table,
        #button {
            position: relative;
            left: 235px;
        }

        table {
            margin-top: 100px;
        }

        #button {
            margin-top: 50px;

        }
    </style>
    <!-- Custom styles for this template -->
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <?php webHeader(); ?>
    </div>

    <!-- CONTENT -->
    <div class="container">
        <?php tugas3(); ?>
    </div>
    <!-- END OF CONTENT -->


    <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <?php webFooter(); ?>
        </footer>
    </div>
</body>

</html>