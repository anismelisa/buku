<?php
include "koneksi.php";
echo"
<header>
  	<a style='text-align:center; color:black' href='menu.php'>HOME</a>
</header>
<h2 style='text-align:center;'> Input Mata Kuliah</h2>
 <form method='POST' action='aksi_matakuliah_input.php' enctype='multipart/form-data'>
 <table border='0' width='100%' cellspacing='5' cellpadding='5'>
 		<tr><td>Kode Mata Kuliah</td><td>input type='text' name='kode_mk' size='10'></td></tr>
 		<tr><td>Nama Mata Kuliah</td><td>input type='text' name='nama_mk' size='50'></td></tr>
 		<tr><td>SKS</td><td>input type='text' name='sks'></td></tr>
 		<tr><td>Semester</td><td>input type='text' name='Semester'></td></tr>
 		<tr><td colspan=2><input type='submit' value='Simpan'><input type='reset' value='Batal'></td></tr>
 		</table>
 		</form>";
 ?>		