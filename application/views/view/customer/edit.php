<div class = "container">
	<h2><?php echo $title; ?></h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open('customer/edit/'.$customer_item['id']); ?>
		<table>
			<tr>
				<td><label for="id"><font color="white"> Id </font></label></td>
				<td><input type="input" name="id" size="50" value="<?php echo $customer_item['id'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="nama"><font color="white"> Nama </font></label></td>
				<td><input type="input" name="nama" size="50" value="<?php echo $customer_item['nama'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="email"><font color="white"> Email </font></label></td>
				<td><input type="input" name="email" size="50" value="<?php echo $customer_item['email'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="notelp"><font color="white"> No Telp </font></label></td>
				<td><input type="input" name="notelp" size="50" value="<?php echo $customer_item['notelp'] ?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Edit data" /></td>
			</tr>
		</table>
	</form>
</div>
