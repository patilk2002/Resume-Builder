<!DOCTYPE html>
<html>
<body background="images/bg.jpg">
<?php
$servername = "localhost";
$username = "kiran";
$dbname="kiran";
$password="pass@123";
$conn = new mysqli($servername, $username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO  contacts (Name,Email,Message)
VALUES ('$_POST[name]','$_POST[email]','$_POST[message]');";
if ($conn->multi_query($sql) == TRUE) {
echo "<center>";
echo "<h2>";
echo "<br><br><center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;' >The New Record <span style='color:orange' > is Created Successfully</span></center></h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
echo "<br>";
echo "<a href='view.php' style='text-decoration:none;  display: inline-block;
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
  border-radius: 5px;'>View all Entries </a>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
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