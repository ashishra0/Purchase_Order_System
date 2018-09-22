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

$quotation_id = $_POST['quotation_id'];
$quotation_date = $_POST['quotation_date'];
$enquiry_id = $_POST['enquiry_id'];
$enquiry_date = $_POST['enquiry_date'];
$vendor_id = $_POST['vendor_id'];
$vendor_name = $_POST['vendor_name'];
$amount = $_POST['amount'];


$sql = "INSERT INTO quotation VALUES ($quotation_id, $enquiry_id, $vendor_id, '$quotation_date', $amount)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Quotation Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$product_id = $_POST['product1'];
$product_name = $_POST['product_name1'];
$qty = $_POST['quantity1'];
$rate = $_POST['rate1'];
$uom = $_POST['uom1'];
$tax = $_POST['tax1'];
$tax_amount = $_POST['tax_amount1'];
$amount = $_POST['amount1'];


$sql = "INSERT INTO quotation_product VALUES ($quotation_id, $product_id, $qty, $rate, '$uom', $tax, $tax_amount, $amount)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Quotation_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>