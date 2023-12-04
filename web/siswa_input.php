<?php
	include "koneksi.php";
	echo "
		<h2>Input Data Siswa</h2>
		<form method='POST' action='aksi_siswa_input.php' enctype='multipart/form-data'>
		<table border='0' width='100%' cellspacing='5' cellpadding='5'>
		<tr><td>NIM</td><td><input type='text' name='nim' size='10'></td></tr>
		<tr><td>Nama Siswa</td><td><input type='text' name='nama' size='50'></td></tr>
		<tr><td>Alamat</td><td><input type='text' name='alamat'></td></tr>
		<tr><td>Jenis Kelamin</td><td><input type='text' name='jenis_kelamin'></td></tr>
		<tr><td colspan='2'><input type='submit' value='Simpan'><input type='reset' value='Batal'></td></tr>
		</table>
		</form>";
?>