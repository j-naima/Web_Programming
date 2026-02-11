<?php
$insert = false;
if(isset($_POST['name'])){
//set connection variables
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbbname = "trip";

//create a database connection
 $con = mysqli_connect($server, $username, $password, $dbbname);

 //check for connection success
 if(!$con){
    die("Connection to this database failed due to". mysqli_connect_error());
 }
//  else{
//     echo "Connection successful";
//  }

//collect post variables
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone']; 
$desc  = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
        VALUES ('$name', '$age', '$gender', '$email','$phone','$desc', 
        current_timestamp());";
// echo $sql;  

//Execute the query
if($con->query($sql) == true){
        // echo "Successfully inserted";

        //flag for successful insertion
        $insert = true;
}
else{
        echo "ERROR: $sql <br> $con->error";
}

//close the database connection
$con->close();

}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class ="container">
        <h2>Welcome to Travel form Jatrabari to Badda</h2>
        <P>Enter your details and submit the form</P>

        <?php
        if($insert == true){
        echo "<p class='submitmsg'>Thanks for submitting your form for the us trip</p>";
        }
        ?>

       <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="Age" id="Age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="20" rows="10" placeholder="Enter any other information"></textarea>
        <button class="btn">submit</button>
        
       </form>

    </div>
</body>
</html>