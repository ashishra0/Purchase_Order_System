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

$q_id = $_POST['q_id'];
$enquiry_id = $_POST['enquiry_id'];
$q_date = $_POST['q_date'];
$vendor_id = $_POST['vendor_id'];


$product1 = $_POST['product1'];
$qty1 = $_POST['qty1'];
$uom1 = $_POST['uom1'];
$rate1 = $_POST['rate1'];
$amt1 =  $_POST['amt1'];
$gst1 =  $_POST['gst1'];
$gstamt1 =  $_POST['gstamt1'];


$product2 = $_POST['product2'];
$qty2 = $_POST['qty2'];
$uom2 = $_POST['uom2'];
$rate2= $_POST['rate2'];
$amt2 =  $_POST['amt2'];
$gst2 =  $_POST['gst2'];
$gstamt2 =  $_POST['gstamt2'];


$product3 = $_POST['product3'];
$qty3 = $_POST['qty3'];
$uom3 = $_POST['uom3'];
$rate3 = $_POST['rate3'];
$amt3 =  $_POST['amt3'];
$gst3 =  $_POST['gst3'];
$gstamt3 =  $_POST['gstamt3'];


$sql = "INSERT INTO quotation VALUES ('$q_id', '$enquiry_id', '$vendor_id','$q_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in quotation Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 1
$sql = "INSERT INTO quotation_product VALUES ('$q_id', '$product1', '$qty1', '$rate1', '$uom1', '$gst1', '$gstamt1','$amt1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in quotation_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 2
$sql = "INSERT INTO quotation_product VALUES ('$q_id', '$product2', '$qty2', '$rate2', '$uom2', '$gst2', '$gstamt2', '$amt2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in quotation_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 3
$sql = "INSERT INTO quotation_product VALUES ('$q_id', '$product3', '$qty3', '$rate3', '$uom3', '$gst3', '$gstamt3','$amt3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in quotation_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Retrieve Data


?>