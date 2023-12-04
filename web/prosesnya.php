<?php 
	if (isset($_POST['input'])) 
	{ 
		$barisA = $_POST['barisA'];
		$kolomA = $_POST['kolomA'];  
		$barisB = $_POST['barisB'];
		$kolomB = $_POST['kolomB'];
		if ($kolomA != $barisB) 
			{
	            echo "Perkalian matriks tidak dapat dilakukan karena jumlah kolom Matriks A tidak sama dengan jumlah baris Matriks B.";
	        } 
        else 
        {
            echo "<form method='post'>";
            echo "Matriks A:<br>";
            for ($matrix = 0; $matrix < $barisA; $matrix++) 
	            {
	                for ($nilai = 0; $nilai < $kolomA; $nilai++) 
	                {
	                    echo "<input type='number' name='matriksA[$matrix][$nilai]' required style='width: 35; height:25 ;'>";
	                }
	                echo "<br>";
	            }
            echo "<br>";
            echo "Matriks B:<br>";
            for ($matrix = 0; $matrix < $barisB; $matrix++) 
	            {
	                for ($nilai = 0; $nilai < $kolomB; $nilai++) 
	                {
	                    echo "<input type='number' name='matriksB[$matrix][$nilai]' required style='width: 35; height:25 ;'>";
	                }
	                echo "<br>";
	            }
            echo "<br>";
            echo "<input type='submit' name='hitunghasil' value='Hitung'>";
            echo "<input type='reset' name='delete' value='hapus'>";
            echo "</form>";
        }
    }

    if (isset($_POST['hitunghasil'])) 
    {
        $matriksA = $_POST['matriksA'];
        $matriksB = $_POST['matriksB'];
        $barisA = count($matriksA);
	    $kolomA = count($matriksA[0]);
	    $barisB = count($matriksB);
	    $kolomB = count($matriksB[0]);
        $hasil = [];
        for ($matrix = 0; $matrix < $barisA; $matrix++) 
	        {
	            for ($nilai = 0; $nilai < $kolomB; $nilai++) 
	            {
	                $hasil[$matrix][$nilai] = 0;
	                for ($jumlah = 0; $jumlah < $kolomA; $jumlah++) 
	                {
	                    $hasil[$matrix][$nilai] += $matriksA[$matrix][$jumlah] * $matriksB[$jumlah][$nilai];
	                }
	            }
	        }
	        echo "HASIL MATRIKS :<br>";
	        for ($matrix = 0; $matrix < $barisA; $matrix++) 
		        {
		            for ($nilai = 0; $nilai < $kolomB; $nilai++) 
			            {
		                	echo $hasil[$matrix][$nilai] ;
		                }
            	}
	}
?>