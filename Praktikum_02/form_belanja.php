<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
    <form class="w-50 mt-3 m-5" method="POST" action="form_belanja.php">
        <h1>Belanja Online</h1>
        <hr>
        <div class="form-group">
            <label for="customer">Customer</label> 
            <input id="customer" name="customer" type="text" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label>Produk Pilihan</label> 
            <div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="fixie"> 
                <label for="produk_0" class="custom-control-label">Fixie</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="rb"> 
                <label for="produk_1" class="custom-control-label">Roadbike</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="mtb"> 
                <label for="produk_2" class="custom-control-label">MTB</label>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Beli</label> 
            <input id="jumlah" name="jumlah" type="text" required="required" class="form-control">
        </div> 
        <div class="form-group">
            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </body>
</html>
<?php
    if(isset($_POST['proses'])) {
        $customer = $_POST["customer"];
        $produk = $_POST["produk"];
        $jumlah = $_POST["jumlah"];
    

    $fixie = 7600000;
    $rb = 8000000;
    $mtb = 5500000;

    $totalHarga = 0;

    if($produk == "fixie") {
        $totalHarga = $fixie * $jumlah;
    } elseif($produk == "rb") {
        $totalHarga = $rb * $jumlah;
    } elseif($produk == "mtb") {
        $totalHarga = $mtb * $jumlah;
    }

    echo "<h5>Terima Kasih Telah Memesan Sepeda Kami!!!</h5>";
    echo "<p>NAMA : $customer</p>";
    echo "<p>Produk : $produk</p>";
    echo "<p>Jumlah : $jumlah</p>";
    echo "<p>Total Harga : $totalHarga</p>";
    }
?>