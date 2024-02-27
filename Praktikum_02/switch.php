<?php

    $grade = "A";

    $keterangn = "";

switch ($grade) {
    case "A":
        $keterangn = "Sangat Memuaskan";
        break;
    case "B":
        $keterangan = "Memuaskan";
        break;
    case "C":
        $keterangan = "Kurang Memuaskan";
        break;
    case "D":
        $keterangan = "Tidak Memuaskan";
        break;
    case "E":
        $keterangan = "Tidak Lulus";
        break;
    
}

echo "<h1>$keterangan</h1>"