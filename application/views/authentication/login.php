<!DOCTYPE html>
<html>
<head>
	<title> Rental Mobil </title>
	<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/galleryeffect.css')?>" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assetscss/jquery.flipster.css')?>">
		<link rel='stylesheet' href="<?php echo base_url('assets/css/dscountdown.css')?>" type='text/css' media='all' />
	<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet"> 
</head>
<body>
	<div class="middile" id="team">
	<div class="container">
		<div class="wthree_title_agile two">
		</div>
		<div class="inner_w3l_agile_grids">
		<!-- Flipster List -->
		<div class="flipster">
		  		<div class="about-grid-agile">
					<div class="about-head-w3">
						<h3> LOGIN </h3>
					</div>
					<div class="about-bottom">
						<div class="about-bottom-bottom">
								<form method="post" action="<?php echo base_url('authentication/auth/login'); ?>" role="login">
							      <?php
							      //menampilkan error menggunakan alert javascript
							        if(isset($error)){
							        	echo '<script>
								        alert("'.$error.'");
								        </script>';
							        }
							      ?>
									<center>
										<input type="text" name="username" placeholder="Masukkan Username" size="30" required/></br></br>
										<input type="password" name="password" placeholder="Masukkan Password" size="30" required/></br></br>
										<button type="submit" name="submit" value="login"> Login </button>
									</center>
								</form>
						</div>
						
					</div>
				</div>
		  
		</div>
<!-- End Flipster List -->	
		
			</div>	
			
	</div>
</div>
	
</body>
</html>