<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String</title>
</head>
<body>
    <?php
    $str = "string is";
    echo $str;
    echo "<br>";
    $lenn = strlen($str);
    echo "Length of the string: ";
    echo $lenn;
    echo "<br>";
    echo "word count of string: ".str_word_count($str). "<br>Thank you";//word count
    echo "<br>Reverse string is: ".strrev($str). "<br>Thank you";//string reverse
    echo "<br>Search word from string: ".strpos($str,"is"). "<br>Thank you";
    echo "<br>The replaced string is: ".str_replace("is","was",$str). "<br>Thank you";

    ?>
</body>
</html>