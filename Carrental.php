<!DOCTYPE html>
<html lang="en">
<!-- This website has been created for educational purposes by:
1. Mubashir Mohammad Ayub
2. Arsalan Humayun
3. Timur Kaskulakov 
4. Jonathan Yong -->
<head>
	<meta charset="utf-8" /> 
	<meta name="description" content="Travel Booking" /> 
	<meta name="keywords" content="Creating Web Assignment 1" /> 
	<meta name="author" content="Muhammad Arslan Humayun" />
	<title>Travel Booking</title>
	<script type = "text/javascript" src = "Carrental.js"></script>
	<link href = "styles/Website.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php
		include "include/header.php";
		include "include/navigation.php";
	?>

<div id="container">
<div id="menu">

</div>

<h1>Economy class Cars</h1>
	
	<!--first product-->
	<fieldset>
		<legend ><strong>Toyota Vios</strong></legend>
		
		<a href="enquiry.html"><img src="images/vios.jpg" alt="Toyota Vios" style="width:400px;length:410px" /></a>
		
		<table  style="width:100%">
			<tr>
				<td id="car1"><strong>Model:Toyota Vios 1.5 </strong></td>
			</tr>
			<tr>
				<td><strong>Transmission: </strong>Auto</td>
			</tr>
			<tr>
				<td><strong>Passengers: </strong>4</td>
			</tr>
		</table>
		<table style="width:100%">
		        <tr>
				<td><strong>Rental prices: </strong></td>
				</tr>
				<tr>
						<td><strong>Daily</strong></td>
						<td><strong>Weekly</strong></td>
						<td><strong>Monthly</strong></td>
	            </tr>	
					<tr>
						<td>RM200</td>
						<td>RM1500</td>
						<td>RM5500</td>
					</tr>
					
				</table>
				<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
	</fieldset>
	<!--second product-->
	<fieldset>
		<legend><strong>Perodua MyVi</strong></legend>
		
		<a href="enquiry.html"><img src="images/myvi.jpg" alt="Perodua MyVi" style="width:400px;length:410px" /></a>

		<table style="width:100%">
			<tr>
				<td id="car2"><strong>Model: </strong>Perodua MyVi 1.3</td>
			</tr>
			<tr>
				<td><strong>Year manufactured: </strong>2015</td>
			</tr>
			<tr>
				<td><strong>Transmission: </strong>Auto</td>
			</tr>
			<tr>
				<td><strong>Passengers: </strong>5</td>
			</tr>		
		</table>
		<table style="width:100%">
				<tr>
				<td><strong>Rental prices: </strong></td>
				</tr>
					<tr>
						<td><strong>Daily</strong></td>
						<td><strong>Weekly</strong></td>
						<td><strong>Monthly</strong></td>
					</tr>
					<tr>
						<td>RM100</td>
						<td>RM700</td>
						<td>RM2000</td>
					</tr>
				</table>
				<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
	</fieldset>
	<!--third product-->

	<fieldset>
		<legend><strong>Perodua Kelisa</strong></legend>

		<a href="enquiry.html"><img src="images/kelisa.jpg" alt="Kelisa" style="width:400px;length:410px" /></a>
		
		<table style="width:100%">
			<tr>
				<td id="car3"><strong>Model: </strong>Perodua Kelisa</td>
			</tr>
			<tr>
				<td><strong>Year manufactured: </strong>2014</td>
			</tr>
			<tr>
				<td><strong>Transmission: </strong>Auto</td>
			</tr>
			<tr>
				<td><strong>Passengers: </strong>5</td>
			</tr>
		</table>
		<table style="width:100%">
				<tr>
				<td><strong>Rental prices: </strong></td>
				</tr>
					<tr>
						<td><strong>Daily</strong></td>
						<td><strong>Weekly</strong></td>
						<td><strong>Monthly</strong></td>
					</tr>
					<tr>
						<td>RM350</td>
						<td>RM2000</td>
						<td>RM7000</td>
					</tr>
				</table>
				<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
	</fieldset>

	<!--fourth product-->

	<fieldset>
		<legend><strong>Perodua Viva</strong></legend>
	
		<a href="enquiry.html"><img src="images/viva.jpg" alt="Viva" style="width:400px;length:410px" /></a>
		
		<table style="width:100%">
			<tr>
				<td id="car4"><strong>Model: </strong>Perodua Viva 1.0</td>
			</tr>
			<tr>
				<td><strong>Year manufactured: </strong>2016</td>
			</tr>
			<tr>
				<td><strong>Transmission: </strong>Auto</td>
			</tr>
			<tr>
				<td><strong>Passengers: </strong>5</td>
			</tr>
			<tr>
				<td><strong>Mileage: </strong>10,000km - 15,555km</td>
			</tr>
			
		</table>
		<table style="width:100%">
                <tr>		
				<td><strong>Rental prices: </strong></td>
				</tr>	
					<tr>
						<td><strong>Daily</strong></td>
						<td><strong>Weekly</strong></td>
						<td><strong>Monthly</strong></td>
					</tr>
					<tr>
						<td>RM80</td>
						<td>RM400</td>
						<td>RM2000</td>
					</tr>
				</table>
				<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
	</fieldset>
	
	<!--Start of footer-->
	<?php
		include "include/footer.php";
	?>
	</div>
</body>
</html>