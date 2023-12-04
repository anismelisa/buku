<?php
			include"koneksi.php"
		    $tampil=mysqli_query($koneksi,"SELECT * FROM matakuliah where kode_mk='$_GET[id]'");
		    $nilai=mysqli_fetch_array($tampil);
		    echo"
		    <header>
		    <a style='text-align:center; color:black' href='menu.php'>HOME</a>
			</header>
			<h2 style='text-align:center;'> Input Mata Kuliah</h2>
			 <form method='POST' action='aksi_matakuliah_edit.php' enctype='multipart/form-data'>
			 <table border='0' width='100%' cellspacing='5' cellpadding='5'>
	 		<tr><td>Kode Mata Kuliah</td><td>input type='text' name='kode_mk' size='10' value='$nilai[kode_mk]'></td></tr>
	 		<tr><td>Nama Mata Kuliah</td><td>input type='text' name='nama_mk' size='50' value='$nilai[nama_mk]'></td></tr>
	 		<tr><td>SKS</td><td>input type='text' name='sks' value='$nilai[sks]'></td></tr>
	 		<tr><td>Semester</td><td>input type='text' name='Semester' value='$nilai[Semester]'></td></tr>
	 		<tr><td colspan=2><input type='submit' value='Update'><input type='reset' value='Reset'></td></tr>
 		</table>
 		</form>";



