<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "uiutech_final";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed");
}

echo "<h3>Connected Successfully</h3>";

$sql1 = "SELECT PerformanceRating, COUNT(*) total
         FROM employee_final
         GROUP BY PerformanceRating";

$result1 = $conn->query($sql1);

echo "<h3>Employees Per Performance Rating</h3>";
while ($row = $result1->fetch_assoc()) {
    echo $row['PerformanceRating'] . " : " . $row['total'] . "<br>";
}


$sql2 = "UPDATE employee_final
         SET PerformanceRating='C'
         WHERE Salary<40000 AND PerformanceRating!='D'";
$conn->query($sql2);

echo "<h3>Performance Rating Update Done</h3>";


$sql3 = "UPDATE employee_final
         SET Salary = Salary + 5000
         WHERE Salary>50000 AND Salary<=55000";
$conn->query($sql3);

echo "<h3>Salary Bonus Added</h3>";


$sql4 = "SELECT DepartmentName, COUNT(*) cnt
         FROM employee_final
         GROUP BY DepartmentName
         ORDER BY cnt DESC";

$result4 = $conn->query($sql4);

echo "<h3>Department Employee Count</h3>";
while ($row = $result4->fetch_assoc()) {
    echo $row['DepartmentName'] . " : " . $row['cnt'] . "<br>";
}

$conn->close();
