<!DOCTYPE html>
<html>
<body background="image/bg.jpg">

<?php
$servername = "localhost";
$username = "kiran";
$password = "pass@123";
$dbname = "kiran";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name,Email,Message FROM contacts";
$result = $conn->query($sql);
echo "<center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;color:white' > The Visitors Who Wants <span style='color:orange' > do Contact With Us</span></center></h2>";
echo "</center> </h2>";
echo "<br><hr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<ul>";
	echo "<li>";
        echo "Name: ". $row["Name"]. ",&nbsp;&nbsp;&nbsp;&nbsp;Email-ID : ". $row["Email"]. ",&nbsp;&nbsp;&nbsp;&nbsp;Message : ". $row["Message"]. " ";
	echo "</li>";
	echo "<br> ";
	echo "</ul>";

    }
} else {
    echo "0 results";
}

$conn->close();
echo "<center>";
echo "<a href='index.html' style='text-decoration:none;  display: inline-block;
  font-weight: 400;
  letter-spacing: 1px;
  line-height: 20px;
  overflow: hidden;
  padding: 8px 15px;
  position: relative;
  text-transform: uppercase;
  z-index: 1;
  background:#65db578c;
  color:white;
  border-left:2px solid orange;
  border-right:2px solid orange;
  border-top:2px solid orange;
  border-bottom:2px solid orange;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  border-radius: 5px;'>back to home</a>";
?>

</body>
</html>