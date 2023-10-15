<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $vin = $_POST['vin'];
    $rin = $_POST['rin'];
    $vout = $_POST['vout'];
    $rout = $_POST['rout'];

    $gain = $vout / $vin;
    $input_current = $vin / $rin;
    $output_current = $vout / $rout;
    $input_power = ($vin ** 2) / $rin;
    $output_power = ($vout ** 2) / $rout;

    echo "Gain: $gain<br>";
    echo "Input Current: $input_current<br>";
    echo "Output Current: $output_current<br>";
    echo "Input Power: $input_power<br>";
    echo "Output Power: $output_power<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Amplifier Calculator</title>
</head>
<body>
    <form method="post" action="amplifier.php">
        Vin: <input type="text" name="vin"><br>
        Rin: <input type="text" name="rin"><br>
        Vout: <input type="text" name="vout"><br>
        Rout: <input type="text" name="rout"><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
