<div class="banner-bottom">
	<font color ="white">
		<div class="container">
				 <div class="wthree_title_agile">
						        <h3><span><?php echo $title; ?></span></h3>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('customer/createcustomer'); ?>" class="hvr-underline-from-center active"> Tambah Data Customer </a></li>
				</ul>
				<br><br>
				<div class="inner_w3l_agile_grids">
					<table border="2">
						<thead>
							<font color ="white">
							<tr>
								<td width="100px" align="center"><b> Id </td>
								<td width="400px" align="center"><b> Nama </td>
								<td width="250px" align="center"><b> Email </td>
								<td width="200px" align="center"><b> Telp </td>
								<td width="200px" align="center"><b> Action </td>
							</tr>
					
						</thead>
						<tbody>
							<?php foreach ($customer as $customer_item): ?>
								<tr>
									<td align="center"><?php echo $customer_item['id']; ?></td>
									<td align="center"><?php echo $customer_item['nama']; ?></td>
									<td align="center"><?php echo $customer_item['email']; ?></td>
									<td align="center"><?php echo $customer_item['notelp']; ?></td>
									<td align="center">
										<a href="<?php echo site_url('customer/view/'.$customer_item['id']); ?>" class="menu2"> View </a> 
										<a href="<?php echo site_url('customer/edit/' .$customer_item['id']); ?>" class="menu2"> Edit </a>
										<a href="<?php echo site_url('customer/delete/' .$customer_item['id']); ?>" class="menu2" onClick="return confirm(' Are You Sure Want to delete?')"> Delete </a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
		</div>
	</font>
</div>
	<!--//service-section-->