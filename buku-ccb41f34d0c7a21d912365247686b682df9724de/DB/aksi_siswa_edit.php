<?php
include "koneksi.php";

mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$_POST[nim]', alamat='$_POST[alamat]', nama='$_POST[nama]', jenis_kelamin='$_POST[jenis_kelamin]' WHERE id = '$_POST[id]'");
echo "<a href='siswa.php'>Data Sudah Update...!</a>";
?>
