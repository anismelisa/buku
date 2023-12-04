<?php
if(isset($_POST['Hasil']))
  $angka1 = $_POST['bilangan1'];
  $angka2 = $_POST['bilangan2'];
  $operator = $_POST['operator'];
  $Hasil  = $_POST['Hasil'];

  function perhitungan($bilangan1,$bilangan2,$operator)
  {
    switch ($operator) {
      case '+';
        return $bilangan1 + $bilangan2;
      case '-';
        return $bilangan1 - $bilangan2; 
       case '*';
        return $bilangan1 * $bilangan2;  
        case '/';
           if ($bilangan2 != 0) 
           {
            return $bilangan1/$bilangan2;
           }
           else
           {
            return "Tidak terdefinisi";
           }

       
    }
  }
  $hasilperhitungan = perhitungan($angka1,$angka2,$operator);
  echo "Hasil = $hasilperhitungan";
  ?>