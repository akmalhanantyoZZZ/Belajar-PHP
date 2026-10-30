<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
     <?php
    // Variabel & kalimat
    $nama = "Lina";
    $makanan_favorit = "Kue";
    $hobi = "shopping";
    $saldo_rekening = 700000;
    $target_rekening = 100000000;

    echo "<p>$nama, suka sekali dengan yang nama nya $makanan_favorit, karena rasanya manis dan terdapat banyak topping, $nama juga memiliki hobi unik, yaitu $hobi terutama di hari weekend</p>";
    echo "<p>Dan tak hanya itu saja, meskipun $nama suka $hobi, dia memamng memiliki saldo yang cukup banyak, yaitu sekitar $saldo_rekening</p>";

    if ($saldo_rekening <= $target_rekening) {
        echo "<p>$nama akan libur $hobi untuk menghemat saldo nya yang hanya sekitar $saldo_rekening</p>";
     }else {
        echo "<p>$lina akan melakukan hobi nya yaitu $hobi karena memiliki saldo lebih atau sama dengan $target rekening</p>";
     }
     ?>
</body>
</html>