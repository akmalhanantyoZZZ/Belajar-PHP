<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    // Challenge Mini 2: Bonus Es Teh Gratis
    $nama_pelanggan = "Budi";
    $total_pembelian = 25000;
    $min_bonus = 20000;
    $total_format = number_format($total_pembelian, 0, ',', '.');

    echo "<p>Halo $nama_pelanggan, total nota kamu adalah $total_format.</p>";

    if ($total_pembelian >= $min_bonus) {
        echo "<p>Selamat! Kamu berhak mendapatkan 1 Es Teh Manis Gratis!</p>";
    }else {
        echo "<p>Terimakasih sudah berbelanja di tempat kami.</p>";
    }
    ?>
</body>
</html>