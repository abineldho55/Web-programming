<?php


    $firstName = $_POST["name"];
    $acc = $_POST["acc"];
    $units = $_POST["a"];
    

   if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 150) {
        $bill = 50 * 3.50 + ($units - 50) * 4;
    } elseif ($units <= 250) {
        $bill = 50 * 3.50 + 100 * 4 + ($units - 150) * 5.20;
    } else {
        $bill = 50 * 3.50 + 100 * 4 + 100 * 5.20 + ($units - 250) * 6.50;
    }






    echo "<h2><u><center>Bill Details</center></u></h2><br>";
    echo "<p>Name of account holder $firstName</p>";
    echo "<p>account number: $acc</p>";
    echo "<p>unit of current: $units</p>";
    echo "<p>Bill payable: $bill</p>";
	
	
	?>
	
	
   