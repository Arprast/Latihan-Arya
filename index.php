<!DOCTYPE html>
<head>
    <title>Mari Berhitung</title>
    <style>
        label {
            text-align: center;
        }
    </style>
    <?php 
        $Angka1 = $_POST['Angka1'];
        $Angka2 = $_POST['Angka2'];
        $operasi = $_POST['Operasi'];

        if ($operasi == "+") {
            $Hasil = $Angka1 + $Angka2;
        } elseif ($operasi == "-") {
            $Hasil = $Angka1 - $Angka2;
        } elseif ($operasi == "*") {
            $Hasil = $Angka1 * $Angka2;
        } elseif ($operasi == "/") {
            $Hasil = $Angka1 / $Angka2;
        }
    ?>
</head>
<body>
    <h1 style="text-align: center;">Aplikasi Kalkulator</h1>
    <hr style="border: 2px solid black;">
    <center>
        <form action="index.php" method="POST">
        <label for="Angka1"> Angka 1</label>
        <br>
        <input type="number" name="Angka1">
        <br>
        <br>
        <label for="Operasi"> Operasi</label>
        <br>
        <select name="Operasi" id="">
            <option selected disabled value="">Pilih Operasi</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">x</option>
        </select>
        <br>
        <br>
        <label for="Angka2"> Angka 2</label>
        <br>
        <input type="number" name="Angka2">
        <br>
        <br>
        <button class="cancel">Cancel</button>
        <button class="reset">Hapus</button>
        <button type="submit">Hitung</button>
        </form>
        <br>
        <br>
        <hr style="border: 2px solid black;">
        <p>Hasil : <?php echo($Hasil);?> </p>
    </center>
    <!-- Nulis JS -->
    
</body>
</html>