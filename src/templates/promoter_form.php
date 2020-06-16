<form method="post">
	<label for="firstname">First Name</label>
	<input type="text" name="firstname" id="firstname">

	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" id="lastname">

	<label for="contact">Contact No.</label>
	<input type="text" name="contact" id="contact">

	<label for="sa_id">SA ID</label>
	<input type="text" name="sa_id" id="sa_id">

	<label for="bank">Bank</label>
	<select id="bank" name="bank">
		<option value=""></option>
		<option value="ABSA">ABSA</option>
		<option value="Capitec">Capitec</option>
		<option value="FNB">FNB</option>
		<option value="Nedbank">Nedbank</option>
		<option value="Standard Bank">Standard Bank</option>
		<option value="Other">Other</option>
	</select>

	<label for="account">Account No.</label>
	<input type="text" name="account" id="account">

	<br>
	<input type="submit" name="submit" value="Submit">
</form>