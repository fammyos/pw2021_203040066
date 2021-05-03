<?php
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 12 (03-04-2021)
// Materi pertemuan 12 adalah login dan registrasi
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

//Ambil id dari URL
$id = $_GET['id'];

//Query Mobil dari id
$mbl = query("SELECT * FROM mobil WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mobil</title>
</head>

<body>
  <h3>Detail Mobil</h3>
  <ul>
    <li><?= $mbl['nama_merk']; ?></li>
    <li><?= $mbl['nama_jenis']; ?></li>
    <li><?= $mbl['transmisi']; ?></li>
    <li><?= $mbl['tahun_produksi']; ?></li>
    <li><img src="img/<?= $mbl["gambar"]; ?>" width="100"></li>
    <li><a href="ubah.php?id=<?= $mbl['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mbl['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></li>
    <li><a href="index.php">Kembali Ke Daftar Mobil</a></li>
  </ul>
</body>

</html>