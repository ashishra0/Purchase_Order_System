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

$mrn_id = $_POST['mrn_id'];
$mrn_date = $_POST['mrn_date'];
$dc_id = $_POST['dc_id'];
$dc_date = $_POST['dc_date'];
$vendor_id = $_POST['vendor_id'];
$vendor_name= $_POST['vendor_name'];

$product1 = $_POST['product1'];
$name1 = $_POST['name1'];
$del1 = $_POST['del1'];
$acc1 = $_POST['acc1'];
$rej1 = $_POST['rej1'];
$uom1 = $_POST['uom1'];

$product2 = $_POST['product2'];
$name2 = $_POST['name2'];
$del2 = $_POST['del2'];
$acc2 = $_POST['acc2'];
$rej2 = $_POST['rej2'];
$uom2 = $_POST['uom2'];

$product3 = $_POST['product3'];
$name3 = $_POST['name3'];
$del3 = $_POST['del3'];
$acc3 = $_POST['acc3'];
$rej3 = $_POST['rej3'];
$uom3 = $_POST['uom3'];


$sql = "INSERT INTO material_rejection_note VALUES ('$mrn_id', '$mrn_date', '$dc_id', '$dc_date', '$vendor_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in MRN Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 1
$sql = "INSERT INTO material_rejection_note_product VALUES ('$mrn_id', '$product1', '$del1', '$acc1', '$rej1', '$uom1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in MRN_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Product 2
$sql = "INSERT INTO material_rejection_note_product VALUES ('$mrn_id', '$product2', '$del2', '$acc2', '$rej2', '$uom2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in MRN_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Product 3
$sql = "INSERT INTO material_rejection_note_product VALUES ('$mrn_id', '$product3', '$del3', '$acc3', '$rej3', '$uom3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in MRN_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>