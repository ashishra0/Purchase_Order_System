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

$enquiry_id = $_POST['enquiry_id'];
$enquiry_date = $_POST['enquiry_date'];

$product1 = $_POST['product1'];
$qty1 = $_POST['qty1'];

$product2 = $_POST['product2'];
$qty2 = $_POST['qty2'];

$product3 = $_POST['product3'];
$qty3 = $_POST['qty3'];

$sql = "INSERT INTO enquiry VALUES ('$enquiry_id', '$enquiry_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Enquiry Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 1
$sql = "INSERT INTO enquiry_product VALUES ('$enquiry_id', '$product1', '$qty1')";
echo "<br>";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Enquiry_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 2
$sql = "INSERT INTO enquiry_product VALUES ('$enquiry_id', '$product2', '$qty2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Enquiry_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 3
$sql = "INSERT INTO enquiry_product VALUES ('$enquiry_id', '$product3', '$qty3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Enquiry_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>