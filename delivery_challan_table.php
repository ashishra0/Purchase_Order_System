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

$dc_id = $_POST['dc_id'];
$dc_date = $_POST['dc_date'];
$po_id = $_POST['po_id'];
$po_date = $_POST['po_date'];


$product1 = $_POST['product1'];
$qty1 = $_POST['qty1'];
$uom1 = $_POST['uom1'];


$product2 = $_POST['product2'];
$qty2 = $_POST['qty2'];
$uom2 = $_POST['uom2'];


$product3 = $_POST['product3'];
$qty3 = $_POST['qty3'];
$uom3 = $_POST['uom3'];





$sql = "INSERT INTO delivery_challan VALUES ('$dc_id', '$po_id','$dc_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in DC Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 1
$sql = "INSERT INTO delivery_challan_product VALUES ('$dc_id', '$product1', '$qty1', '$uom1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in DC_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 2
$sql = "INSERT INTO delivery_challan_product VALUES ('$dc_id', '$product2', '$qty2', '$uom2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in DC_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 3
$sql = "INSERT INTO delivery_challan_product VALUES ('$dc_id', '$product3', '$qty3', '$uom3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in DC_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>