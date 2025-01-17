<?php
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 10 (29-04-2021)
// Materi hari ini adalah Koneksi Database
?>
<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_203040066');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  //Jika datanya 1
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama_merk = htmlspecialchars($data['nama_merk']);
  $nama_jenis = htmlspecialchars($data['nama_jenis']);
  $transmisi = htmlspecialchars($data['transmisi']);
  $tahun_produksi = htmlspecialchars($data['tahun_produksi']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO `mobil`(`id`, `nama_merk`, `nama_jenis`, `transmisi`, `tahun_produksi`, `gambar`) VALUES (null, '$nama_merk', '$nama_jenis', '$transmisi', '$tahun_produksi', '$gambar')";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
