<div class="banner-bottom">
	<font color ="white">
		<div class="container">
				 <div class="wthree_title_agile">
						        <h3><span><?php echo $title; ?></span></h3>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('sewa/createsewa'); ?>" class="hvr-underline-from-center active"> Tambah Data Sewa </a></li>
				</ul>
				<br><br>
				<div class="inner_w3l_agile_grids">
					<table border="2">
						<thead>
							<font color ="white">
							<tr>
								<td width="100px" align="center"> No Sewa </td>
								<td width="100px" align="center"> ID </td>
								<td width="250px" align="center"> Tanggal Sewa </td>
								<td width="200px" align="center"> Jam </td>
								<td width="200px" align="center"> Nopol </td>
								<td width="200px" align="center"> Status </td>
								<td width="200px" align="center"> Action </td>
							</tr>
					
						</thead>
						<tbody>
							<?php foreach ($sewa as $sewa_item): ?>
								<tr>
									<td align="center"><?php echo $sewa_item['nosewa']; ?></td>
									<td align="center"><?php echo $sewa_item['id']; ?></td>
									<td align="center"><?php echo $sewa_item['tanggalsewa']; ?></td>
									<td align="center"><?php echo $sewa_item['jam']; ?></td>
									<td align="center"><?php echo $sewa_item['nopol']; ?></td>
									<td align="center"><?php echo $sewa_item['status']; ?></td>
									<td align="center">
										<a href="<?php echo site_url('sewa/view/'.$sewa_item['id']); ?>" class="menu2"> View </a> 
										<a href="<?php echo site_url('sewa/edit/' .$sewa_item['nosewa']); ?>" class="menu2"> Edit </a>
										<a href="<?php echo site_url('sewa/delete/' .$sewa_item['nosewa']); ?>" class="menu2" onClick="return confirm(' Are You Sure Want to delete?')"> Delete </a>
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
