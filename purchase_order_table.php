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

$po_id = $_POST['po_id'];
$po_date = $_POST['po_date'];
$q_id = $_POST['q_id'];
$q_date = $_POST['q_date'];
$vendor_id = $_POST['vendor_id'];
$total_amt = $_POST['total_amt'];
$del_period = $_POST['del_period'];
$credit_period = $_POST['credit_period']; 
$ins_by = $_POST['ins_by'];
$del_mode = $_POST['del_mode'];


$product1 = $_POST['product1'];
$qty1 = $_POST['qty1'];
$uom1 = $_POST['uom1'];
$rate1 = $_POST['rate1'];
$amt1 =  $_POST['amt1'];
$gst1 =  $_POST['gst1'];
$gstamt1 =  $_POST['gstamt1'];
$date1 = $_POST['date1'];

$product2 = $_POST['product2'];
$qty2 = $_POST['qty2'];
$uom2 = $_POST['uom2'];
$rat2= $_POST['rate2'];
$amt2 =  $_POST['amt2'];
$gst2 =  $_POST['gst2'];
$gstamt2 =  $_POST['gstamt2'];
$date2 = $_POST['date2'];

$product3 = $_POST['product3'];
$qty3 = $_POST['qty3'];
$uom3 = $_POST['uom3'];
$rate3 = $_POST['raet3'];
$amt3 =  $_POST['amt3'];
$gst3 =  $_POST['gst3'];
$gstamt3 =  $_POST['gstamt3'];
$date3 = $_POST['date3'];




$sql = "INSERT INTO purchase_order VALUES ('$po_id', '$po_date', '$q_id', '$q_date', '$vendor_id', '$credit_period','$total_amt','$del_period','$ins_by','$del_mode')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in PO Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 1
$sql = "INSERT INTO purchase_order_product VALUES ('$po_id', '$product1', '$qty1', '$uom1', '$rate1', '$amt1', '$gst1', '$gstamt1','$date1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in PO_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 2
$sql = "INSERT INTO purchase_order_product VALUES ('$po_id', '$product2', '$qty2', '$uom2', '$rate2', '$amt2', '$gst2', '$gstamt2','$date2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in PO_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 3
$sql = "INSERT INTO purchase_order_product VALUES ('$po_id', '$product3', '$qty3', '$uom3', '$rate3', '$amt3', '$gst3', '$gstamt3','$date3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in PO_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>