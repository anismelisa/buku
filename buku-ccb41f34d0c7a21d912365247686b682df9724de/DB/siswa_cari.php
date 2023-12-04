<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
		<?php
		include"koneksi.php";
		$keyword=$_POST['keyword'];
		echo"
		<h2 class='text-center'> Master Data Siswa</h2><br>
		<table class='table table-boredred'>
		<tr>
		<th>No</th><th>NIM</th><th>Nama Mahasiswa</th><th>Alamat</th><th>Jenis Kelamin</th><th>Aksi</th>
		</tr>";
		$tampil=mysqli_query($koneksi,"SELECT * FROM mahasiswa where nama like '%$keyword%' ");
		$no=1;
			while($r=mysqli_fetch_array($tampil)){
				echo"
				<tr>
				<td>$no</td>
				<td>$r[nim]</td>
				<td>$r[nama]</td>
				<td>$r[alamat]</td>
				<td>$r[jenis_kelamin]</td>
				<td align=center>
				<a href=siswa_edit.php?id=$r[nim]>edit</a>&nbsp;
				<a href=aksi_siswa_hapus.php?id=$r[nim]>Delete</a>
				</td>
				</tr>";
				$no=$no+1;
			}
			echo"</table>";
		?>
	</div>
  </body>