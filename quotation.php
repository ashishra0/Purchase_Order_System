<!DOCTYPE html>
<html>
  <head>
		<?php include ('resources.html');?>
	</head>	
  <body>
		<?php include ('navbar.html'); ?>
		<section class="hero is-primary is-mobile">
			<div class="hero-body is-mobile" align="center">
				<h1 class="title">
					Quotation
				</h1>
				<p class="subtitle">
					Purchase order system
				</p>
			</div>
    </section>
		<form name="quotation" action="quotation_table.php" method="POST">
		<section class="section is-mobile">
			<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Quotation ID</label>
											<div class="control">
												<input class="input" type="text" name="q_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Enquiry ID</label>
										<div class="control">
											<input class="input" type="text" name="enquiry_id">
										</div>
									</div>
								</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Vendor ID</label>
										<div class="control">
											<input class="input" type="text" name="vendor_id">
										</div>
									</div>
								</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Quotation Date</label>
										<div class="control">
											<input class="input" type="text" name="q_date">
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
									<th>Rate</th>
									<th>UOM</th>
									<th>GST(%)</th>
									<th>GST Amount</th>
									<th>Total Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th><input type="text" name="product1" id="product1"></th>
									<td><input type="text" name="qty1"></td>
									<td><input type="text" name="rate1"></td>
									<td><input type="text" name="uom1"></td>
									<td><input type="text" name="gst1"></td>
									<td><input type="text" name="gstamt1"></td>
									<td><input type="text" name="amt1"></td>
								</tr>
								<tr>
									<th><input type="text" name="product2"></th>
									<td><input type="text" name="qty2"></td>
									<td><input type="text" name="rate2"></td>
									<td><input type="text" name="uom2"></td>
									<td><input type="text" name="gst2"></td>
									<td><input type="text" name="gstamt2"></td>
									<td><input type="text" name="amt2"></td>
								</tr>
									<tr>
									<th><input type="text" name="product3"></th>
									<td><input type="text" name="qty3"></td>
									<td><input type="text" name="rate3"></td>
									<td><input type="text" name="uom3"></td>
									<td><input type="text" name="gst3"></td>
									<td><input type="text" name="gstamt3"></td>
									<td><input type="text" name="amt3"></td>
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
							<input type="submit" name="new" value="new" class="button is-primary is-rounded btn-new is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="edit" value="edit" class="button is-primary is-rounded btn-edit is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="delete" value="delete" class="button is-danger is-rounded btn-delete is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="search" value="search" class="button is-primary is-rounded btn-search is-outlined" id="search">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="exit" value="exit" class="button is-primary is-rounded btn-exit is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" value="save" name="save" class="button is-primary is-rounded btn-save is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="cancel" value="cancel" class="button is-warning is-rounded btn-cancel is-outlined">
					</div>
				</div>
			</div>
		</section>
		</form>	
		<hr>
	</body>
	<?php include('footer.php');?>
</html>