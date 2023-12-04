<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container"><br>
        <h2 class="text-center">Kartu Hasil Studi</h2><br>

        <?php 
        include '../koneksi.php';

        // Ambil NIM dari parameter URL
        $nim = $_GET['nim'];

        // Query SQL untuk mendapatkan informasi mahasiswa
        $mahasiswaSql = "SELECT * FROM Mahasiswa WHERE nim='$nim'";
        $mahasiswaResult = $koneksi->query($mahasiswaSql);

        $mahasiswaRow = $mahasiswaResult->fetch_assoc();
        echo "
            <table style=''>
            <tr><th><h4>NIM</h4></th> <th><h4>: " . $mahasiswaRow['nim'] . "</h4></th></tr>
            <tr><th><h4>Nama</h4></th> <th><h4>: " . $mahasiswaRow['nama'] . "</h4></th></tr>
            </table>
            ";

        // Perulangan untuk semester 1 hingga 6
        for ($semester = 1; $semester <= 6; $semester++) {
            // Query SQL untuk mendapatkan data KHS mahasiswa
            $khsSql = "SELECT KHS.id, MataKuliah.kode_mk, MataKuliah.nama_mk, MataKuliah.sks, KHS.nilai 
                        FROM KHS
                        JOIN MataKuliah ON KHS.matakuliah_id = MataKuliah.id
                        WHERE KHS.nim_mahasiswa='$nim' AND KHS.semester = '$semester'";
            $khsResult = $koneksi->query($khsSql);

            if ($khsResult->num_rows > 0) {
                echo "<br><h5>Semester $semester</h5>";
                echo "<table class='table table-bordered'>
                        <tr>
                            <th>No</th>
                            <th>Kode MK</th>
                            <th>Nama MK</th>
                            <th>SKS</th>
                            <th>Nilai</th>
                            <th>Kategori Nilai</th>
                            <th>Aksi</th>
                        </tr>";

                $no = 1;
                $totalSKS = 0; // Variabel untuk mengakumulasi total SKS per semester

                while ($khsRow = $khsResult->fetch_assoc()) {
                    // Tentukan kategori nilai berdasarkan nilai yang dimasukkan
                    $kategoriNilai = "";
                    if ($khsRow['nilai'] >= 85 && $khsRow['nilai'] <= 100) {
                        $kategoriNilai = "A";
                    } elseif ($khsRow['nilai'] >= 70 && $khsRow['nilai'] < 85) {
                        $kategoriNilai = "B";
                    } elseif ($khsRow['nilai'] >= 55 && $khsRow['nilai'] < 70) {
                        $kategoriNilai = "C";
                    } elseif ($khsRow['nilai'] >= 40 && $khsRow['nilai'] < 55) {
                        $kategoriNilai = "D";
                    } else {
                        $kategoriNilai = "E";
                    }

                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $khsRow['kode_mk'] . "</td>
                            <td>" . $khsRow['nama_mk'] . "</td>
                            <td>" . $khsRow['sks'] . "</td>
                            <td>" . $khsRow['nilai'] . "</td>
                            <td>" . $kategoriNilai . "</td>
                            <td><a href='hapus.php?id=" . $khsRow['id'] . "'>Hapus</a></td> <!-- Tambah tombol hapus -->
                        </tr>";

                    $totalSKS += $khsRow['sks']; // penjumlahan total SKS
                }

                echo "<tr class='fw-bold'>
                        <td></td>
                        <td colspan='2'>Total SKS</td>
                        <td colspan='4'>$totalSKS</td>
                      </tr>";

                echo "</table>";
            } else {
                echo "<p>Tidak ada data KHS untuk semester $semester</p>";
            }
        }

        // Tutup koneksi
        $koneksi->close();
        ?>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>