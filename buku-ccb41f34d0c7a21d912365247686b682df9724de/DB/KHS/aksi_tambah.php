<?php
include '../koneksi.php';

try {
    // Ambil data dari form tambah.php
    $nim = $_POST['nim'];
    $matakuliah_id = $_POST['matakuliah_id'];
    $nilai = $_POST['nilai'];
    $semester = $_POST['semester'];

    // Query SQL untuk memeriksa apakah mahasiswa valid
    $checkMahasiswaQuery = "SELECT * FROM Mahasiswa WHERE nim='$nim'";
    $mahasiswaResult = $koneksi->query($checkMahasiswaQuery);

    if ($mahasiswaResult->num_rows == 0) {
        throw new Exception("Mahasiswa dengan NIM $nim tidak ditemukan.");
    }

    // Query SQL untuk memeriksa apakah mata kuliah valid
    $checkMatakuliahQuery = "SELECT * FROM MataKuliah WHERE id='$matakuliah_id'";
    $matakuliahResult = $koneksi->query($checkMatakuliahQuery);

    if ($matakuliahResult->num_rows == 0) {
        throw new Exception("Mata kuliah dengan ID $matakuliah_id tidak ditemukan.");
    }

    // Query SQL untuk menyimpan data ke dalam tabel KHS
    $sql = "INSERT INTO KHS (nim_mahasiswa, matakuliah_id, nilai, semester) VALUES ('$nim', $matakuliah_id, '$nilai', $semester)";

    // Coba menjalankan query
    if ($koneksi->query($sql) === TRUE) {
        echo "<a href='index.php'>Data nilai KHS berhasil disimpan</a>";
    } else {
        throw new Exception("Error: " . $sql . "<br>" . $koneksi->error);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Tutup koneksi
$koneksi->close();
?>
