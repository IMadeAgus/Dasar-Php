<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : 0;
    $angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : 0;

    // Melakukan penjumlahan
    $hasil = $angka1 + $angka2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penjumlahan</title>
</head>
<body>
    <h2>Hasil Penjumlahan</h2>
    <p>Angka 1: <?php echo htmlspecialchars($angka1); ?></p>
    <p>Angka 2: <?php echo htmlspecialchars($angka2); ?></p>
    <p>Hasil: <?php echo htmlspecialchars($hasil); ?></p>
    <br>
    <a href="index.html">Hitung Lagi</a>
</body>
</html>