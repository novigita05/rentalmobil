<div class = "container">
	<h2><?php echo $title; ?></h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open('sewa/edit/'.$sewa_item['nosewa']); ?>
		<table>
			<tr>
				<td><label for="id"><font color="white"> Id </font></label></td>
				<td><input type="input" name="id" size="50" value="<?php echo $sewa_item['id'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="nosewa"><font color="white"> No Sewa </font></label></td>
				<td><input type="input" name="nosewa" size="50" value="<?php echo $sewa_item['nosewa'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="tanggalsewa"><font color="white"> Tanggal Sewa </font></label></td>
				<td><input type="input" name="tanggalsewa" size="50" value="<?php echo $sewa_item['tanggalsewa'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="jam"><font color="white"> Jam </font></label></td>
				<td><input type="input" name="jam" size="50" value="<?php echo $sewa_item['jam'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="nopol"><font color="white"> NOPOL </font></label></td>
				<td><input type="input" name="nopol" size="50" value="<?php echo $sewa_item['nopol'] ?>" /></td>
			</tr>
			<tr>
				<td><label for="status"><font color="white"> Status </font></label></td>
				<td><input type="input" name="status" size="50" value="<?php echo $sewa_item['status'] ?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Edit data" /></td>
			</tr>
		</table>
	</form>
</div>
