<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles/Website.css" />
	<meta charset="utf-8" />
	<meta name="description" content="Travel Booking" />
	<meta name="keywords" content="Creating Web Assignment 1" />
	<meta name="author" content="Jonathan Yong" />
	<title>Database Record</title>
</head>

<body>
	<?php
	    include "include/header.php";
        include "include/navigation.php";
	?> 
    <?php
        require_once("settings.php"); //connection info
        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
        //Checks if connection is successful
        if(!$conn)
        {
            //Displays error message
            echo "<p>Database connection failure</p>";
        }else
        {
            //Upon succesful connection
            $sql_table = "enquiry";
            
            //Set up the SQL command to add the data into the table
            $query = "select *from enquiry order by firstname";
			
        
            //execute the query and store result into the result pointer
            $result = mysqli_query($conn, $query);

            
            //checks if the execution was succesful
            if(!$result)
            {
                echo "<p>Something is wrong with ", $query, "</p>";
            }else
            {
                //Display the retrieved records
                echo "<table border = \"1\">";
                echo "<tr>"
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
                
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
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
            }// if sucessful query operation
            
            //close the database connection
            mysqli_close($conn);
        }//if successful database connection
        ?>
</body>
</html>