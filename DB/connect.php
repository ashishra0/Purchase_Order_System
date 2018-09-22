<?php

$connection=mysqli_connect("localhost","test","test");
if(!$connection) {
  die("Database Connection Failed". mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'itbv_purchase_order_development');
if (!$select_db) {
  die("Database Couldnt Be Selected" . mysqli_error($connection));
}
?>