<?php
$servername = "localhost";
$username = "test";
$password = "test";
$dbname = "itbv_purchase_order_development";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo "<br>";

$pr_id = $_POST['pr_id'];
$pr_date = $_POST['pr_date'];
$sp_name = $_POST['sp_name'];
$status=$_POST['status'];
$product1 = $_POST['product1'];
$qty1 = $_POST['qty1'];
$date1= $_POST['date1'];
$product2 = $_POST['product2'];
$qty2 = $_POST['qty2'];
$date2 = $_POST['date2'];
$product3 = $_POST['product3'];
$qty3 = $_POST['qty3'];
$date3 = $_POST['date3'];

$sql = "INSERT INTO purchase_requistion VALUES ('$pr_id', '$pr_date', '$sp_name','$status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in PR Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 1
$sql = "INSERT INTO purchase_requistion_product VALUES ('$pr_id', '$product1', '$qty1', '$date1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in PR_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 2
$sql = "INSERT INTO purchase_requistion_product VALUES ('$pr_id', '$product2', '$qty2', '$date2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in PR_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 3
$sql = "INSERT INTO purchase_requistion_product VALUES ('$pr_id', '$product3', '$qty3', '$date3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in PR_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>