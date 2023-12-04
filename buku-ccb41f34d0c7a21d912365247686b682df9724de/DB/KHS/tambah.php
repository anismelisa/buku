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
 
  <h2 class="text-center">input nilai mahasiswa</h2><br>
  <div class="container">
  <form action="aksi_tambah.php" method="POST">
        <table width='50%' cellspacing='5' cellpadding='5'>
          <tr>
            <td>NIM Mahasiswa</td>
            <td><input type="text" name="nim" required><br></td>
          </tr>
          <tr>
            <td>Mata Kuliah</td>
            <td>
              <select name="matakuliah_id" required>
                <?php
                  include '../koneksi.php';

                  // Query SQL untuk mendapatkan data MataKuliah
                  $matakuliahSql = "SELECT id, kode_mk, nama_mk FROM MataKuliah";
                  $matakuliahResult = $koneksi->query($matakuliahSql);

                  if ($matakuliahResult->num_rows > 0) {
                      while ($row = $matakuliahResult->fetch_assoc()) {
                          echo "<option value='" . $row['id'] . "'>" . $row['kode_mk'] . " - " . $row['nama_mk'] . "</option>";
                      }
                  } else {
                      echo "<option value='' disabled selected>Tidak ada Mata Kuliah</option>";
                  }

                  // Tutup koneksi
                  $koneksi->close();
                ?>
              </select>
            </td>
          </tr>
          
          <tr>
            <td>Nilai</td>
            <td><input type="text" name="nilai" required size='10'><br></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td><select name="semester" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select><br>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Simpan">
              <input type='reset' value='Reset'> 
            </td>
          </tr>
        </table>
      </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>