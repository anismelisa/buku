<html> 
	<head><title>Matriks</title></head> 
	<body> 
		<FORM ACTION="prosesnya.php" METHOD="POST" NAME="input"> 
			Masukkan ukuran matriks A :<br><br>
			Baris <input type="number" name="barisA" style="width: 35; height:25 ;" required>
			Kolom <input type="number" name="kolomA" style="width: 35; height:25 ;" required><br><br>
			Masukkan ukuran matriks B :<br><br>
			Baris <input type="number" name="barisB" style="width: 35; height:25 ;" required>
			Kolom <input type="number" name="kolomB" style="width: 35; height:25 ;" required><br><br>
			<input type="submit" name="input" value="kirim">
        	<input type="reset" name="delete" value="hapus">
		</FORM> 
	</body> 
</html>