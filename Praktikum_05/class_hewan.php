<?php

class HewanMamalia
{
    public $warna;
    public $namaHewan;
    public $habitat;

    function makan()
    {
        return "Mamalia makan";
    }

    function minum()
    {
        return "Mamalia minum";
    }

    function menyusui()
    {
        return "Mamalia menyusui";
    }
}

$mamalia = new HewanMamalia();
echo $mamalia -> namaHewan = "Lumba-Lumba";
echo "<br>";
echo $mamalia -> warna = "Birdong";
echo "<br>";
echo $mamalia -> habitat = "Laut";
echo "<br><br>";
echo $mamalia -> makan();
echo "<br>";
echo $mamalia -> minum();
echo "<br>";
echo $mamalia -> menyusui();
echo "<br>";