<!DOCTYPE html>
<!-- This website has been created for educational purposes by:
1. Mubashir Mohammad Ayub
2. Arsalan Humayun
3. Timur Kaskulakov 
4. Jonathan Yong -->
<html>

<head>
	<link rel="stylesheet" type="text/css" href="styles/Website.css" />
	<meta charset="utf-8" />
	<meta name="description" content="Travel Booking" />
	<meta name="keywords" content="Creating Web Assignment 3" />
	<meta name="author" content="Jonathan Yong" />
	<script type = "text/javascript" src ="Enquiry.js"></script>
	<title>Enquiry</title>

</head>


<body>
	
	<?php
		include "include/header.php";
		include "include/navigation.php";
	?>

	<br/>

	<div id="middle">
		<div id="head">
			<h1 class="top">
				Contact Us
			</h1>
			<p class="top">Tell us your question and we will get back to you right away!</p>
		</div>

		<form id="regform" method = "post" action = "enquiry_process.php">
			<fieldset class="field">
				<legend>Personal Details</legend>
				<label for="firstName">Name: </label>
				<br/>
				<input type="text" id="firstName" name = "firstName" placeholder="First Name" onfocus="myFunction(this)"/>
				<input type="text" id="familyName" name = "lastName" placeholder="Family Name" onfocus="myFunction(this)"/>
				<br/>
				<label for="email">Email: </label>
				<br/>
				<input type="text" id="email" name = "email" placeholder="someone@example.com" onfocus="myFunction(this)" />
				<br/>
				<label for="phone">Phone No:</label>
				<br/>
				<input type="tel" id="phone" name = "phone" placeholder=" max 10 digits" onfocus="myFunction(this)" />
				<br/>
				<label for="dateOfBirth">Date of Birth: </label>
				<br/>
				<input type="date" name = "dateOfBirth" id="dateOfBirth" onfocus="myFunction(this)" />

				<br/>

				<label for="state">State</label>
				<br/>
				<fieldset>
					<legend>Address</legend>

					<label for="street">Street</label>
					<input type="text" name = "street" id="street" onfocus="myFunction(this)"/>
					<br/>
					<label for="town">Town</label>
					<input type="text" name = "town" id="town" onfocus="myFunction(this)"/>
					<br/>
					<label for="state">State</label>
					<select name="state" id="state">
			
			 <option value = "">Choose</option>		
                <option value ="Sabah">Sabah</option>
                <option value ="Sarawak">Sarawak</option>
                <option value = "Johor">Johor</option>
                <option value = "Negeri Sembilan">Negeri Sembilan</option>
                <option value = "Selangor">Selangor</option>
                <option value = "Terrenganu">Terrenganu</option>
				<option value = "Perak">Perak</option>
				<option value = "Melaka">Melaka</option>
				<option value = "Penang">Penang</option>
				<option value = "Pahang">Pahang</option>
				<option value = "Perlis">Perlis</option>
				<option value = "Labuan">Labuan</option>
				<option value = "Langkawi">Langkawi</option>
				<option value = "Putrajaya">Putrajaya</option>
				</select>
					<br />
					<label for="postcode">Postcode</label>
					<input type="text" name = "postcode" id="postcode" />



				</fieldset>

				<br/>

				<fieldset>
					<legend>Product Enquiring</legend>
					<label for="product">Product</label>
					<select name="product" id="product">
				
				<option value = "">Select</option>	
				<option value = "The Pullman Hotel">The Pullman Hotel</option>
				<option value = "The Hilton Hotel">The Hilton Hotel</option>
				<option value = "The Grand Margherita">The Grand Margherita </option>
				<option value = "Bertha's Bed and Breakfast">Bertha's Bed and Breakfast</option>
				<option value = "Sarawakian Longhouse">Sarawakian Longhouse</option>
				<option value = "Malaysian Beach house">Malaysian Beach house</option>
				<option value = "River Cruise">River Cruise</option>
				<option value = "Cultural Village">Cultural Village</option>
				<option value = "National Park">National Park</option>
				<option value = "Water Village">Water Village</option>
				<option value = "City Tour">City Tour</option>
				<option value = "Vios">Vios</option>
				<option value = "Kelisa">Kelisa</option>
				<option value = "Myvi">Myvi</option>
				<option value = "Viva">Viva</option>
				<option value = "Sim Card">Sim Card</option>
				<option value = "Hotspot">Hotspot</option>
				
			
				
				
				
				</select>
					<br/>
					<label for="rental">Rental duration</label>
					<input type="number" name = "rental" id="rental" onfocus="myFunction(this)"/>
				</fieldset>

				<p><label for="comments">Question</label>
					<br/>
					<textarea id="comments" name="comments" rows="4" cols="40" placeholder="Enter question here"></textarea>
				</p>

			</fieldset>
			<br/>
			<input type="submit" value="Submit" class = "bottom" />
			<input type="reset" value="Reset Form" class="bottom" />
		</form>
	</div>

	<?php
		include "include/footer.php";
	?>
	<!-- end of footer -->
</body>

</html>