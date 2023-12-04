<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="siswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="MK/index.php">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="KHS/index.php">KHS</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<?php
include "koneksi.php";
echo "
<h2 class='text-center'>Data Mahasiswa</h2>
<a href='siswa_input.php'>Tambah Siswa</a>
<br><br>
<table class='table table-bordered' >
<tr>
<th>No</th><th>NIM</th><th>Nama Siswa</th><th>Alamat</th><th>Jenis Kelamin</th><th>Aksi</th>
</tr>";
$tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$no = 1;
while ($r = mysqli_fetch_array($tampil)) {
    echo "
    <tr>
    <td>$no</td>
    <td>$r[nim]</td>
    <td>$r[nama]</td>
    <td>$r[alamat]</td>
    <td>$r[jenis_kelamin]</td>
    <td align='center'>
    <a href='siswa_edit.php?id=$r[id]'>Edit</a> &nbsp;
    <a href='aksi_siswa_delete.php?id=$r[id]'>Delete</a>
    </td>
    </tr>";
    $no = $no + 1;
}
echo "</table>";
echo "<br>
<form method='POST' action='siswa_cari.php'>
Kata pencarian: <input type='text' name='keyword'>
<input type='submit' value='Cari'>
</form>";
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>