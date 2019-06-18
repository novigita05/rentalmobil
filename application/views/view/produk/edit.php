<div class = "container">
	<h2><?php echo $title; ?></h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open('produk/edit/'.$produk_item['nopol']); ?>
		<table>
			<tr>
				<td><label for="nopol"><font color="white"> NOPOL </font></label></td>
				<td><input type="input" name="nopol" size="50" value="<?php echo $produk_item['nopol'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="merkmobil"><font color="white"> Merk Mobil </font></label></td>
				<td><input type="input" name="merkmobil" size="50" value="<?php echo $produk_item['merkmobil'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="harga"><font color="white"> Harga </font></label></td>
				<td><input type="input" name="harga" size="50" value="<?php echo $produk_item['harga'] ?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Edit data" /></td>
			</tr>
		</table>
	</form>
</div>
