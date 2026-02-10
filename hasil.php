<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil Buku Tamu</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-success">
  <div class="container">
    <a href="index.php" class="navbar-brand">📖 Buku Tamu</a>
  </div>
</nav>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow">
        <div class="card-header bg-success text-white">
          Data Tamu
        </div>

        <div class="card-body">
          <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $nama  = htmlspecialchars($_POST['nama']);
              $email = htmlspecialchars($_POST['email']);
              $asal  = htmlspecialchars($_POST['asal']);
              $pesan = htmlspecialchars($_POST['pesan']);
            }
          ?>

          <table class="table table-bordered">
            <tr><th>Nama</th><td><?= $nama ?></td></tr>
            <tr><th>Email</th><td><?= $email ?></td></tr>
            <tr><th>Asal</th><td><?= $asal ?></td></tr>
            <tr><th>Pesan</th><td><?= $pesan ?></td></tr>
          </table>

          <a href="form.php" class="btn btn-primary">Input Lagi</a>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
