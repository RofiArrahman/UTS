<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS A</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            height: 400px;
        }
        th, td {
            text-align: center;
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$barang = [
    ["id" => 1, "nama" => "Pepsodent", "stok" => 30, "harga" => 10000],
    ["id" => 2, "nama" => "Sunlight", "stok" => 15, "harga" => 11000],
    ["id" => 3, "nama" => "Baygon", "stok" => 10, "harga" => 16000],
    ["id" => 4, "nama" => "Dove", "stok" => 20, "harga" => 22000],
    ["id" => 5, "nama" => "Rinso", "stok" => 20, "harga" => 20000],
    ["id" => 6, "nama" => "Downy", "stok" => 15, "harga" => 12000],
    ["id" => 7, "nama" => "Le Mineral", "stok" => 25, "harga" => 5000]
];

// Fungsi untuk menyortir array berdasarkan nama produk
usort($barang, function($a, $b) {
    return strcmp($a['nama'], $b['nama']);
});

echo "<table>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

foreach($barang as $produk) {
    $jumlah = $produk['stok'] * $produk['harga'];
    echo "<tr>";
    echo "<td>{$produk['id']}</td><td>{$produk['nama']}</td><td>{$produk['stok']}</td><td>{$produk['harga']}</td><td>$jumlah</td>";
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>
