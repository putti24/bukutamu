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
<title>Form Buku Tamu</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      Form Buku Tamu
    </div>

    <div class="card-body">
      <form method="POST" action="simpan.php">

        <div class="mb-3">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
          <label>Asal</label>
          <input type="text" name="asal" class="form-control">
        </div>

        <div class="mb-3">
          <label>Pesan</label>
          <textarea name="pesan" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>

      </form>
    </div>
  </div>
</div>

</body>
</html>
