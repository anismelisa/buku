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
 
<h2 class="text-center">Tambah Mata Kuliah</h2>
<div class="container">
<form method='POST' action='aksi_tambah.php' enctype='multipart/form-data'>  
    <table border='0' width='100%' cellspacing='5' cellpadding='5'> 
    <tr><td>Kode MK</td><td><input type='text' name='kode_mk' size='10'></td></tr>  
    <tr><td>Nama MK </td><td><input type= 'text' name='nama_mk' size='50'></td></tr>  
    <tr><td>SKS </td><td><input type='text' name='sks'></td></tr>
    <tr><td>Semester</td><td><input type = 'text' name='semester'></td><tr>    
           <td colspan= 2> 
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