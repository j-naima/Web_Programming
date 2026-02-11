<!DOCTYPE html>
<html>

<head>
    <title>UIU Tech Fest Budget</title>
</head>

<body>

    <form method="post">
        Attendees: <input type="number" name="a"><br><br>
        Cost Per Person: <input type="number" name="c"><br><br>
        Venue Capacity: <input type="number" name="v"><br><br>
        <input type="submit" name="go" value="Calculate">
    </form>

    <?php
    function calcVenue($a, $c, $v)
    {
        $venues = ceil($a / $v);
        $totalSeats = $venues * $v;
        $empty = $totalSeats - $a;
        $waste = $empty * $c;

        echo "Total Venues: " . $venues . "<br>";
        echo "Empty Seats: " . $empty . "<br>";
        echo "Wasted Money (BDT): " . $waste . "<br>";
    }

    if (isset($_POST['go'])) {
        calcVenue($_POST['a'], $_POST['c'], $_POST['v']);
    }
    ?>

</body>

</html>