<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles/Website.css" />
	<meta charset="utf-8" />
	<meta name="description" content="Travel Booking" />
	<meta name="keywords" content="Creating Web Assignment 1" />
	<meta name="author" content="Jonathan Yong" />
	<title>Enquiry Submitted</title>
</head>

<body>
	<?php
	    include "include/header.php";
        include "include/navigation.php";
	?>
	<div id="middle">
	<?php

          function sanitise_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
          }
          
            if(isset($_POST["firstName"]))
            {
                $firstName = $_POST["firstName"];
            }else
            {
                echo "<p>Enter this page through enquiry</p>";
            }
            
            if(isset($_POST["lastName"]))
            {
                $lastName = $_POST["lastName"];
            }else
            {
                echo "<p>Enter this page through enquiry</p>";
            }
            
            if(isset($_POST["email"]))
            {
                $email = $_POST["email"];
            }else
            {
                echo "<p>Enter this page through enquiry</p>";
            }
            
            if(isset($_POST["phone"]))
            {
                $phone = $_POST["phone"];
            }else
            {
                echo "<p>Enter this page through enquiry</p>";
            }
            
            if(isset($_POST["dateOfBirth"]))
            {
                $dateOfBirth = $_POST["dateOfBirth"];
            }
            else
            {
                echo "<p>Enter this page through enquiry</p>";
            }
            if(isset($_POST["street"]))
            {
                $street = $_POST["street"];
            }
            
            if(isset($_POST["town"]))
            {
                $town = $_POST["town"];
            }else
            {
                echo "<p>You did not enter your email</p>";
            }
            
            if(isset($_POST["state"]))
            {
                $state = $_POST["state"];
            }else
            {
                echo "<p>You did not enter your email</p>";
            }
            
            if(isset($_POST["postcode"]))
            {
                $postcode = $_POST["postcode"];
            }else
            {
                echo "<p>You did not enter your email</p>";
            }
            if(isset($_POST["product"]))
            {
                $product = $_POST["product"];
            }
            
            if(isset($_POST["rental"]))
            {
                $rental = $_POST["rental"];
            }
            
            if(isset($_POST["comments"]))
            {
                $comments = $_POST["comments"];
            }
            
            $firstName = sanitise_input($firstName);
            $lastName = sanitise_input($lastName);
            $email = sanitise_input($email);
            $phone = sanitise_input($phone);
            $dateOfBirth = sanitise_input($dateOfBirth);
            $street = sanitise_input($street);
            $town = sanitise_input($town);
            $state = sanitise_input($state);
            $postcode = sanitise_input($postcode);
            
            $errMsg = "";
			
            if($firstName == "")
            {
                $errMsg .= "<p>Please enter first name</p>";
            }else if (!preg_match("/^[a-zA-Z ]*$/", $firstName))
            {
              $errMsg .=  "<p>Only alpha characters are allowed in your first name</p>";
            }
			
			if($lastName == "")
            {
                $errMsg .= "<p>Please enter last name</p>";
            }else if (!preg_match("/^[a-zA-Z ]*$/", $lastName))
            {
              $errMsg .=  "<p>Only alpha characters are allowed in your last name</p>";
            }

			if($email == "")
			{
				$errMsg .= "<p>Please enter your email</p>"; 
			}
			else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$err_msg .= "Invalid email format";
			}
			
			if($phone == "")
			{
				$errMsg .= "<p>Please enter your phone number</p>";
			}else if(!is_numeric($phone))
			{
				$errMsg .= "<p>Your phone number must be numeric only</p>";
			}
			
			if($dateOfBirth == "")
			{
				$errMsg .= "<p>Please enter your date of birth</p>";
			}
			
			if($street == "")
			{
				$errMsg .= "<p>Please select your street</p>";
			}else if(strlen($street) > 40)
			{
				$errMsg .= "<p>Please limit your street to 25 characters</p>";
			}
			
			if($town == "")
			{
				$errMsg .= "<p>Please enter your town</p>";
			}else if(strlen($town) > 20)
			{
				$errMsg .= "<p>Please limit your town to 20 characters</p>";
			}
			
			if($state == "")
			{
				$errMsg .= "<p>Please enter your state</p>";
			}
			if($postcode == "")
			{
				$errMsg .= "<p>Please enter your postcode</p>";
			}else if(strlen($postcode) > 5)
			{
				$errMsg .= "<p>Please limit your postcode to 5 characters</p>";
			}
			if($product == "")
			{
				$errMsg .= "<p>Please select a product</p>";
			}
			if($rental == "")
			{
				$errMsg .= "<p>Please select a rental duration</p>";
			}else if($rental <= 0)
			{
				$errMsg .="<p>Your rental duration can't be less than 1</p>";
			}
			
			
			
            
            if($errMsg!= "")
            {
                echo $errMsg;
            }
            else
            {
                echo "<p>Welcome $firstName $lastName</p>";
                echo "<p>Your email is $email.</p>";
                echo "<p>Number is $phone</p>";
                echo "<p>You were born on $dateOfBirth</p>";
                echo "<p>Your street is $street</p>";
				echo "<p>Your town is $town</p>";
				echo "<p>Your state is $state</p>";
				echo "<p>Your postcode is $postcode </p>";
				echo "<p>Your prodcut is $product </p>";
                echo "<p>Your enquiry duration is $rental</p>";
                echo "<p>What asked: $comments</p>";
				
				//ONLY SUBMIT TO DATBASE IF NO ERRORS
				require_once("settings.php"); //connection info
				$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
				//Checks if connection is successful
				if(!$conn)
				{
					//Displays error message
					echo "<p>Database connection failure</p>";
				}else
				{
					$sql_table = "enquiry";
					$query = "insert into $sql_table (firstname, lastname, phone, dateofbirth, email, street, town, state, postcode, product, rental, comment) values
					('$firstName', '$lastName', '$phone', '$dateOfBirth', '$email', '$street', '$town', '$state', '$postcode', '$product', '$rental' , '$comments' )";
					
						// execute the query -we should really check to see if the database exists first.
						$result = mysqli_query($conn, $query);
						// checks if the execution was successful
						if(!$result) {
						echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
						 //Would not show in a production script
						} else {
						// display an operation successful message
						echo "<p class=\"ok\">Successfully added Enquiry record to database</p>";
						} // if successful query operation
						// close the database connection
						mysqli_close($conn);
				} // if succesful database connection
            }
			
		

            
            
            
        ?>
		
	</div>
	<p style="color:white; text-align: center; font-size: 200%;">Thank you for your enquiry!</p>

			<?php
			include "include/footer.php";
			?>

</body>

</html>