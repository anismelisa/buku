<?php

include "../koneksi.php";
mysqli_query($koneksi,"UPDATE matakuliah SET kode_mk = '$_POST[kode]', nama_mk='$_POST[nama_mk]', sks='$_POST[sks]', semester='$_POST[semester]'  WHERE id= '$_POST[id]'");
echo"<a href='index.php'>Data Sudah Update...!</a>";
?>
