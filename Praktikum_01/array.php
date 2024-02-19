<?php
$hewan = ["Kucing", "Upiww Slebew", "Monyet", "Upiww Lagi"];
echo $hewan[1] . "<br>";
echo $hewan[3] . "<br>";
echo "<br>";

// foreach = syntax untuk mengoperasikan looping pada array
foreach ($hewan as $key => $value) {
    echo $value . "<br>";
}
echo "<br>";

// Menambahkan nilai pada variable
$hewan[2] = "Kangkung";
echo $hewan[2];