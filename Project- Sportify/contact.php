 <html>

<head>
	<title>SPORTIFY</title>

<link rel="stylesheet" type="text/css" href="csslayout.css">

</head>

<body bgcolor = "gray">

	<!--Nav bar-->

	<ul class="nav">
  <li><a class="active" href="homepage.html">Home</a></li>
  <li><a href="cric_home.html" target="blank">Cricket</a></li>
  <li><a href="#">Football</a></li>
  <li><a href="#about">Contact Us</a></li>
  <li class="signup"><a href="#">Sign Up</a></li>
</ul>

	<!--Header-->
	<div class="header" style = "position:relative;"><center><img src="sportifylogo.png" style="width:450px;height:150px"></center></div>

	<hr>
    <div style = "position:absolute; width:50%;height:70%; background-color:white; left:25%; border-radius: 25px"> 
    
    <center> <span style = "color:red; text-shadow: 2px 2px black;font-family: cursive ; font-size: 32; text-decoration: underline; letter-spacing: 2px">Contact Us</span> <br>
      <span style = "font-size:22; text-align: center; top: 200px; position:relative;"> We have recorded your response. We will get back to you in 48 hours</span> </center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sports";

$first_name = $_POST["fname"];
$last_name = $_POST["lname"];
$email = $_POST["email"];
$preference = $_POST["con"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO contact(email, fname, lname, pref)
VALUES ('$email', '$first_name', '$last_name', '$preference')";
 
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>

    </body>
    </html>

	
