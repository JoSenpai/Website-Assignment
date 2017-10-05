<!DOCTYPE html>

<!-- This website has been created for educational purposes by:
1. Mubashir Mohammad Ayub
2. Arsalan Humayun
3. Timur Kaskulakov 
4. Jonathan Yong -->
<html lang ="en">

 <head>
 
  <meta charset="utf-8"/>
  <meta name ="Description" content ="Travel Booking Product page" />
  <meta name ="keywords" content="product, accomodation, housing, travel" />
  <meta name = "author" content = "Mubashir Mohammad Ayub"/>
  
  <title> Accomodation </title>
		<script type = "text/javascript" src = "Accomodation.js"></script>
  
  <link href = "styles/Website.css" rel="stylesheet" type="text/css" />
 
 </head>
 <body>    
			<?php
				include "include/header.php";
				include "include/navigation.php";
			?>

 
  <h1> Accomodation </h1>
   
   <p> In order to explore the places you have traveled to you need rest,
   in order to rest you need accomodation. That is where TravelBooking.com comes in!
   We will help you find the most appropriate accommodation for your various needs! </p>
   
   <hr />
   
  <h2> Hotels </h2> 
   <p> For the loaded traveler who prefers luxury at the cost of authenticity! </p>
   
    <table>
	  
	  <tr>
	  
	   <th> Name and Description </th>
	   <th> Picture </th>
	   <th> Rating </th>
	   <th> Cost </th>
	   <th> Contact Details </th>
	   <th> </th>
	  
	  </tr>
	  
	  <tr>

	   <td> <strong>The Pullman Hotel</strong> :<br /><br /> 5 star hotel located in the heart of Kuching
	       located within walking distance of the waterfront. Surrounding area is full of hotspots for nightlife. </td>
	   <td><a href="enquiry.html"><img src="images/Pullman.jpg" alt ="The Pullman Hotel" class = "pic" id = "pullman" /></a> </td>
	   <td> 3.8/5<br /> (Google) </td>
	   <td class="money"> $$$$$ / $$$$$ </td>
	   <td> <strong>Phone number</strong>:<br /> +60 82-222 888</td>
	   <td class="book" id = "pullman1"> <strong><a href="enquiry.html">BOOK NOW!</a></strong> </td>
	   
	  
	  </tr>
	  
	  <tr>
	  
	   <td> <strong>The Hilton Hotel</strong>: <br /><br /> 4 star hotel located on the waterfront. Situated close to popular sheesha bars and late night bistros on the waterfront. Also close to Padang Merdeka and the famous Merdeka Plaza mall </td>
	   <td> <a href="enquiry.html"><img src="images/Hilton.jpg" alt ="The Hilton Hotel" class ="pic"/></a> </td>
	   <td> 4.2/5 <br /> (Google) </td>
	   <td class="money"> $$$$ / $$$$$ </td>
	   <td> <strong>Phone number</strong>: <br /> +60 82-223 888 </td>
	   <td class="book"> <strong><a href="enquiry.html">BOOK NOW!</a></strong> </td>
	   
	  
	  </tr>
	  
	  <tr> 
	  
	   <td> <strong>The Grand Margherita</strong> <br /><br />: 4 star hotel located on the waterfront right next to Sarawak Plaza, situated in front of one of the famous cat statues of kuching, this hotel is surrounded by 24 hour food outlets such as McDonald's and KFC.<br />  </td>
	   <td> <a href="enquiry.html"><img src="images/TheGrandMargherita.jpg" alt = "The Grand Margherita" class ="pic" /></a> </td>
	   <td> 4.1 / 5<br /> (Google) </td>
	   <td class="money"> $$$ / $$$$$ </td>
	   <td> <strong>Phone number</strong>: <br /> +60 82-418 911 </td>
	   <td class="book"> <strong><a href="enquiry.html">BOOK NOW!</a></strong> </td>
	  
	  </tr>
	
	
	</table>
  
  
  
   
  <hr />
  
  <h2> Local hosts / Bed and Breakfast </h2>
   <p> For the traveler seeking a completely local experience! </p>
   
   
   <table>
    
	<tr>
	 
	 <th> Name and Description </th>
	 <th> Picture </th>
	 <th> Rating </th>
	 <th> Cost </th>
	 <th> Contact Details </th>
	 <th> </th>
	
	
	</tr>
	
	<tr>
	
	 <td> <strong>Bertha's Bed and Breakfast</strong>: <br /><br /> A bed and breakfast operated by Madam Bertha
	   and her staff, operating since 2002. They provide clean rooms with attached toilets and three meals a day. Also come with complimentary laundry service and WiFi. </td>
	 <td> <a href="enquiry.html"><img src="images/Berthabnb.jpg" alt ="Bertha's Bed and Breakfast" class="pic" /></a> </td>
	 <td> 3.7 / 5 <br /> (TripAdvisor) </td>
	 <td class="money"> $$ / $$$$$ </td>
	 <td> <strong>Email address</strong>: <br /> berthabnb@gmail.com </td>
	 <td class="book"> <strong><a href="enquiry.html">BOOK NOW!</a></strong> </td>
	
	</tr>
	
	
	<tr>
	
	 <td> <strong>Bumiputra Longhouse</strong>: <br /><br /> A traditional Sarawakian style longhouse built in 2004, operated
          as a lodging facility for tourists. This facility does not offer the luxuries normally associated with hotel rooms, instead the guests are treated to traditional sarawakian life away from the internet,air conditioning or even electricity. For the hardcore tourist who really wants to get a feel of the traditional way of life.	 </td>
	 <td> <a href="enquiry.html"><img src="images/longhouse.jpg" alt ="Sarawakian Longhouse" class="pic" /></a> </td>
	 <td> 3 / 5 <br /> (TripAdvisor) </td>
	 <td class="money"> $ / $$$$$ </td>
	 <td> <strong>Email address</strong>: <br /> stay@longhouse.com </td>
	 <td class="book"> <strong><a href="enquiry.html">BOOK NOW!</a></strong> </td>
	
	</tr>
	
	
	<tr>
	
	 <td> <strong>Malaysian Beach house</strong>: <br /><br /> A small beach hut operated as a bed and breakfast
          by a young couple. A romantic spot on the beach with free WiFI and included breakfast. Good for honeymooning couples.	 </td>
	 <td> <a href="enquiry.html"><img src="images/beachhouse.png" alt ="Malaysian Beach house" class="pic" /></a> </td>
	 <td> 4.3 / 5 <br /> (TripAdvisor) </td>
	 <td class="money"> $$ / $$$$$ </td>
	 <td> <strong>Email address</strong>: <br /> sonofabeach@gmail.com </td>
	 <td class="book"> <strong><a href="enquiry.html">BOOK NOW!</a></strong> </td>
	
	</tr>
	
	
   
   
   </table>
	<?php
		include "include/footer.php";
	?>
 </body>
</html>
