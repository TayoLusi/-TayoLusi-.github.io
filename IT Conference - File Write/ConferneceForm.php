<!DOCTYPE html>
<html>
<title>IT Conference Form</title>
<body>
<h1>IT Conference Form</h1>
<p></p>

<?php


?>


<form method="post" action="ITConference.php">

<fieldset>
<legend>IT Conference Personal Information:</legend>
<label>FirstName</label>
	<input type="text" name="first"/></br>
			
<label>LastName</label>
	<input type="text" name="last" /></br>
			
<label>Address</label>
	<input type="text" name="Address" /></br>
			
<label>City</label>
	<input type="text" name="City"/></br>
			
<label>Street</label>
	<input type="text" name="Street"/></br>
	
<label>Zip</label>
	<input type="number" name="Zip"/></br>
			
<label>Email</label>
	<input type="text" name="Email"/></br>
			
<label>ReEnterEmail</label>
	<input type="text" name="ReEnterEmail"/></br>
			
<label>PhoneNumber</label>
	<input type="tel" name="PhoneNumber"/></br>
		
<label>Password</label>
	<input type="text" name="Password"/></br>
			
<label>ReEnterPassword</label>
	<input type="text" name="ReEnterPassword"/></br>
	

<p>
		
		<label>Will you be attending the conference?:</label>
		<select name = "Going">
			<option value="">Select...</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
			
		</select>
		
		</p>
		
		
<p>
		
		<label>How Many Extra Dinner Tickets Would You Like To Purchase?:</label>
		<select name = "Dinner">
			<option value="">Select...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			
		</select>
		
		</p>
		
		
		
		
<p>
		
		<label>Will you be attending the Pre-Conference:</label>
		<select name = "PreConference">
			<option value="">Select...</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
			
		</select>
		
		</p>
		
		
<p>
						
</fieldset>
	<button type="submit">Submit to Handler</button>	
		
</body>
</html>