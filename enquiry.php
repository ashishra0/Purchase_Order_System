<!DOCTYPE html>
<html>
  <head>
		<title>Enquiry</title>
		<?php include('resources.html');?>
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
  <?php include('navbar.html');?>
  <body>
		<section class="hero is-primary is-mobile">
			<div class="hero-body is-mobile" align="center">
				<h1 class="title">
					Enquiry
				</h1>
				<p class="subtitle">
					Purchase order system
				</p>
			</div>
    </section>
    <form name="enquiry" action="enquiry_table.php" method="POST">
		<section class="section is-mobile">
			<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Enquiry ID:</label>
											<div class="control">
												<input class="input" type="text" name="enquiry_id">
											</div>
										</div>
									</div>
								<div class="column">
									<div class="level-item has-text-centered">
										<label class="label">Enquiry Date:</label>
										<div class="control">
											<input class="input" type="text" name="enquiry_date">
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
								</tr>
							</thead>
							<tbody>
								<tr>
									<th><input type="text" name="product1"></th>
									<td><input type="text" name="qty1"></td>
								</tr>
								<tr>
                  <th><input type="text" name="product2"></th>
                  <td><input type="text" name="qty2"></td>
								</tr>
									<tr>
                  <th><input type="text" name="product3"></th>
                  <td><input type="text" name="qty3"></td>
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
						<input type="submit" name="exit" value="exit" class="button is-warning is-rounded is-outlined">
					</div>
        </div>
        <div class="column">
          <div class="level-item">
            <input type="submit" name="save" value="save" class="button is-success is-rounded is-outlined">
          </div>
        </div>
        <div class="column">
          <div class="level-item">
            <input type="submit" name="cancel" value="cancel" class="button is-warning is-rounded is-outlined">
          </div>
        </div>
			</div>
		</section>
	</form>	
		<hr>
	</body>
	<?php include('footer.php');?>
</html>