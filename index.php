<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    // Challenge Mini 3: Sistem Diskon Restoran Bertingkat
    $nama_pemesan = "Dini";
    $harga_per_porsi = 30000;
    $jumlah_porsi = 4;
    $total_belanja = $harga_per_porsi * $jumlah_porsi;
    $total_format = number_format($total_belanja, 0, ',', '.');

    echo "<p>Halo $nama_pemesan, kamu memesan $jumlah_porsi porsi dengan total Rp$total_format</p>";

    if ($total_belanja >= 100000) {
        echo "<p>Selamat! Kamu mendapatkan Diskon Super sebesar Rp20.000</p>";
    }elseif ($total_belanja >= 50000) {
        echo "<p>Selamat! Kamu mendapatkan Diskon Hemat sebesar Rp 10.000!</p>";
    }else {
        echo "<p>Maaf, total belanjaan kamu belum mencapai syarat diskon.</p>";
    }
    ?>
</body>
</html>