<!-- || = ATAU -->
<!-- && = dua kondisi harus terpenuhi -->
<?php

    $nilai = 90;
    $status = "";

if ($nilai >= 90) {
    $status = "Mantap Banget";
} elseif ($nilai > 70 || <= 90) {
    $status = "Mantep Aja";
} else {
    $status = "Eyyyy";
}

echo "<h1>$status</h1>"