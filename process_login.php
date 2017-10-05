<html>
<head>
    <title>Hello</title>
</head>
<body>
    
    <?php
        require_once("settings.php"); //connection info

        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
        
        $username = ($_POST["username"]);
        $password = ($_POST["password"]);
		
             
        /*              
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        */
        
        //$sql_table = "login";
        //$query = "select *from login where username = '$username' and password = '$password'";

        //$result = mysqli_query($conn, $query);
        
        $result = mysqli_query($conn, "select *from login where username = '$username' and password = '$password'") or die("Failed to query database".mysqli_error());
        /*Not needed anymore
        mysqli_connect("localhost","root","root","enquiry_db");
        mysqli_select_db("login"); */

        
        $row = mysqli_fetch_array($result);
        
		if($username == '' || $password == '')
		{
			echo "Failed to log in";
		}
        else if($row['username'] == $username && $row['password'] == $password)
        {
            echo "Login Success!";
			echo "<p>Welcome $username     <a href = \"administrator.php\"><p>Click here to enter Administrator controls</p></a> </p>";
                mysqli_free_result($result);
				
        }else
        {
            echo "Failed to log in";
        }
        
        mysqli_close($conn);


    ?>


</body>
</html>