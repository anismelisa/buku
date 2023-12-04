<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../siswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../MK/index.php">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">KHS</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<h2 class="text-center">Kartu Hasil Studi</h2>
  <div class="container">
    <a href="tambah.php">Tambah Nilai</a><br><br>
    <?php 

    include '../koneksi.php';
    // Query SQL untuk mendapatkan data KHS
    $sql = "SELECT DISTINCT * FROM mahasiswa ";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1' class='table table-bordered'>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td><a href='mahasiswa.php?nim=" . $row['nim'] . "'>" . $row['nim'] . "</a></td>
                    <td>" . $row['nama'] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data KHS.";
    }

    // Tutup koneksi
    $koneksi->close();
    ?>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>