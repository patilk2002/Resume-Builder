<!DOCTYPE html>
<html>
<body background="images/bg.jpg">
<?php
echo "<center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;color:white;' >WE HAVE USED <span style='color:orange' > SESSION HERE</span></center></h2>";
echo " <br><hr>";
echo "<h3><center>";
// Set session variables
$_SESSION["user"] = $_POST["name"];
$_SESSION["id"] = $_POST["email"];
$_SESSION["qest"] = $_POST["qes"];

// getting
echo " <br>";
echo "<div style='color:#ff0023;'>THE QUESTIONS ASKED BY THE USERS</div>";
echo " <br>";
echo "<div style='margin-left:500px;color:white;'>";
echo "<div style='text-align:justify;'>";
echo "<ol>";
echo "<li>The user name is  " . $_SESSION["user"] . ".</li><br>";
echo "<li>Email Id is  " . $_SESSION["id"] . ".</li><br>";
echo "<li>The Question is " . $_SESSION["qest"] . " ?</li>";
echo "<ol>";
echo "</div>";
echo "</div><br>";
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