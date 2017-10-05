<html>
<head>
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="styles/Website.css" />
	<meta charset="utf-8" />
	<meta name="description" content="Travel Booking" />
	<meta name="keywords" content="Creating Web Assignment 3" />
	<meta name="author" content="Jonathan Yong" />
</head>

<body>
    <?php
    
          require_once("settings.php"); //connection info
          
          $deleteid = ($_POST["deleteid"]);
          
          $enquiry_id = ($_POST["enquiry_id"]);
          $firstName = ($_POST["firstName"]);
          $lastName = ($_POST["lastName"]);
          $email = ($_POST["email"]);
          $phone = ($_POST["phone"]);
          $dateOfBirth = ($_POST["dateOfBirth"]);
          $street = ($_POST["street"]);
          $town = ($_POST["town"]);
          $state = ($_POST["state"]);
          $postcode = ($_POST["postcode"]);
          $product = ($_POST["product"]);
          $rental = ($_POST["rental"]);
          $comments = ($_POST["comments"]);
          
          //add data table
          $enquiry_id2 = ($_POST["enquiry_id2"]);
          $firstName2 = ($_POST["firstName2"]);
          $lastName2 = ($_POST["lastName2"]);
          $email2 = ($_POST["email2"]);
          $phone2 = ($_POST["phone2"]);
          $dateOfBirth2 = ($_POST["dateOfBirth2"]);
          $street2 = ($_POST["street2"]);
          $town2 = ($_POST["town2"]);
          $state2 = ($_POST["state2"]);
          $postcode2 = ($_POST["postcode2"]);
          $product2 = ($_POST["product2"]);
          $rental2 = ($_POST["rental2"]);
          $comments2 = ($_POST["comments2"]);

          $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
    
          //view database
          $queryview = "select *from enquiry order by enquiry_id";
          
          //add row
          $queryinsert = "insert into enquiry (firstname, lastname, phone, dateofbirth, email, street, town, state, postcode, product, rental, comment) values
					('$firstName2', '$lastName2', '$phone2', '$dateOfBirth2', '$email2', '$street2', '$town2', '$state2', '$postcode2', '$product2', '$rental2' , '$comments2' )";
                    
          //drop row
          $querydrop = "DELETE FROM enquiry WHERE enquiry_id = $deleteid";
          
          //modify a column of a specific id
          $queryfirstname = "UPDATE enquiry SET firstname='$firstName' WHERE enquiry_id = $enquiry_id and not ('$firstName' = '')";
          $querylastname = "UPDATE enquiry SET lastname = '$lastName' WHERE enquiry_id = $enquiry_id and not ('$lastName' = '')";
          $queryemail = "UPDATE enquiry SET email = '$email' WHERE enquiry_id = $enquiry_id and not ('$email' = '')";
          $queryphone = "UPDATE enquiry SET phone = '$phone' WHERE enquiry_id = $enquiry_id and not ('$phone' = '')";          
          $querydateOfBirth = "UPDATE enquiry SET dateofbirth = '$dateOfBirth' WHERE enquiry_id = $enquiry_id and not ('$dateOfBirth' = '')";         
          $querystreet = "UPDATE enquiry SET street = '$street' WHERE enquiry_id = $enquiry_id and not ('$street' = '')";          
          $querytown = "UPDATE enquiry SET town = '$town' WHERE enquiry_id = $enquiry_id and not ('$town' = '')";          
          $querystate = "UPDATE enquiry SET state = '$state' WHERE enquiry_id = $enquiry_id and not ('$state' = '')";          
          $querypostcode = "UPDATE enquiry SET postcode = '$postcode' WHERE enquiry_id = $enquiry_id and not ('$postcode' = '')";          
          $queryproduct = "UPDATE enquiry SET product = '$product' WHERE enquiry_id = $enquiry_id and not ('$product' = '')";           
          $queryrental = "UPDATE enquiry SET rental = '$rental' WHERE enquiry_id = $enquiry_id and not ('$rental' = '')";
          $querycomments = "UPDATE enquiry SET comment = '$comments' WHERE enquiry_id = $enquiry_id and not ('$comments' = '')";
          
           

          
          if(!$firstName2)
          {
            ;
          }
          else
          {
             mysqli_query($conn, $queryinsert);
             $firstName2 = !$firstName;
          }
          mysqli_query($conn,$querydrop);
          
          mysqli_query($conn,$queryfirstname);
          mysqli_query($conn,$querylastname);
          mysqli_query($conn,$queryemail);
          mysqli_query($conn,$queryphone);
          mysqli_query($conn,$querydateOfBirth);
          mysqli_query($conn,$querystreet);
          mysqli_query($conn,$querytown);
          mysqli_query($conn,$querystate);
          mysqli_query($conn,$querypostcode);
          mysqli_query($conn,$queryproduct);
          mysqli_query($conn,$queryrental);
          mysqli_query($conn,$querycomments);
          
          $resultview = mysqli_query($conn,$queryview);
          
          if(!$resultview)
            {
                echo "<p>Something is wrong with ", $queryview, "</p>";
            }else
            {
                //Display the retrieved records
                echo "<table border = \"1\">";
                echo "<tr>"
                ."<th scope=\"col\">ID</th>"
                ."<th scope=\"col\">First Name</th>"
                ."<th scope=\"col\">Last Name</th>"
                ."<th scope=\"col\">Phone</th>"
                ."<th scope=\"col\">Email</th>"
                ."<th scope=\"col\">Date of birth</th>"
                ."<th scope=\"col\">Street</th>"
                ."<th scope=\"col\">Town</th>"
                ."<th scope=\"col\">State</th>"
                ."<th scope=\"col\">Postcode</th>"
                ."<th scope=\"col\">Product</th>"
                ."<th scope=\"col\">Rental Duration</th>"
                ."<th scope=\"col\">Comments</th>"                                                            
                ."</tr>";
                //retrieve current record pointed by the result pointer
                
                while($row = mysqli_fetch_assoc($resultview))
                {
                    echo "<tr>";
                    echo "<td>", $row["enquiry_id"],"</td>";
                    echo "<td>", $row["firstname"],"</td>";
                    echo "<td>", $row["lastname"],"</td>";
                    echo "<td>", $row["phone"],"</td>";
                    echo "<td>", $row["email"],"</td>";
                    echo "<td>", $row["dateofbirth"],"</td>";
                    echo "<td>", $row["street"],"</td>";
                    echo "<td>", $row["town"],"</td>";
                    echo "<td>", $row["state"],"</td>";
                    echo "<td>", $row["postcode"],"</td>";
                    echo "<td>", $row["product"],"</td>";
                    echo "<td>", $row["rental"],"</td>";
                    echo "<td>", $row["comment"],"</td>";
                    
                    echo "</tr>";
                }
                echo "</table>";
                //Frees up the memory, after using the result pointer
                mysqli_free_result($result);
                //mysql_free_result($queryinsert);
            }// if sucessful query operation
            
            //close the database connection
            mysqli_close($conn);
        
    ?>
    
    <form method = "post" action = "administrator.php">
           
        <fieldset>
        <legend>Modify Data</legend>
        <label for = "deleteid">Delete ID</label>
        <input type = "text" name = "deleteid">
        <br>
        <br>
        
        <label for = "enquiry_id">User ID:</label>
        <input type = "text" name = "enquiry_id" placeholder = "COMPULSORY">
        <br>
        <label for = "firstName">First Name:</label>
        <input type = "text" name = "firstName">
        <br>
        <label for = "lastName">Last Name:</label>
        <input type = "text" name = "lastName">
        
        <br>
        <label for="email">Email: </label>
				<input type="text" id="email" name = "email" placeholder="someone@example.com" onfocus="myFunction(this)" />
				<br/>
				<label for="phone">Phone No:</label>
				<input type="tel" id="phone" name = "phone" placeholder=" max 10 digits" onfocus="myFunction(this)" />
				<br/>
				<label for="dateOfBirth">Date of Birth: </label>
				<input type="date" name = "dateOfBirth" id="dateOfBirth" onfocus="myFunction(this)" />

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
                    
                <p><label for="comments">Question</label>
					<br/>
					<textarea id="comments" name="comments" rows="4" cols="40" placeholder="Enter question here"></textarea>
				</p>
        
        <input type = "submit">
        </fieldset>
        </fieldset>
    </form>
    
     <!-- FOR ADDING -->
        <form method = "post" action = "administrator.php">
        <fieldset>

        <legend>Add Data</legend>

        <label for = "firstName">First Name:</label>
        <input type = "text" name = "firstName2">
        <br>
        <label for = "lastName">Last Name:</label>
        <input type = "text" name = "lastName2">
        
        <br>
        <label for="email">Email: </label>
				<input type="text" id="email" name = "email2" placeholder="someone@example.com" onfocus="myFunction(this)" />
				<br/>
				<label for="phone">Phone No:</label>
				<input type="tel" id="phone" name = "phone2" placeholder=" max 10 digits" onfocus="myFunction(this)" />
				<br/>
				<label for="dateOfBirth">Date of Birth: </label>
				<input type="date" name = "dateOfBirth2" id="dateOfBirth" onfocus="myFunction(this)" />

				<br/>
				<fieldset>
					<legend>Address</legend>

					<label for="street">Street</label>
					<input type="text" name = "street2" id="street" onfocus="myFunction(this)"/>
					<br/>
					<label for="town">Town</label>
					<input type="text" name = "town2" id="town" onfocus="myFunction(this)"/>
					<br/>
					<label for="state">State</label>
					<select name="state2" id="state">
			
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
					<input type="text" name = "postcode2" id="postcode" />

				</fieldset>

				<br/>

				<fieldset>
					<legend>Product Enquiring</legend>
					<label for="product">Product</label>
					<select name="product2" id="product">
				
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
					<input type="number" name = "rental2" id="rental" onfocus="myFunction(this)"/>
                    
                <p><label for="comments">Question</label>
					<br/>
					<textarea id="comments" name="comments2" rows="4" cols="40" placeholder="Enter question here"></textarea>
				</p>
        
        <input type = "submit">
        </fieldset>
        </fieldset>
    
    </form>
            
    <a href = "login.php"><button type="button">Log Out</button></a>
    
    
    
    
    
    
    
    
    
   
</body>
</html>