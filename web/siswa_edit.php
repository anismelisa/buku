<?php
include "koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM mahasiswa where nim='$_GET[id]' ");
$r=mysqli_fetch_array($tampil);
echo "
<h2>Input Data Siswa</h2>
<form method='POST' action='aksi_siswa_edit.php' enctype='multipart/form-data'>
	<table border='0' width='100%' cellspacing='5' cellpadding='5'>
		<tr><td>NIM</td><td><input type='text' name='nim' size='10' value='$r[nim]'></td></tr>
		<tr><td>Nama Siswa</td><td><input type='text' name='nama' size='50' value='$r[nama]'></td></tr>
		<tr><td>Alamat</td><td><input type='text' name='alamat' value='$r[alamat]'></td></tr>
		<tr><td>Jenis Kelamin</td><td><input type='text' name='jenis_kelamin' value='$r[jenis_kelamin]'></td></tr>
		<tr><td colspan='2'><input type='submit' value='Update'><input type='reset' value='Reset'></td>
		</tr>
	</table>
</form>";
?>