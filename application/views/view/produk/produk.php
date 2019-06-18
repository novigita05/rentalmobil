<div class="banner-bottom">
	<font color ="white">
		<div class="container">
				 <div class="wthree_title_agile">
						        <h3><span><?php echo $title; ?></span></h3>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('produk/create'); ?>" class="hvr-underline-from-center active"> Tambah Data Produk </a></li>
				</ul>
				<br><br>
				<div class="inner_w3l_agile_grids">
					<table border="2" align="center">
						<thead>
							<font color ="white">
							<tr>
								<td width="200px" align="center"><b> Nopol </td>
								<td width="300px" align="center"><b> Merk Mobil </td>
								<td width="250px" align="center"><b> Harga </td>
								<td width="250px" align="center"><b> Action </td>
							</tr>
					
						</thead>
						<tbody>
							<?php foreach ($produk as $produk_item): ?>
								<tr>
									<td align="center"><?php echo $produk_item['nopol']; ?></td>
									<td align="center"><?php echo $produk_item['merkmobil']; ?></td>
									<td align="center"> Rp. <?php echo $produk_item['harga']; ?></td>
									<td align="center">
										<a href="<?php echo site_url('produk/view/'.$produk_item['merkmobil']); ?>" > View | </a> 
										<a href="<?php echo site_url('produk/edit/' .$produk_item['nopol']); ?>"> Edit | </a>
										<a href="<?php echo site_url('produk/delete/' .$produk_item['nopol']); ?>"  onClick="return confirm(' Are You Sure Want to delete?')"> Delete </a>
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
