<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Rejection Note</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
		<style>
			.is-margin {
				margin: 2px;
			}
			.brand {
        color: #000;
        margin: 1px;
			}
		</style>
	</head>

	<section class="section">
      <nav class="navbar is-light is-fixed-top">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
              <i class="fas fa-shopping-bag"></i>
              <span class="brand">Purchase Order System</span>
          </a>
          <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="navbar-start">
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" href=#>
              <span class="brand">Select System</span>
            </a>
            <div class="navbar-dropdown is-boxed">
              <a class="navbar-item" href="quotation.html">
                Quotation
              </a>
              <a class="navbar-item" href="payment.html">
                Payment
              </a>
              <a class="navbar-item" href="delivery_challan.html">
                Delivery Challan
              </a>
              <a class="navbar-item" href="material_rejection_note.html">
                Material Rejection Note
              </a>
              <a class="navbar-item" href="purchase_order.html">
                Purchase Order
              </a>
              <a class="navbar-item" href="enquiry.html">
                Enquiry
              </a>
              <a class="navbar-item" href="purchase_requistion.html">
                Purchase Requistion
              </a>
              <a class="navbar-item" href="invoice.html">
                  Invoice
              </a>
            </div>
          </div>
        </div>
        <div id="navbarExampleTransparentExample" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item" href=#>
                <i class="fas fa-home"></i>
                <span class="brand">home</span>
            </a>
          </div>
        </div>
    </section>

  <body>
		<section class="hero is-primary is-mobile">
			<div class="hero-body is-mobile" align="center">
				<h1 class="title">
					Material Rejection Note
				</h1>
				<p class="subtitle">
					Purchase order system
				</p>
			</div>
    </section>
		<form action="mrn.php" method="POST">
		<section class="section is-mobile">
			<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">MRN ID:</label>
											<div class="control">
												<input class="input" type="text" name="mrn_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">MRN Date:</label>
										<div class="control">
											<input class="input" type="text" name="mrn_date">
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">DC ID:</label>
											<div class="control">
												<input class="input" type="text" name="dc_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">DC Date:</label>
										<div class="control">
											<input class="input" type="text" name="dc_date">
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Vendor ID:</label>
											<div class="control">
												<input class="input" type="text" name="vendor_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Vendor Name:</label>
										<div class="control">
											<input class="input" type="text" name="vendor_name">
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
			</div>
      <hr>
			<div class="columns is-mobile">
				<div class="column">
					<div class="level-item">
						<table class="table is-striped is-bordered">
							<thead>
								<tr>
									<th>Product ID</th>
									<th>Qty Delivered</th>
									<th>Qty Accepted</th>
									<th>Qty Rejected</th>
									<th>UOM</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th><input type="text" name="product1"></th>
									<th><input type="text" name="del1"></th>
									<th><input type="text" name="acc1"></th>
									<th><input type="text" name="rej1"></th>
									<th><input type="text" name="uom1"></th>
								</tr>
								<tr>
									<th><input type="text" name="product2"></th>
								  <th><input type="text" name="del2"></th>
									<th><input type="text" name="acc2"></th>
									<th><input type="text" name="rej2"></th>
									<th><input type="text" name="uom2"></th>
								</tr>
									<tr>
									<th><input type="text" name="product3"></th>
									<th><input type="text" name="del3"></th>
									<th><input type="text" name="acc3"></th>
									<th><input type="text" name="rej3"></th>
									<th><input type="text" name="uom3"></th>
									</tr>
									</tbody>
						</table>
					</div>
				</div>
      </div>
      <hr>
			<div class="columns is-mobile">
				<div class="column">
					<div class="level-item">
							<input type="submit" value="New" name="new" class="button is-primary is-rounded is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" value="Edit" name="edit" class="button is-primary is-rounded is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" value="Search" name="search" class="button is-primary is-rounded is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" value="Save" name="save" class="button is-primary is-rounded is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" value="Cancel" name="cancel" class="button is-warning is-rounded is-outlined">
					</div>
				</div>
			</div>
		</section>
	</form>	
		<hr>
	</body>
	<?php include('footer.php');?>
</html>