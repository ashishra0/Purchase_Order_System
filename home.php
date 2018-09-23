<?php
require('sessions.php');
?>

<html lang="en">
<head>
  <?php include ('resources.html');?>
  <title>Dashboard</title>
</head>
<body>
    <section class="hero is-primary is-mobile">
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="title">
              Purchase Order System
            </h1>
            <h2 class="subtitle">
              <i><?php  echo 'Welcome, '.$username ?></i>
            </h2>
          </div>
        </div>
      </section>
    <!-- <div class="notification is-primary">
      <button class="delete"></button>
      Welcome
      adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>
    </div> -->
  <section class="section">
    <aside class="menu">
        <p class="menu-label">
          General
        </p>
        <ul class="menu-list">
          <li><a href="localhost:8888/phpMyAdmin" target="_blank">PhpMyAdmin</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <p class="menu-label">
          Screens
        </p>
        <ul class="menu-list">
          <li><a href="purchase_requistion.php" target="_blank">Purchase Requistion</a></li>
          <li><a href="enquiry.php" target="_blank">Enquiry</a></li>
          <li><a href="quotation.php" target="_blank">Quotation</a></li>
          <li><a href="purchase_order.php" target="_blank">Purchase Order</a></li>
          <li><a href="delivery_challan.php" target="_blank">Delivery Challan</a></li>
          <li><a href="material_rejection_note.php" target="_blank">Material Rejection Note</a></li>
          <li><a href="invoice.php" target="_blank">Invoice</a></li>
          <li><a href="payment.php" target="_blank">Payment</a></li>
        </ul>
        <p class="menu-label">
          Reports
        </p>
        <ul class="menu-list">
          <li><a href="Rejection_Analysis_Report.php">Vendorwise Rejection Analysis Report</a></li>
          <li><a>Report 2</a></li>
          <li><a>Report 3</a></li>
        </ul>
      </aside>
  </section>
  <?php include('footer.php');?>
</body>
</html>