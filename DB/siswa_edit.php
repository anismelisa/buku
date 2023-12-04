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
    <div class="container">
    <?php
    include "koneksi.php";

    $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$_GET[id]'");
    $r = mysqli_fetch_array($tampil);

    echo "
    <h2 class='text-center'>Edit Data Siswa</h2>
    <form method='POST' action='aksi_siswa_edit.php' enctype='multipart/form-data'>
        <table border='0' width='100%' cellspacing='5' cellpadding='5'>
            <input type='hidden' value='$r[id]' name='id'>
            <tr><td>Nomor induk mahasiswa</td><td><input type='text' name='nim' size='10' value='$r[nim]'></td></tr>
            <tr><td>Nama mahasiswa</td><td><input type='text' name='nama' size='50' value='$r[nama]'></td></tr>
            <tr><td>Alamat</td><td><input type='text' name='alamat' value='$r[alamat]'></td></tr>
            <tr><td>Jenis Kelamin</td><td><input type='text' name='jenis_kelamin' value='$r[jenis_kelamin]'></td></tr>
            <tr>
            <td colspan='2'>
                <input type='submit' value='Update'>
                <input type='reset' value='Reset'>
            </td>
            </tr>
        </table>
    </form>";
    ?>
    </div>
  </body>