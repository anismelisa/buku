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
  <h2 class="text-center">Edit Mata Kuliah</h2>
  <div class="container">
    <?php 
    include "../koneksi.php";
    
    $tampil = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE id = '$_GET[id]'");
    $r = mysqli_fetch_array($tampil);
    ?>
    <form method='POST' action='aksi_edit.php' enctype='multipart/form-data'>  
      <table border='0' width='100%' cellspacing='5' cellpadding='5'> 
        <input type='hidden' value='<?php echo $r['id']; ?>' name='id'>
        <tr><td>Kode MK</td><td><input type='text' value="<?php echo $r['kode_mk']; ?>" name='kode' ></td></tr>  
        <tr><td>Nama MK</td><td><input type='text' value="<?php echo $r['nama_mk']; ?>" name='nama_mk' ></td></tr>  
        <tr><td>SKS</td><td><input type='text' value="<?php echo $r['sks']; ?>" name='sks'></td></tr>
        <tr><td>Semester</td><td><input type='text' value="<?php echo $r['semester']; ?>" name='semester'></td></tr>
        <tr>
          <td colspan='2'> 
            <input type='submit' value='simpan'> 
            <input type='reset' value='Batal'>   
          </td> 
        </tr>  
      </table> 
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>