<!DOCTYPE html>
<html>
<head>
    <title>Switch Statement Example</title>
</head>
<body>
    <h2>Checking Day of the Week</h2>

<?php
    $day = "Friday";

    switch ($day) {
        case "Monday":
            echo "<p>Start of the school week.</p>";
            break;
        case "Friday":
            echo "<p>Last day of classes for the week.</p>";
            break;
        case "Saturday":
        case "Sunday":
            echo "<p>It is weekend, no classes.</p>";
            break;
        default:
            echo "<p>Regular school day.</p>";
            break;
    }
?>

</body>
</html>
