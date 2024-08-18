<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;

}
function Fibonacci($jumlah)
{
    if ($jumlah == 0)
        return 0;
    else if ($jumlah == 1)
        return 1;
    else
        return (Fibonacci($jumlah - 1) + Fibonacci($jumlah - 2));
}

for ($counter = 0; $counter < $jumlah; $counter++) {
    echo Fibonacci($counter), ' ';
}
