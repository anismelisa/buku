<?php 
  if(isset($_POST['hitung'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];
    switch ($operasi) {
      case 'tambah':
        $hasil = $bil1+$bil2;
      break;
      case 'kurang':
        $hasil = $bil1-$bil2;
      break;
      case 'kali':
        $hasil = $bil1*$bil2;
      break;
      case 'bagi':
        $hasil = $bil1/$bil2;
      break;      
    }
  }
  
switch ($operasi) {
  case 'tambah':
    $hasil =$bil1+$bil2;
    break;
    case 'kurang':
    $hasil =$bil1-$bil2;
    break;
     case 'kali':
    $hasil =$bil1*$bil2;
    break;
     case 'bagi':
    $hasil =$bil1/$bil2;
    break;
}

<?php if(isset($_POST['hitung'])){ ?>
  <input type="text" value="<?php echo $hasil; ?>" class="bil">
<?php }else{ ?>
  <input type="text" value="0" class="bil">
<?php } ?>

