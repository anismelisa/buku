<?php
	include"koneksi.php";
	echo"
	<h2>Master Data Siswa</h2>
		<a href='siswa_input.php'>Tambah Siswa</a><br><br>
		<table border='1' width='100%' cellspacing='0' cellpadding='0'>
		   <tr><th>id</th><th>nim</th><th>nama</th><th>alamat</th><th>jenis_kelamin</th><th>Aksi</th></tr>";
		    $tampil=mysqli_query($koneksi,"SELECT * FROM mahasiswa");
		    $id=1;
		    while($r=mysqli_fetch_array($tampil))
			    {
			    	echo"
			    	<tr>
			    	   <td>$id</td>
			    	   <td>$r[nim]</td>
			    	   <td>$r[nama]</td>
			    	   <td>$r[alamat]</td>
			    	   <td>$r[jenis_kelamin]</td>
			    	   <td align='center'>
			    	        <a href='siswa_edit.php?id=$r[nim]'>Edit</a> &nbsp;
			    	        <a href='aksi_siswa_delete.php?id=$r[nim]'>Delete</a>;
			    	   </td>
			    	</tr>";
			    	$id=$id+1;
			    } 
		    echo"</table>";
		    echo"<br>
		    <from method='POST' action='mahasiswa_cari.php'>
		         Kata pencarian: <input type='text' name='keyword'>
		         <input type='submit' value='cari'>
		     </from>";
?>    




