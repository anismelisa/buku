<?php
    include "../koneksi.php";
          
    // Ambil data dari formulir
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];

    // Query SQL untuk menyimpan data ke dalam tabel MataKuliah
    $sql = "INSERT INTO matakuliah (kode_mk, nama_mk, sks, semester) VALUES ('$kode_mk', '$nama_mk', $sks, $semester)";

    if (mysqli_query($koneksi, $sql)) {
        echo "<a href='index.php'>Data sudah Masuk ...!</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

?>