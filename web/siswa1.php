<?php 
include "koneksi.php"; 
echo"
<h2>Master Data Siswa</h2> 
<a href='siswa_input1.php'>Tambah Siswa</a>
 <br><br>
  <table border=1 width=100% cellspacing=0 cellpadding=0> 

  <tr>
  <th>id</th><th>nim</th><th>nama</th><th>alamat</th><th>jenis_kelamin</th> 
  </tr>";
   $tampil=mysqli_query($koneksi,"SELECT * FROM mahasiswa"); 
  
    while ($r=mysqli_fetch_array($tampil)){ 
    	echo"
    <tr> 
     <td>$r[id]</td>   
      <td>$r[nim] </td>   
       <td>$r[nama]</td> 
       <td>$r[alamat]</td>
       <td>$r[jenis_kelamin]</td>  
        <td align=‘center’>   
        
          </tr>";
      
      }
      echo "</table>"; 
      echo "<br>
       <form method='POST' action='siswa_cari.php'>  
       Kata pencarian: <input type='text' name='keyword'> 
       <input type='submit' value='Cari'> 
       </form>";
   ?>