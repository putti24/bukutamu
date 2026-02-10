<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <span class="navbar-brand">Buku Tamu</span>
    <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
  </div>
</nav>

<div class="container mt-5">
  <div class="card shadow text-center">
    <div class="card-body">
      <h4>Halo, <?= $_SESSION['username']; ?></h4>
      <a href="form.php" class="btn btn-primary m-2">Isi Buku Tamu</a>
      <a href="tabel.php" class="btn btn-success m-2">Lihat Data Tamu</a>
    </div>
  </div>
</div>

</body>
</html>
