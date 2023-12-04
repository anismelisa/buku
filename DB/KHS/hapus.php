<?php
include "../koneksi.php";
mysqli_query($koneksi,"DELETE FROM khs WHERE id='$_GET[id]'");
	echo "<a href='index.php'>Data Sudah Dihapus...!</a>";
?>