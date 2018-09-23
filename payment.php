<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery Challan</title>
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
					Payment
				</h1>
				<p class="subtitle">
					Purchase order system
				</p>
			</div>
    </section>
    <form action="payment_table.php" method=post>
		<section class="section is-mobile">
			<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">ID:</label>
											<div class="control">
												<input class="input" type="text" name="payment_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Payment Date:</label>
										<div class="control">
											<input class="input" type="text" name="payment_date">
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
										<label class="label">Invoice ID:</label>
											<div class="control">
												<input class="input" type="text" name="i_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Vendor ID:</label>
										<div class="control">
											<input class="input" type="text" name='vendor_id'>
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
										<label class="label">PO ID:</label>
                    <div class="control">
                      <input class="input" type="text" name="po_id">
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="level-item has-text-centered">
                    <div class="field is-horizontal">
                      <div class="field-label">
                        <label class="label">Mode of payment:</label>
                      </div>
                      <div class="field-body">
                        <div class="field is-narrow">
                          <div class="control">
                            <label class="radio">
                              <input type="radio" name="member" value="cash">
                                Cash
                            </label>
                            <label class="radio">
                              <input type="radio" name="member" value="cheque">
                              Cheque
                            </label>
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
        <div class="container is-fluid">
          <div class="field">
            <div class="control">
              <div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                <div class="column">
                  <div class="level-item has-text-centered">
                    <label class="label">Cheque No:</label>
                    <div class="control">
                      <input class="input" type="text" name="c_no">
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="level-item has-text-centered">
                    <label class="label">Cheque Date:</label>
                    <div class="control">
                      <input class="input" type="text" name="c_date">
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
                    <label class="label">Bank Name:</label>
                    <div class="control">
                      <input class="input" type="text" name="b_name">
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="level-item has-text-centered">
                    <label class="label">Total Amount:</label>
                    <div class="control">
                      <input class="input" type="text" name="amt">
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
            <input type="submit" value="Save" name="save" class="button is-success is-rounded is-outlined">
          </div>
        </div>
        <div class="column">
          <div class="level-item">
            <input type="submit" value="Exit" name="Exit" class="button is-exit is-rounded is-outlined">
          </div>
        </div>      
			</div>
    </section>
  </form>	
  </body>
  <?php include('footer.php');?>
</html>