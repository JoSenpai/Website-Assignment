<!DOCTYPE html>
    <!-- This website has been created for educational purposes by:
1. Mubashir Mohammad Ayub
2. Arsalan Humayun
3. Timur Kaskulakov 
4. Jonathan Yong -->
<html>
<head>
	<meta charset="utf-8" /> 
	<meta name="description" content="Travel Booking" /> 
	<meta name="keywords" content="Creating Web Assignment 1" /> 
	<meta name="author" content="Jonathan Yong" />
	<title>Travel Booking</title>
	<script type = "text/javascript" src ="Tours.js"></script>
	<link href = "styles/Website.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php
		include "include/header.php";
		include "include/navigation.php";
	?>

    
<table id = "tourtable">
    <tr>
        <td><a href="enquiry.html"><img src = "images/rivercruise.jpg" class = "tourpic" alt = "rivercruise"/></a></td>
        <td>
            <h3 class = "tourhead">			River Cruise</h3>
            <ul class = "unorderedList">
               	<li>Add your content...2 Night cruise on the majestic 5 star Riverson Cruiship</li>
				<li>Cruise around the atlantic sea and watch the life of fishes in premium viewing pods</li>
				<li>Top 10 best Sunset View rated by Trip Advisor</li>
				<li>3 Star Michellin Restaurant, "The Palace"</li>
				<li>24 hour gym and sports facilities</li>
            </ul>
        <button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
        
        
        </td>
    
    </tr>   

    <tr>
        <td><a href="enquiry.html"><img src = "images/culturalvillage.jpg" class = "tourpic" alt = "cultural village"/></a></td>
        <td>
			<h3 class = "tourhead">		Cultural Village</h3>
			<ul class = "unorderedList">
				<li>Day/Night visit to the grand cultural village</li>
				<li>#1 must do for new experiences</li>
				<li>Various shows performed by different tribes</li>
				<li>Game and activities played by the tribes
					   -Flying Fox / Rooftop Jumping / Water bending.....</li>
				<li>Food tasting of all traditional dishes</li>
		</ul>
			
					<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
		</td>


	</tr>   

    <tr>
        <td><a href="enquiry.html"><img src = "images/nationalpark.jpg" class = "tourpic" id = "nationalpark" alt="nationalpark"/></a></td>
        <td>
			<h3 class = "tourhead">		National Park</h3>
			
			<ul class = "unorderedList">
				<li>2Day 1Night stay in Kinabalu Pine Resort</li>
				<li>Breathtaking scenery of Mount Kinabalu</li>
				<li>Jungle trekking</li>
				<li>Witness the rare Rafflessia flower and various flowers</li>
				<li>Visit to Desa Farm and Tea Farm</li>
			</ul>
			
			<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
		</td>
    </tr>
	
	<tr>
		<td><a href="enquiry.html"><img src = "images/watervillage.jpg" class = "tourpic" alt = "watervillage"/></a></td>
		<td>
			<h3 class = "tourhead">Water Village</h3>
			<ul>
				<li>2Day 1 Night stay in Century Water Village</li>
				<li>Home to the rare fish species momo</li>
				<li>Top fishing spots in the world by fishing.com</li>
				<li>#5 places to get Seafood in the world</li>
			</ul>
			<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
		</td>
	</tr>
	
		<tr>
		<td><a href="enquiry.html"><img src = "images/tourbus.jpg" class = "tourpic" alt = "tourbus"/></a></td>
		<td>
			<h3 class = "tourhead">City Tour</h3>
			<ul>
				<li>Day Trip around the city</li>
				<li>Journey to the prestigous hotspots in the city</li>
				<li>Roofless bus provided on 2nd floor of bus</li>
				<li>Enter exclusive parks only allowed in by the tour</li>
				<li>Tour Guide fluent in Japanese, Korean, Chinese</li>
			</ul>
			<button type="button" class = "book" onclick="">Book Now</button><a href="enquiry.html"></a>
		</td>
	</tr>
</table>
	<?php
		include "include/footer.php";
	?>    
</body>
   
</html>