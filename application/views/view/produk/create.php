<div class = "container">
	<br>
		<h3><?php echo $title; ?></h3>

		<?php echo validation_errors(); ?>

		<?php echo form_open('produk/create'); ?>
		<form>
			<table>
				<tr>
					<td><label for="nopol"><font color="white"> NOPOL </font></label></td>
					<td><input type="input" name="nopol" size="40" /></td>
				</tr>
				<tr>
					<td><label for="merkmobil"><font color="white"> Merk Mobil </font></label></td>
					<td><input type="input" name="merkmobil" size="40" /></td>
				</tr>
				<tr>,<td></td>
				</tr>
				<tr>
					<td><label for="harga"><font color="white"> Harga </font></label></td>
					<td><input type="input" name="harga" size="40" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="SUBMIT"/> &nbsp;
						<input type="reset" name="reset" value="RESET"/></</td>
				</tr>
			</table>
		</form>
		<br>
	</div>