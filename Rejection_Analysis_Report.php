<!DOCTYPE html>
<html>
  <head>
    <?php include ('resources.html');?>
    <style>
      em {
        color: hotpink;
      }
    </style>
	</head>	
  <body>
		<?php include ('report_navbar.html'); ?>
		<section class="hero is-primary is-mobile">
			<div class="hero-body is-mobile" align="center">
				<h1 class="title">
					Rejection Analysis Report
				</h1>
				<p class="subtitle">
					Purchase order system reports
				</p>
			</div>
    </section>
		<form name="quotation" action="quotation_table.php" method="POST">
		<section class="section is-mobile">
			<div class="container is-fluid">
					<div class="field">
						<div class="control">
							<div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
								<div class="column is-one-third">
									<div class="level-item has-text-centered">
										<label class="label">Frequency: <em>Monthly</em></label>
											<div class="control level-item has-text-centered">
											</div>
										</div>
									</div>
								<div class="column is-one-third">
									<div class="level-item has-text-centered">
										<label class="label">Users: <em>Purchase Manager</em></label>
										<div class="control">
										</div>
									</div>
								</div>
								<div class="column is-one-third">
									<div class="level-item has-text-centered">
										<label class="label">Purpose: <em>To understand amount and reason for rejection of deliveries</em></label>
										<div class="control">
										</div>
									</div>
								</div>
              </div>
              <div class="columns is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                <div class="column is-half">
                  <div class="level-item has-text-centered">
                  <label class="label">From Date: <em>2001-01-09</em></label>
                  </div>
                </div>
                <div class="column is-half">
                  <div class="level-item has-text-centered">
                  <label class="label">To Date: <em>2001-02-09</em></label>
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
									<th>Vendor ID</th>
									<th>Product ID</th>
									<th>Product Name</th>
									<th>Qty Delivered</th>
									<th>Qty Accepted</th>
									<th>Qty Rejected</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td align="right">2</td>
                  <td align="right">1</td>
                  <td>v neck</td>
                  <td align="right">10</td>
                  <td align="right">10</td>
                  <td align="right">0</td>
                </tr>
                <tr>
                  <td align="right">2</td>
                  <td align="right">1</td>
                  <td>v neck</td>
                  <td align="right">1234</td>
                  <td align="right">1000</td>
                  <td align="right">234</td>
                </tr>
                <tr>
                  <td align="right">3</td>
                  <td align="right">1</td>
                  <td>v neck</td>
                  <td align="right">100</td>
                  <td align="right">50</td>
                  <td align="right">50</td>
                </tr>
                <tr>
                  <td align="right">4</td>
                  <td align="right">1</td>
                  <td>v neck</td>
                  <td align="right">455</td>
                  <td align="right">455</td>
                  <td align="right">0</td>
                </tr>
                <tr>
                  <td align="right">5</td>
                  <td align="right">1</td>
                  <td>v neck</td>
                  <td align="right">238</td>
                  <td align="right">200</td>
                  <td align="right">38</td>
                </tr>
                <tr>
                  <td align="right">5</td>
                  <td align="right">1</td>
                  <td>v neck</td>
                  <td align="right">12</td>
                  <td align="right">2</td>
                  <td align="right">10</td>
                </tr>
                <tr>
                  <td align="right">6</td>
                  <td align="right">1</td>
                  <td>v neck</td>
                  <td align="right">9000</td>
                  <td align="right">1000</td>
                  <td align="right">8000</td>
                </tr>
                <tr>
                  <td align="right">6</td>
                  <td align="right">1</td>
                  <td>v neck</td>
                  <td align="right">877</td>
                  <td align="right">800</td>
                  <td align="right">77</td>
                </tr>
                <tr>
                  <td align="right">2</td>
                  <td align="right">2</td>
                  <td>high waist</td>
                  <td align="right">10</td>
                  <td align="right">10</td>
                  <td align="right">0</td>
                </tr>
                <tr>
                  <td align="right">2</td>
                  <td align="right">2</td>
                  <td>high waist</td>
                  <td align="right">1234</td>
                  <td align="right">1000</td>
                  <td align="right">234</td>
                </tr>
                <tr>
                  <td align="right">3</td>
                  <td align="right">2</td>
                  <td>high waist</td>
                  <td align="right">200</td>
                  <td align="right">100</td>
                  <td align="right">100</td>
                </tr>
                <tr>
                  <td align="right">4</td>
                  <td align="right">2</td>
                  <td>high waist</td>
                  <td align="right">700</td>
                  <td align="right">700</td>
                  <td align="right">0</td>
                </tr>
                <tr>
                  <td align="right">5</td>
                  <td align="right">2</td>
                  <td>high waist</td>
                  <td align="right">789</td>
                  <td align="right">700</td>
                  <td align="right">89</td>
                </tr>
                <tr>
                  <td align="right">5</td>
                  <td align="right">2</td>
                  <td>high waist</td>
                  <td align="right">13</td>
                  <td align="right">10</td>
                  <td align="right">3</td>
                </tr>
                <tr>
                  <td align="right">6</td>
                  <td align="right">2</td>
                  <td>high waist</td>
                  <td align="right">5000</td>
                  <td align="right">4000</td>
                  <td align="right">1000</td>
                </tr>
                <tr>
                  <td align="right">6</td>
                  <td align="right">2</td>
                  <td>high waist</td>
                  <td align="right">899</td>
                  <td align="right">99</td>
                  <td align="right">800</td>
                </tr>
                <tr>
                  <td align="right">2</td>
                  <td align="right">3</td>
                  <td>collared</td>
                  <td align="right">10</td>
                  <td align="right">10</td>
                  <td align="right">0</td>
                </tr>
                <tr>
                  <td align="right">2</td>
                  <td align="right">3</td>
                  <td>collared</td>
                  <td align="right">1234</td>
                  <td align="right">1000</td>
                  <td align="right">234</td>
                </tr>
                <tr>
                  <td align="right">3</td>
                  <td align="right">3</td>
                  <td>collared</td>
                  <td align="right">300</td>
                  <td align="right">150</td>
                  <td align="right">150</td>
                </tr>
                <tr>
                  <td align="right">4</td>
                  <td align="right">3</td>
                  <td>collared</td>
                  <td align="right">12340</td>
                  <td align="right">10000</td>
                  <td align="right">2340</td>
                </tr>
                <tr>
                  <td align="right">5</td>
                  <td align="right">3</td>
                  <td>collared</td>
                  <td align="right">456</td>
                  <td align="right">400</td>
                  <td align="right">56</td>
                </tr>
                <tr>
                  <td align="right">5</td>
                  <td align="right">3</td>
                  <td>collared</td>
                  <td align="right">14</td>
                  <td align="right">11</td>
                  <td align="right">3</td>
                </tr>
                <tr>
                  <td align="right">6</td>
                  <td align="right">3</td>
                  <td>collared</td>
                  <td align="right">4567</td>
                  <td align="right">567</td>
                  <td align="right">4000</td>
                </tr>
                <tr>
                  <td align="right">6</td>
                  <td align="right">3</td>
                  <td>collared</td>
                  <td align="right">866</td>
                  <td align="right">66</td>
                  <td align="right">800</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <hr>
      </section>
    </form>
    <?php include('footer.php');?>
  </body>
</html>
