<!DOCTYPE html>
<html>
  <head>
    <title>Purchase Order</title>
		<?php include ('resources.html');?>
	</head>
	<?php include ('navbar.html');?>
  <body>
		<section class="hero is-primary is-mobile">
			<div class="hero-body is-mobile" align="center">
				<h1 class="title">
					Purchase Order
				</h1>
				<p class="subtitle">
					Purchase order system
				</p>
			</div>
    </section>
		<form action="purchase_order_table.php" method="POST">
		<section class="section is-mobile">
			<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Purchase Order ID:</label>
											<div class="control">
												<input class="input" type="text" name="po_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Purchase Order Date:</label>
										<div class="control">
											<input class="input" type="text" name="po_date">
										</div>
									</div>
								</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Quotation ID:</label>
										<div class="control">
											<input class="input" type="text" name="q_id">
										</div>
									</div>
								</div>
								<div class="column">
										<div class="level-item has-text-centered">
											<label class="label">Quotation Date:</label>
											<div class="control">
												<input class="input" type="text" name="q_date">
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
										<label class="label">Vendor ID:</label>
											<div class="control">
												<input class="input" type="text" name="vendor_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Total Amount:</label>
										<div class="control">
											<input class="input" type="text" name="total_amt">
										</div>
									</div>
								</div>
								<div class="column">
										<div class="level-item has-text-centered">
											<label class="label">Delivery period:</label>
											<div class="control">
												<input class="input" type="text" name="del_period">
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
												<label class="label">Credit Period:</label>
													<div class="control">
														<input class="input" type="text" name="credit_period">
													</div>
												</div>
											</div>
										<div class="column">
											<div class="level-item has-text-centered">
												<label class="label">Insurance By:</label>
												<div class="control">
													<input class="input" type="text" name="ins_by">
												</div>
											</div>
										</div>
										<div class="column">
												<div class="level-item has-text-centered">
													<label class="label">Delivery mode:</label>
													<div class="control">
														<input class="input" type="text" name="del_mode">
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
									<th>Quantity</th>
									<th>Unit Of Measure</th>
									<th>Rate</th>
									<th>Amount</th>
									<th>Gst(%)</th>
									<th>Gst Amount</th>
									<th>Delivery Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
										<th><input type="text" name="product1"></th>
										<th><input type="text" name="qty1"></th>
										<th><input type="text" name="uom1"></th>
										<th><input type="text" name="rate1"></th>
										<th><input type="text" name="amt1"></th>
										<th><input type="text" name="gst1"></th>
										<th><input type="text" name="gstamt1"></th>
										<th><input type="text" name="date1"></th>
								</tr>
								<tr>
										<th><input type="text" name="product2"></th>
										<th><input type="text" name="qty2"></th>
										<th><input type="text" name="uom2"></th>
										<th><input type="text" name="rate2"></th>
										<th><input type="text" name="amt2"></th>
										<th><input type="text" name="gst2"></th>
										<th><input type="text" name="gstamt2"></th>
										<th><input type="text" name="date2"></th>
								</tr>
									<tr>
											<th><input type="text" name="product3"></th>
											<th><input type="text" name="qty3"></th>
											<th><input type="text" name="uom3"></th>
											<th><input type="text" name="rate3"></th>
											<th><input type="text" name="amt3"></th>
											<th><input type="text" name="gst3"></th>
											<th><input type="text" name="gstamt3"></th>
											<th><input type="text" name="date3"></th>
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
						<input type="submit" value="Search"  class="button is-primary is-rounded is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" value="Save" name="save"class="button is-primary is-rounded is-outlined">
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