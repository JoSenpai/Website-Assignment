<!DOCTYPE html>
<!-- This website has been created for educational purposes by:
1. Mubashir Mohammad Ayub
2. Arsalan Humayun
3. Timur Kaskulakov 
4. Jonathan Yong -->
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Assignment 1" />
	<meta name="keyword" content="HTML, CSS" />
	<meta name="author" content="Timur" />
	<title>Travel Booking</title>
	<script type = "text/javascript" src = "Communications.js"></script>
	<link href="styles/Website.css" rel="stylesheet" />
	
</head>
<body>
	<?php
		include "include/header.php";
		include "include/navigation.php";
	?>

   <div id="container">
<div id="menu">

</div>

	<h2>Communications</h2>
	
	<!--first product-->
	<fieldset>
		<legend ><strong>SIM Cards</strong></legend>
		
		<a href="enquiry.html"><img src="images/simcard1.jpg" alt="SIM Cards" style="width:400px;length:410px" /></a>
		
		<table  style="width:100%">
			<tr>
				<td id="car1"><strong>Operators</strong> Maxis, DiGi</td>
			</tr>
			<tr>
				<td><strong>Types: </strong>Standart, Nano</td>
			</tr>
		</table>
		<table style="width:100%">
		        <tr>
				<td><strong>Prices: </strong></td>
				</tr>
				<tr>
						<td><strong>Nano</strong></td>
						<td><strong>Standart</strong></td>
	            </tr>	
					<tr>
						<td>RM10</td>
						<td>RM5</td>
					</tr>
					
				</table>
      <button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
	</fieldset>
	<!--second product-->
	<div>
	<fieldset>
		<legend><strong>WiFi Hotspots</strong></legend>
		
		<a href="enquiry.html"><img src="images/hotspot.jpg" alt="WiFi Hotspots" style="width:400px;length:410px" /></a>

		<table style="width:100%">
			<tr>
				<td id="car2"><strong>Model: </strong>ZTE</td>
			</tr>
			<tr>
				<td><strong>Colors: </strong>Black, White, Gray</td>
			</tr>
			<tr>
				<td><strong>Batery Charge: </strong>5 hours</td>
			</tr>
			<tr>
				<td><strong>Radius of wokr: </strong>15m</td>
			</tr>
			<tr>
				<td><strong>Additions: </strong>Oun SIM Card</td>
			</tr>		
		</table>
		<table style="width:100%">
				<tr>
				<td><strong>Prices: </strong></td>
				</tr>
					<tr>
						<td><strong>Hotspot</strong></td>
						<td><strong>Hotspot with SIM Card</strong></td>
					</tr>
					<tr>
						<td>RM50</td>
						<td>RM65</td>
					</tr>
				</table>

		<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
	</fieldset>
	
	</div>
	<?php
		include "include/footer.php";
	?>
</div>
</body>
</html>