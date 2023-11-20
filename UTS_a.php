<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS A</title>
</head>
<body>
<?php
    $pepsodent = 30*10000;
    $sunlight = 15*11000;
    $baygon = 10*16000;
    $dove = 20*22000;
    $rinso = 20*20000;
    $downy = 15*12000;
    $le_mineral = 25*5000;

    $barang = ["1"=>[".","Pepsodent","30","10000","$pepsodent"],
    "2"=>[".","Sunlight","15","11000",$sunlight],
    "3"=>[".","Baygon","10","16000",$baygon],
    "4"=>[".","Dove","20","22000",$dove],
    "5"=>[".","Rinso","20","20000",$rinso],
    "6"=>[".","Downy","15","12000",$downy],
    "7"=>[".","Le Mineral","25","5000",$le_mineral]];

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

    foreach($barang as $tabel => $harga){
        echo "<tr>";
        echo "<td>$tabel</td";
        foreach($harga as $rp){
            echo "<td>$rp</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>
    
</body>
<style>
    table{
        border-collapse: collapse;
        width: 400px;
        height: 400px;
        border-radius: 2px;
        
    }
    th,tr{
        text-align: center;
    }
</style>
</html>