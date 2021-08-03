	<?php

	require_once('employee.php');

	?>

	<table cellpadding="0" cellspacing="0" width="100%" style="color:rgb(0,0,0);font-size:medium;font-family:barlow,sans-serif">
		<tbody>
			<tr>
				<td cellpadding="0" cellspacing="0" valign="center" style="text-align:left">
					<table cellpadding="0" cellspacing="0" style="display:inline-block;height:125px;max-width:100%">
						<tbody>
							<tr>
								<td style="letter-spacing:0.05em;padding:1.5em 2em 1.5em 0;text-align:left">
									<h3 style="color:rgb(171,141,61);font-weight:500;text-transform:uppercase;margin:0px;padding:0px"><?php echo $employee[0]['name'] . " " . $employee[0]['surname']; ?></h3>
									<p style="color:rgb(23,26,53);font-size:0.8em;text-transform:uppercase;margin:0px;padding:0px"><?php echo $employee[0]['job']; ?></p>
									<hr style="margin:0.3em 0px;border-top-style:dotted;border-top-color:rgb(171,141,61)">
									<p style="font-size:0.7em;color:inherit;margin:0px;padding:0px"><a href="mailto:<?php echo $employee[0]['email']; ?>@ripehouseadvisory.com.au" style="color:rgb(23,26,53);text-decoration:inherit!important" target="_blank"><?php echo $employee[0]['email']; ?>@ripehouseadvisory.com.au</a></p>
									<p style="font-size:0.7em;color:inherit;margin:0px;padding:0px"><a href="tel:<?php echo $employee[0]['phone']; ?>" style="color:rgb(23,26,53);text-decoration:inherit!important" target="_blank"><?php echo str_replace("-"," ",$employee[0]['phone']); ?></a></p>
								</td>
							</tr>
						</tbody>
					</table>&nbsp;<table cellpadding="0" cellspacing="0" style="display:inline-block;height:120px;max-width:100%;">
						<tbody>
							<tr>
								<td cellpadding="0" cellspacing="0" height="120" valign="bottom" style="line-height:0;width:147px"><img src="<?php echo $employee[0]['image']; ?>" alt="<?php echo $employee[0]['name'] . " " . $employee[0]['surname']; ?>" style="width:auto;height:120px;"></td>
							</tr>
						</tbody>
					</table>&nbsp;<table cellpadding="0" cellspacing="0" style="display:inline-block;height:114px;max-width:100%">
						<tbody>
							<tr>
								<td>
									<table style="margin:2em 0px">
										<tbody>
											<tr>
												<td><a href="https://www.ripehouseacquisitions.com.au/" target="_blank"><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/racq.png" alt="Ripehouse Acquisitions" width="30px" style="margin:0.2em"></a></td>
												<td><a href="https://www.ripehouse.com.au/" target="_blank"><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/rh.png" alt="Ripehouse Content Platform" width="30px" style="margin:0.2em"></a></td>
												<td><a href="https://www.ripehouseadvisory.com.au/" target="_blank"><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/rha.png" alt="Ripehouse Advisory" width="30px" style="margin:0.2em"></a></td>
												<td><a href="https://www.facebook.com/groups/highperformancepropertyinvestment" target="_blank"><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/hppi.png" alt="High Performance Property Investment Group" width="30px" style="margin:0.2em"></a></td>
												<td><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/TRG.png" alt="The Ripehouse Group" width="70px" style="margin:0.2em"></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>