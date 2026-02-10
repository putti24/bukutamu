<?php
session_start();

$nama  = $_POST['nama'];
$email = $_POST['email'];
$asal  = $_POST['asal'];
$pesan = $_POST['pesan'];

$data = "$nama|$email|$asal|$pesan\n";
file_put_contents("data.txt", $data, FILE_APPEND);

header("Location: tabel.php");
