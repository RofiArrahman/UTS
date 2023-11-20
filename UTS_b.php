<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Belanja</title>
    <style>
        /* Tambahkan styling CSS sesuai kebutuhan */
        body {
            font-family: Arial, sans-serif;
        }
        .struk {
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
            margin: 20px;
        }
    </style>
</head>
<body>

<?php

$pepsodent = 7 * 10000;
$rinso = 5 * 20000;
$downy = 2 * 22000;
$total = $pepsodent + $rinso + $downy;

// Tambahkan diskon jika total pembelian mencapai 200.000
if ($total >= 200000) {
    $diskon = 0.20; // Diskon 20%
    $diskon_amount = $total * $diskon;
    $total -= $diskon_amount;
} else {
    $diskon_amount = 0;
}

$struk = [
    "Tanggal Transaksi :" => ["20 November 2023"],
    "Produk : " => [""],
    "Pepsodent(7x10.000) :" => ["$pepsodent"],
    "Rinso(5x20.000) : " => ["$rinso"],
    "Downy(2x12.000) : " => ["$downy"],
    "Total : " => ["$total"],
    "Diskon 20% : " => ["-$diskon_amount"], // Tambahkan baris ini untuk menampilkan diskon
    "Total Pembayaran : " => ["$total"]
];

echo "<div class='struk'>";
echo "<h2>Struk Belanja</h2>";
echo "<ul>";

foreach ($struk as $belanja => $str) {
    // Output key (indeks utama dari array)
    echo "<li>$belanja</li>";

    // Cek jika nilai dari indeks utama adalah array, jika ya, maka lakukan loop
    if (is_array($str)) {
        // Output elemen array di dalamnya
        foreach ($str as $element) {
            echo "$element";
        }
    }
}

echo "</ul>";
echo "</div>";

?>

</body>
</html>
