<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
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
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../siswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../KHS/index.php">KHS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h2 class="text-center">Mata Kuliah</h2>
<div class="container">
<a href="tambah.php">Tambah Mata Kuliah</a>
<h3>semester 1</h3>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode MK</th>
      <th scope="col">Nama MK</th>
      <th scope="col">SKS</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "../koneksi.php";
    $tampil = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE semester = '1'");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { 
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $r['kode_mk']; ?></td>
      <td><?php echo $r['nama_mk']; ?></td>
      <td><?php echo $r['sks']; ?></td>
      <td>
  <a href='edit.php?id=<?php echo $r['id']; ?>'>Edit</a>
  <a href='hapus.php?id=<?php echo $r['id']; ?>'>Hapus</a>
</td>

    </tr>
    <?php 
    $no = $no + 1; 
    } 
    ?>
  </tbody>
</table>
<br>
<h3>semester 2</h3>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode MK</th>
      <th scope="col">Nama MK</th>
      <th scope="col">SKS</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "../koneksi.php";
    $tampil = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE semester = '2'");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { 
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $r['kode_mk']; ?></td>
      <td><?php echo $r['nama_mk']; ?></td>
      <td><?php echo $r['sks']; ?></td>
      <td>
  <a href='edit.php?id=<?php echo $r['id']; ?>'>Edit</a>
  <a href='hapus.php?id=<?php echo $r['id']; ?>'>Hapus</a>
</td>

    </tr>
    <?php 
    $no = $no + 1; 
    } 
    ?>
  </tbody>
</table>

<br>
<h3>semester 3</h3>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode MK</th>
      <th scope="col">Nama MK</th>
      <th scope="col">SKS</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "../koneksi.php";
    $tampil = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE semester = '3'");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { 
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $r['kode_mk']; ?></td>
      <td><?php echo $r['nama_mk']; ?></td>
      <td><?php echo $r['sks']; ?></td>
      <td>
  <a href='edit.php?id=<?php echo $r['id']; ?>'>Edit</a>
  <a href='hapus.php?id=<?php echo $r['id']; ?>'>Hapus</a>
</td>

    </tr>
    <?php 
    $no = $no + 1; 
    } 
    ?>
  </tbody>
</table>

<br>
<h3>semester 4</h3>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode MK</th>
      <th scope="col">Nama MK</th>
      <th scope="col">SKS</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "../koneksi.php";
    $tampil = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE semester = '4'");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { 
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $r['kode_mk']; ?></td>
      <td><?php echo $r['nama_mk']; ?></td>
      <td><?php echo $r['sks']; ?></td>
      <td>
  <a href='edit.php?id=<?php echo $r['id']; ?>'>Edit</a>
  <a href='hapus.php?id=<?php echo $r['id']; ?>'>Hapus</a>
</td>

    </tr>
    <?php 
    $no = $no + 1; 
    } 
    ?>
  </tbody>
</table>

<br>
<h3>semester 5</h3>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode MK</th>
      <th scope="col">Nama MK</th>
      <th scope="col">SKS</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "../koneksi.php";
    $tampil = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE semester = '5'");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { 
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $r['kode_mk']; ?></td>
      <td><?php echo $r['nama_mk']; ?></td>
      <td><?php echo $r['sks']; ?></td>
      <td>
  <a href='edit.php?id=<?php echo $r['id']; ?>'>Edit</a>
  <a href='hapus.php?id=<?php echo $r['id']; ?>'>Hapus</a>
</td>

    </tr>
    <?php 
    $no = $no + 1; 
    } 
    ?>
  </tbody>
</table>

<br>
<h3>semester 6</h3>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode MK</th>
      <th scope="col">Nama MK</th>
      <th scope="col">SKS</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "../koneksi.php";
    $tampil = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE semester = '6'");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { 
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $r['kode_mk']; ?></td>
      <td><?php echo $r['nama_mk']; ?></td>
      <td><?php echo $r['sks']; ?></td>
      <td>
  <a href='edit.php?id=<?php echo $r['id']; ?>'>Edit</a>
  <a href='hapus.php?id=<?php echo $r['id']; ?>'>Hapus</a>
</td>

    </tr>
    <?php 
    $no = $no + 1; 
    } 
    ?>
  </tbody>
</table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
