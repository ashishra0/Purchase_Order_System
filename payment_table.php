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

$id = $_POST['payment_id'];
$payment_date = $_POST['payment_date'];
$i_id = $_POST['i_id'];
$vendor_id = $_POST['vendor_id'];
$po_id = $_POST['po_id'];
$mode = $_POST['member'];
$c_no = $_POST['c_no'];
$c_date = $_POST['c_date'];
$b_name = $_POST['b_name'];
$amt = $_POST['amt'];


$sql = "INSERT INTO payment VALUES ('$id','$payment_date','$vendor_id','$i_id', '$po_id','$mode','$amt','$b_name','$c_no','$c_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Payment Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>