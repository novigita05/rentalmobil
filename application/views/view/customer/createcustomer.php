<div class = "container">
	<br>
		<h3><?php echo $title; ?></h3>

		<?php echo validation_errors(); ?>

		<?php echo form_open('customer/createcustomer'); ?>
		<form>
			<table>
				<tr>
					<td><label for="id"><font color="white"> Id Customer </font></label></td>
					<td><input type="input" name="id" size="40" /></td>
				</tr>
				<tr>
					<td><label for="nama"><font color="white"> Nama </font></label></td>
					<td><input type="input" name="nama" size="40" /></td>
				</tr>
				<tr>,<td></td>
				</tr>
				<tr>
					<td><label for="email"><font color="white"> Email </font></label></td>
					<td><input type="input" name="email" size="40" /></td>
				</tr>
				<tr>
					<td><label for="notelp"><font color="white"> No Telp </font></label></td>
					<td><input type="input" name="notelp" size="40" /></td>
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