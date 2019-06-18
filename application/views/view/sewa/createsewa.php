<div class = "container">
	<br>
		<h3><?php echo $title; ?></h3>

		<?php echo validation_errors(); ?>

		<?php echo form_open('sewa/createsewa'); ?>
		<form>
			<table>
				<tr>
					<td><label for="nosewa"><font color="white"> No Sewa </font></label></td>
					<td><input type="input" name="nosewa" size="40" /></td>
				</tr>
				<tr>
					<td><label for="id"><font color="white"> Id Customer </font></label></td>
					<td><input type="input" name="id" size="40" /></td>
				</tr>
				<tr>
					<td><label for="tanggalsewa"><font color="white"> Tanggal Sewa</font></label></td>
					<td><input type="input" name="tanggalsewa" size="40" /></td>
				</tr>
				<tr>
					<td><label for="jam"><font color="white"> Jam </font></label></td>
					<td><input type="input" name="jam" size="40" /></td>
				</tr>
				<tr>
					<td><label for="nopol"><font color="white"> NOPOL </font></label></td>
					<td><input type="input" name="nopol" size="40" /></td>
				</tr>
				<tr>
					<td><label for="status"><font color="white"> Status </font></label></td>
					<td><input type="input" name="status" size="40" /></td>
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