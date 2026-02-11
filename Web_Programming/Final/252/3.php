<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "sundarban";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

echo "<h3>Connected Successfully</h3>";

// 1. Total revenue per category
$sql1 = "SELECT CategoryName, SUM(Revenue) AS TotalRevenue
         FROM sales_data
         GROUP BY CategoryName";
$result1 = $conn->query($sql1);

echo "<h3>Total Revenue Per Category</h3>";
while ($row = $result1->fetch_assoc()) {
    echo $row['CategoryName'] . " : " . $row['TotalRevenue'] . "<br>";
}

// 2. Update low performing categories
$sql2 = "UPDATE sales_data
         SET CategoryName='Low Performing'
         WHERE Revenue < 40000";
$conn->query($sql2);
echo "<h3>Low Performing Categories Updated</h3>";

// 3. Bonus revenue for high earning products
$sql3 = "UPDATE sales_data
         SET Revenue = Revenue * 1.1
         WHERE Revenue > 70000";
$conn->query($sql3);
echo "<h3>Bonus Revenue Added</h3>";

// 4. Label products based on average revenue in their category
$sqlCat = "SELECT DISTINCT CategoryName FROM sales_data";
$categories = $conn->query($sqlCat);

echo "<h3>Product Labels</h3>";
while ($cat = $categories->fetch_assoc()) {
    $categoryName = $cat['CategoryName'];

    // Average revenue of this category
    $sqlAvg = "SELECT AVG(Revenue) AS AvgRevenue
               FROM sales_data
               WHERE CategoryName='$categoryName'";
    $avgResult = $conn->query($sqlAvg);
    $avgRow = $avgResult->fetch_assoc();
    $avgRevenue = $avgRow['AvgRevenue'];

    // Products in this category
    $sqlProducts = "SELECT ProductName, Revenue
                    FROM sales_data
                    WHERE CategoryName='$categoryName'";
    $products = $conn->query($sqlProducts);

    while ($prod = $products->fetch_assoc()) {
        $label = ($prod['Revenue'] > $avgRevenue) ? "Top Seller" : "Regular Seller";
        echo $prod['ProductName'] . " (" . $categoryName . ") : " . $label . "<br>";
    }
}

$conn->close();
