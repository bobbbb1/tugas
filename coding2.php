<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Amplifikasi</title>
</head>
<body>
    <h1>Kalkulator Amplifikasi</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_resistor = $_POST["resistor"];
        $input_hambatan = $_POST["hambatan"];
        
        // Rumus Amplifikasi
        $amplifikasi = $input_resistor / $input_hambatan;

        echo "Hasil Amplifikasi: " . $amplifikasi;
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="resistor">Nilai Resistor (Rf):</label>
        <input type="number" name="resistor" step="0.01" required><br><br>

        <label for="hambatan">Nilai Hambatan (Ri):</label>
        <input type="number" name="hambatan" step="0.01" required><br><br>

        <input type="submit" value="Hitung Amplifikasi">
    </form>
</body>
</html>
