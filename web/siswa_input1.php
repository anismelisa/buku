<!DOCTYPE html>
<html>
<head>
	<title>Input Data Siswa</title>
</head>
<body>
<div class="container">
  <?php
     include"koneksi.php";
     function input($data){
     	$data = trim($data);
     	$data = stripslashes($data);
     	$data = htmlspecialchars($data);
     	return $data;

     }
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
     	$ID=input($_POST["id"]);
     	$NIM=input($_POST["nim"]);
     	$Nama_Siswa=input($_POST["nama"]);
     	$Alamat=input($_POST["alamat"]);
     	$jenis_kelamin=input($_POST["jenis_kelamin"]);

     	$sql="insert into mahasiswa(id,nim,nama,alamat,jenis_kelamin)values('$id','$nim','$nama','$alamat','$jenis_kelamin')";
     	$hasil=mysqli_query($koneksi,$sql);

     	if($hasil){
     		header("location:siswa.php");
     	}
     	else{
     		echo"<div class='alert alert-danger'>Data Gagal disimpan.</div>;4
     	}
     	
     	
     	
     	
     }


</body>
</html>