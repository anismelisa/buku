 <?php
    include "koneksi.php";
    
    // Ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // Query SQL untuk menyimpan data ke dalam tabel Mahasiswa
    $sql = "INSERT INTO Mahasiswa (nim, nama, alamat, jenis_kelamin) VALUES ('$nim', '$nama', '$alamat', '$jenis_kelamin')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<a href='siswa.php'>Data sudah Masuk ...!</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

?>