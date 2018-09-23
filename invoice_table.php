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

$i_id = $_POST['i_id'];
$i_date = $_POST['i_date'];
$dc_id = $_POST['dc_id'];
$dc_date = $_POST['dc_date'];
$po_id = $_POST['po_id'];
$po_date =  $_POST['po_date'];
$vendor_id =  $_POST['vendor_id'];
$c_period =  $_POST['c_period'];
$tinv_amt =  $_POST['tinv_amt'];
$amt_paid =  $_POST['amt_paid'];
$out_amt =  $_POST['out_amt'];



$product1 = $_POST['product1'];
$qty1 = $_POST['qty1'];
$uom1 = $_POST['uom1'];
$rate1 = $_POST['rate1'];
$amt1 =  $_POST['amt1'];
$gst1 =  $_POST['gst1'];
$gstamt1 =  $_POST['gstamt1'];
$totamt1 = $_POST['totamt1'];


$product2 = $_POST['product2'];
$qty2 = $_POST['qty2'];
$uom2 = $_POST['uom2'];
$rate2= $_POST['rate2'];
$amt2 =  $_POST['amt2'];
$gst2 =  $_POST['gst2'];
$gstamt2 =  $_POST['gstamt2'];
$totamt2 = $_POST['totamt2'];


$product3 = $_POST['product3'];
$qty3 = $_POST['qty3'];
$uom3 = $_POST['uom3'];
$rate3 = $_POST['raet3'];
$amt3 =  $_POST['amt3'];
$gst3 =  $_POST['gst3'];
$gstamt3 =  $_POST['gstamt3'];
$totamt3 = $_POST['totamt3'];





$sql = "INSERT INTO invoice VALUES ('$i_id', '$i_date', '$dc_id','$dc_date','$po_id','$po_date','$vendor_id', '$c_period','$tinv_amt','$amt_paid','$out_amt')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Invoice Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 1
$sql = "INSERT INTO invoice_product VALUES ('$i_id', '$product1', '$qty1', '$uom1', '$rate1','$amt1', '$gst1', '$gstamt1','$totamt1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Invoice_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 2
$sql = "INSERT INTO invoice_product VALUES ('$i_id', '$product2', '$qty2', '$uom2', '$rate2','$amt2', '$gst2', '$gstamt2','$totamt2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Invoice_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// product 3
$sql = "INSERT INTO invoice_product VALUES ('$i_id', '$product3', '$qty3', '$uom3', '$rate3','$amt3', '$gst3', '$gstamt3','$totamt3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Invoice_Product Table <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>