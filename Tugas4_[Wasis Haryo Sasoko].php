<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Tugas4_[Wasis Haryo Sasoko].css">
    <title>Tugas 4</title>
</head>
<body>
    <form action="" method="post" class="form">
        <h1>Aplikasi Penghitung 2 Bilangan</h1>
        <div class="inputBilangan">
            <label for="bilangan1">Bilangan 1</label>
            <input type="text" name="bilangan1" value="<?php echo (isset($_POST['bilangan1']) ? $_POST['bilangan1'] : "") ?>" />
        </div>
        <div class="inputBilangan">
            <label for="bilangan2">Bilangan 2</label>
            <input type="text" name="bilangan2" value="<?php echo (isset($_POST['bilangan2']) ? $_POST['bilangan2'] : "") ?>" />
        </div>
        <input type="submit" value="Hitung" />
    </form>
    <?php if (isset($_POST['bilangan1'])) : ?>
        <?php
            function jumlah($a,$b) {
                return $a+$b;
            }
            function kurang($a,$b) {
                return $a-$b;
            }
            function kali($a,$b) {
                return $a*$b;
            }
            function bagi($a,$b) {
                return $a/$b;
            }
        ?>
        <div class="form">
            <h2>Hasil Perhitungan</h2>
            <div class="inputBilangan">
                <label for="bilangan1">Hasil Jumlah</label>
                <input type="text" value="<?php echo jumlah($_POST['bilangan1'], $_POST['bilangan2']) ?>" readonly />
            </div>
            <div class="inputBilangan">
                <label for="bilangan1">Hasil Kurang</label>
                <input type="text" value="<?php echo kurang($_POST['bilangan1'], $_POST['bilangan2']) ?>" readonly />
            </div>
            <div class="inputBilangan">
                <label for="bilangan1">Hasil Kali</label>
                <input type="text" value="<?php echo kali($_POST['bilangan1'], $_POST['bilangan2']) ?>" readonly />
            </div>
            <div class="inputBilangan">
                <label for="bilangan1">Hasil Bagi</label>
                <input type="text" value="<?php echo bagi($_POST['bilangan1'], $_POST['bilangan2']) ?>" readonly />
            </div>
        </div>
    <?php endif; ?>
</body>
</html>