<!DOCTYPE html>
<html>
  <head>
    <title>Invoice</title>
    <?php include ('resources.html');?>
  </head>
    <?php include ('navbar.html');?>
  <body>
		<section class="hero is-primary is-mobile">
			<div class="hero-body is-mobile" align="center">
				<h1 class="title">
					Invoice
				</h1>
				<p class="subtitle">
					Purchase order system
				</p>
			</div>
    </section>
    <form action="invoice_table.php" method="POST" name="invoice">
		<section class="section is-mobile">
			<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Invoice ID:</label>
											<div class="control">
												<input class="input" type="text" name="i_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Invoice Date:</label>
										<div class="control">
											<input class="input" type="text" name="i_date">
										</div>
									</div>
                </div>
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
              <div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd is-grouped">
                <div class="column">
                  <div class="level-item has-text-centered">
                    <label class="label">PO ID:</label>
                    <div class="control">
                      <input class="input" type="text" name="po_id">
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="level-item has-text-centered">
                    <label class="label">PO Date:</label>
                    <div class="control">
                      <input class="input" type="text" name="po_date">
                    </div>
                  </div>
                </div>
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
                    <label class="label">Credit Period:</label>
                    <div class="control">
                      <input class="input" type="text" name="c_period">
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
                  <label class="label">Total Invoice Amount:</label>
                    <div class="control">
                      <input class="input" type="text" name="tinv_amt">
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="level-item has-text-centered">
                    <label class="label">Total Amount Paid:</label>
                      <div class="control">
                        <input class="input" type="text" name="amt_paid">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="level-item has-text-centered">
                      <label class="label">Total Outstanding Amount:</label>
                      <div class="control">
                        <input class="input" type="text" name="out_amt">
                      </div>
                    </div>
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
                  <th>UOM</th>
                  <th>Rate</th>
                  <th>Amount</th>
                  <th>Gst</th>
                  <th>Gst Amount</th>
                  <th>Total Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th><input type="text" name="product1"></th>
									<td><input type="text" name="qty1"></td>
                  <td><input type="text" name="uom1"></td>
                  <td><input type="text" name="rate1"></td>
                  <td><input type="text" name="amt1"></td>
                  <td><input type="text" name="gst1"></td>
                  <td><input type="text" name="gstamt1"></td>
                  <td><input type="text" name="totamt1"></td>
								</tr>
								<tr>
                  <th><input type="text" name="product2"></th>
                  <td><input type="text" name="qty2"></td>
                  <td><input type="text" name="uom2"></td>
                  <td><input type="text" name="rate2"></td>
                  <td><input type="text" name="amt2"></td>
                  <td><input type="text" name="gst2"></td>
                  <td><input type="text" name="gstamt2"></td>
                  <td><input type="text" name="totamt2"></td>
								</tr>
									<tr>
                  <th><input type="text" name="product3"></th>
                  <td><input type="text" name="qty3"></td>
                  <td><input type="text" name="uom3"></td>
                  <td><input type="text" name="rate3"></td>
                  <td><input type="text" name="amt3"></td>
                  <td><input type="text" name="gst3"></td>
                  <td><input type="text" name="gstamt3"></td>
                  <td><input type="text" name="totamt3"></td>
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
							<input type="submit" name="new" value="new" class="button is-primary is-rounded is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="edit" value="edit" class="button is-primary is-rounded is-outlined">
          </div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="search" value="search" class="button is-primary is-rounded is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="delete" value="delete" class="button is-danger is-rounded is-outlined">
					</div>
				</div>
				<div class="column">
					<div class="level-item">
						<input type="submit" name="exit" value="exit" class="button is-primary is-rounded is-outlined">
					</div>
        </div>
        <div class="column">
          <div class="level-item">
            <input type="submit" name="save" value="save" class="button is-success is-rounded is-outlined">
          </div>
        </div>
        <div class="column">
          <div class="level-item">
            <input type="submit" name="cancel" value="cancel" class="button is-warning is-rounded is-outlined is-cancel">
          </div>
        </div>
			</div>
    </section>	
  </form>
  </body>
  <?php include('footer.php');?>
</html>