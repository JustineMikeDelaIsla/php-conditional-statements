<!DOCTYPE html>
<html>
<head>
    <title>If...Elseif...Else Statement - Pirate Treasure Map</title>
</head>
<body>
    <h2>🏴‍☠️ Pirate Treasure Map Danger Meter</h2>

<?php
    $krakenSightings = 3; // number of kraken sightings reported near the treasure island

    if ($krakenSightings >= 5) {
        echo "<p>DANGER LEVEL: LEGENDARY 💀 — Turn back now, ye scallywag! The Kraken rules these waters.</p>";
    } elseif ($krakenSightings >= 3) {
        echo "<p>DANGER LEVEL: RISKY ⚔️ — Arm the cannons and sail with caution.</p>";
    } elseif ($krakenSightings >= 1) {
        echo "<p>DANGER LEVEL: MILD 🦑 — Just a few tentacle rumors, should be smooth sailing.</p>";
    } else {
        echo "<p>DANGER LEVEL: SAFE ⚓ — Calm seas ahead, the treasure be yours for the taking!</p>";
    }
?>

</body>
</html>
