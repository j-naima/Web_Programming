<!DOCTYPE html>
<html>

<head>
    <title>Pizza Calculator</title>
</head>

<body>

    <form method="post">
        Number of Students: <input type="number" name="s"><br><br>
        Slices per Student: <input type="number" name="ss"><br><br>
        Slices per Pizza: <input type="number" name="sp"><br><br>
        <input type="submit" name="go" value="Calculate">
    </form>

    <?php
    function pizza($s, $ss, $sp)
    {

        $need = $s * $ss;

        $pizza = ceil($need / $sp);

        $extra = ($pizza * $sp) - $need;

        $price = 1050 / $sp;

        $loss = $extra * $price;

        echo "Total Pizzas: " . $pizza . "<br>";
        echo "Leftover Slices: " . $extra . "<br>";
        echo "Wasted Money (BDT): " . $loss . "<br>";
    }

    if (isset($_POST['go'])) {
        pizza($_POST['s'], $_POST['ss'], $_POST['sp']);
    }
    ?>

</body>

</html>