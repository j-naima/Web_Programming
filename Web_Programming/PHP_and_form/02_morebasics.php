<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
*{
    margin : 0;
    padding : 0;
    box-sizing : border-box;

}
.container{
    max-width : 80%;
    background-color : lightgrey;
    margin: auto;
    padding: 20px;
}
</style>
<body>
    <div class="container">
        <h1> Learn about PHP </h1>
        <P>Party information </p>
    <?php
    $age = 7;

    if($age > 18){
        echo "You can go to party";
    }
    else if($age == 7){
        echo "You are only 7 years old";
    }
    else{
        echo "You can not go to party";
    }
    echo"<br>";
    
    // array
    $languages = array("phython","c++","nodejs");
    // echo count($languages);
    // echo "<br>";
    // echo $languages[1];

    //loops in PHP
    $a=0;
    while( $a <= 10){
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }
    //iterating arrays in php using while loop
    $a=0;
    while($a < count($languages)){
        echo "<br>Languages of programmimg: ";
        echo $languages[$a];
        $a++;
    }

    //do while loop
    $a=10;
    do{
        echo "<br>do while will print 1st one then condition check: ";
        echo $a;
        $a++;
    }while($a < 10);

    //for loop 
     for($a=0; $a < 10; $a++){
        echo "<br>Value of for loop a is: ";
        echo $a;
     }
     foreach($languages as $value){
        echo "<br>This is from foreach loop: ";
        echo $value;
     }
    

     //Function in php
     function printnumber(){
        echo "<br>Number";
     }
    printnumber();
    printnumber();
    printnumber();

   
    function print_number($number) {
        echo "<br>input to output func: ";
        echo $number;
    }
    
    print_number(34);
    print_number(50);
    print_number(44);
    ?>
    </div>
</body>
</html>




 