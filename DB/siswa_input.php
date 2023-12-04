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
    <div class="container">
  <?php 
  include "koneksi.php";
  echo "
  <h2 class='text-center'>Input Data Siswa</h2> 
  <form method='POST' action='aksi_siswa_input.php' enctype='multipart/form-data'>  
    <table border='0' width='100%' cellspacing='5' cellpadding='5'> 
    <tr><td>Nomor Induk mahasiswa</td><td><input type='text' name='nim' size='10'></td></tr>  
    <tr><td>Nama mahasiswa </td><td><input type= 'text' name='nama' size='50'></td></tr>  
    <tr><td>alamat</td><td><input type='text' name='alamat'></td></tr>
    <tr><td>jenis kelamin</td><td><input type = 'text' name='jenis_kelamin'></td><tr>    
           <td colspan= 2> 
               <input type='submit' value='simpan'> 
               <input type='reset' value='Reset'>   
                    </td> 
                   </tr>  
               </table> 
           </form>"; 
          ?>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>

