<!DOCTYPE html>
<html>

<head>
    <title>Movie Night Calculator</title>
</head>

<body>

    <form method="post">
        Total Attendees: <input type="number" name="a"><br><br>
        Seats per Screen: <input type="number" name="s"><br><br>
        Ticket Price: <input type="number" name="p"><br><br>
        <input type="submit" name="go" value="Calculate">
    </form>

    <?php
    function calcMovie($a, $s, $p)
    {
        $screens = ceil($a / $s);
        $totalSeats = $screens * $s;
        $empty = $totalSeats - $a;
        $waste = $empty * $p;

        echo "<h3>Movie Night Results</h3>";
        echo "Total Screens: " . $screens . "<br>";
        echo "Empty Seats: " . $empty . "<br>";
        echo "Wasted Money (BDT): " . $waste . "<br>";
    }

    if (isset($_POST['go'])) {
        calcMovie($_POST['a'], $_POST['s'], $_POST['p']);
    }
    ?>

</body>

</html>