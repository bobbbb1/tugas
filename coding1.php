<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Amplifikasi</title>
</head>
<body>
    <h1>Kalkulator Amplifikasi</h1>
    <form method="post" action="hitung_amplifikasi.php">
        <label for="input_signal">Input Signal (Vin):</label>
        <input type="text" name="input_signal" id="input_signal" required>
        <br>
        <label for="output_signal">Output Signal (Vout):</label>
        <input type="text" name="output_signal" id="output_signal" required>
        <br>
        <button type="submit">Hitung Amplifikasi</button>
    </form>
</body>
</html>
