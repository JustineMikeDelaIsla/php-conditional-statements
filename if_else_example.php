<!DOCTYPE html>
<html>
<head>
    <title>If Else Statement Example</title>
</head>
<body>
    <h2>Checking Jeepney Fare</h2>

<?php
    $distanceKm = 6;

    if ($distanceKm <= 4) {
        echo "<p>Fare is 13 pesos (minimum fare).</p>";
    } else {
        echo "<p>Fare is more than 13 pesos, additional charge per km.</p>";
    }
?>

</body>
</html>
