<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$data = file_exists("data.txt") ? file("data.txt") : [];
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Tamu</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
      Data Buku Tamu
    </div>

    <div class="card-body">
      <table class="table table-bordered table-striped">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Asal</th>
          <th>Pesan</th>
        </tr>

        <?php
        $no = 1;
        foreach ($data as $row) {
            list($nama,$email,$asal,$pesan) = explode("|", $row);
            echo "<tr>
              <td>$no</td>
              <td>$nama</td>
              <td>$email</td>
              <td>$asal</td>
              <td>$pesan</td>
            </tr>";
            $no++;
        }
        ?>
      </table>

      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
</div>

</body>
</html>
