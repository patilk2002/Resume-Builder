<?php
$cookie_name = $_POST["em"];
$cookie_value = $_POST["pass"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body background="images/bg.jpg">

<?php
//cookies started  
$Color = "white";
$txt ="WE HAVE USED COOKIES HERE";
echo "<h1><center>";
echo " <br>";
echo "<center><h2 style='font-size: 30px;font-weight:600;font-family:Montserrat;text-transform: uppercase;color:white;' >WE HAVE USED <span style='color:orange' > cookies HERE</span></center></h2>";
echo "<hr>";
echo " <br>";
echo "<h3>";
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
	echo "<div style='margin-left:500px;color:white;'>";
	echo "<div style='text-align:justify;'>";
	echo "<ol>";
	echo "<li>";
	echo "Username : '" . $cookie_name . "' <br>";
	echo "</li>";
	echo "<li>";
	echo "Password : '" . $cookie_value . "' <br>";
	echo "</li>";
	echo "</ol>";
	echo "</div>";
	echo "</div><br>";
}
echo "</h3> ";
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