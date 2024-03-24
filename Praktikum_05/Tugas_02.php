<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <form method="POST" action="Tugas.php">
    <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-book"></i>
            </div>
            </div> 
            <input id="nim" name="nim" type="text" class="form-control" required="required">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="mk" class="col-4 col-form-label">Pilih MK</label> 
        <div class="col-8">
        <select id="mk" name="mk" class="custom-select" required="required">
            <option value="pw2">Pemrograman Web 2</option>
            <option value="dataBase">Data Base</option>
            <option value="ppkn">PPKN</option>
            <option value="uiux">UI/UX</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai" class="col-4 col-form-label">Nilai</label> 
        <div class="col-8">
        <input id="nilai" name="nilai" type="text" class="form-control" required="required">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php

if(isset($_POST['simpan'])){
    $nim = $_POST['nim'];
    $mataKuliah = $_POST['mk'];
    $nilai = $_POST['nilai'];
}

class nilaiUjian
{
    Public $nim, $mataKuliah, $nilai, $hasilUjian, $grade;

    function __construct($nim, $mataKuliah, $nilai, $hasilUjian, $grade)
    {
        $this->nim = $nim;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
        $this->hasilUjian = $hasilUjian;
        $this->grade = $grade;
    }

    function hasil($hasilUjian)
    {
        if ($nilai > 90) {
            echo "Sangat Baik";
        } elseif ($nilai > 75) {
            echo "Baik";
        } elseif ($nilai > 65) {
            echo "Kurang";
        } else {
            echo "Tidak wajar";
        }
    }

    function grade($grade)
    {
        if ($nilai >= 70) {
            echo "LULUS";
        } elseif ($nilai > 70) {
            echo "TIDAK LULUS";
        }
    }
}

$hasil = new nilaiUjian();
echo "<h4>Berikut Hasil Ujian Anda!!!</h4>";
echo "NIM: " . $hasil->nim;
echo "<br>";
echo "Mata Kuliah: " . $hasil->mataKuliah;
echo "<br>";
echo "Nilai: " . $hasil->nilai;
echo "<br>";
echo "Hasil Ujian: " . $hasil->hasilUjian;
echo "<br>";
echo "GRADE: " . $hasil->grade;
echo "<br>";


?>  