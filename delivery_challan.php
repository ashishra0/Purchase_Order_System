<!DOCTYPE html>
<html>
  <head>
	<title>Delivery Challan</title>
	<?php include ('resources.html');?>
	</head>
	<?php include ('navbar.html'); ?>
  <body>
		<section class="hero is-primary is-mobile">
			<div class="hero-body is-mobile" align="center">
				<h1 class="title">
					Delivery Challan
				</h1>
				<p class="subtitle">
					Purchase order system
				</p>
			</div>
    </section>
		<form action="delivery_challan_table.php" method="POST">
		<section class="section is-mobile">
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
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">PO ID:</label>
										<div class="control">
											<input class="input" type="text" name="po_id">
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
								</tr>
							</thead>
							<tbody>
								<tr>
									<th><input type="text" name="product1"></th>
									<th><input type="text" name="qty1"></th>
									<th><input type="text" name="uom1"></th>
								</tr>
								<tr>
									<th><input type="text" name="product2"></th>
									<th><input type="text" name="qty2"></th>
									<th><input type="text" name="uom2"></th>
								</tr>
									<tr>
									<th><input type="text" name="product3"></th>
									<th><input type="text" name="qty3"></th>
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
						<input type="submit" value="exit" name="exit" class="button is-primary is-rounded is-outlined">
					</div>
        </div>
        <div class="column">
          <div class="level-item">
            <input type="submit" value="Delete" name="Delete" class="button is-danger is-rounded is-outlined">
          </div>
        </div>  
        <div class="column">
          <div class="level-item">
            <input type="submit" value="Save" name="save" class="button is-success is-rounded is-outlined">
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