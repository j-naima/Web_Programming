<?php
$server = "localhost";
$user   = "root";
$pass   = "";
$db     = "uiuweb_final";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
       die("Connection Failed");
}

echo "<h3>Connected Successfully</h3>";

$q1 = "SELECT LetterGrade, COUNT(*) total
       FROM student_final
       GROUP BY LetterGrade";

$r1 = $conn->query($q1);

echo "<h3>Students Per Grade</h3>";
while ($row = $r1->fetch_assoc()) {
       echo $row['LetterGrade'] . " : " . $row['total'] . "<br>";
}


$q2 = "UPDATE student_final
       SET LetterGrade='C'
       WHERE Grade<75 AND LetterGrade!='D'";
$conn->query($q2);

echo "<h3>Letter Grade Updated</h3>";


$q3 = "UPDATE student_final
       SET Grade = Grade + 5
       WHERE Grade>80 AND Grade<=85";
$conn->query($q3);

echo "<h3>Bonus Marks Added</h3>";


$q4 = "SELECT CourseTitle, COUNT(*) cnt
       FROM student_final
       GROUP BY CourseTitle
       ORDER BY cnt DESC";

$r4 = $conn->query($q4);

echo "<h3>Course Student Count</h3>";
while ($row = $r4->fetch_assoc()) {
       echo $row['CourseTitle'] . " : " . $row['cnt'] . "<br>";
}

$conn->close();
