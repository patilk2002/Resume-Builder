<?php  
$mar="50px";
$bor="2px solid black";
$Color = "#2196f3";
$Colo = "#2196f340";
$align="right";
$txt="RESUME";
$txt1=" Career Objective :";
$txt2=" personal Information :";
$txt3=" Educational Qualification :";
$txt4=" Work Experience :";
$txt5="Declaration :";
echo'<div style="border:'.$bor.'">';
echo'<div style="margin-left:'.$mar.'">';
echo'<div style="margin-right:'.$mar.'">';
echo "<h1> <center>";
echo '<div style="Color:'.$Color.'">'.$txt.'</div>';
echo "</h1> </center>";
echo"<hr>";
echo "<div style='line-height:25px'>";
echo "<b>";
echo $_POST["fn"];
echo " ";
echo $_POST["mn"];
echo " ";
echo $_POST["ln"];
echo"<br>";
echo "Address : </b> ";
echo $_POST["addr"];
echo"<br>";
echo "<b>E-mail Id: </b>";
echo $_POST["email"];
echo"<br>";
echo "<b>Contact no : </b>";
echo $_POST["cn"];
echo"<br>";
echo "</div>";
echo "<hr>";
echo '<div style="background-color:'.$Colo.'">'.$txt1.'</div>';
echo "<div style='line-height:25px'>";
echo "<p>Seeking to work as a key player in a challenging and creative environment in an esteemed organization where I can utilize my abilities and have the opportunity for professional growth, which in turn leads to the growth of the organization.</p>";
echo "</div>";
echo '<div style="background-color:'.$Colo.'">'.$txt2.'</div>';
echo"<br>";
echo"Name: ";
echo $_POST["fn"];
echo " ";
echo $_POST["mn"];
echo " ";
echo $_POST["ln"];
echo"<br><br>";
echo"Date Of Birth : ";
echo $_POST["dob"];
echo"<br><br>";
echo"Nationality: ";
echo $_POST["nat"];
echo"<br><br>";
echo"Maritial status : ";
echo $_POST["ms"];
echo"<br><br>";
echo"Gender : ";
echo $_POST["gen"];
echo"<br><br>";
echo"Languages Known : ";
if(!empty($_POST["lang"]))
{
foreach($_POST["lang"] as $value)
{
echo($value);
echo(", ");
}
}
echo"<br><br>";
echo"Hobbies & Interest : ";
echo $_POST["hobbi"];
echo"<br><br>";

echo '<div style="background-color:'.$Colo.'">'.$txt3.'</div>';
echo "<div style='line-height:25px'>";

echo"<ul>";
if(!empty($_POST["edua1"]))
{
echo"<li>";
echo "Complated ";
echo $_POST["edua1"];
echo " from ";
echo $_POST["edua2"];
echo " board with ";
echo $_POST["edua3"];
echo "  % .";
echo"</li>";
}

if(!empty($_POST["edub1"]))
{
echo"<li>";
echo "Complated ";
echo $_POST["edub1"];
echo " from ";
echo $_POST["edub2"];
echo " board with ";
echo $_POST["edub3"];
echo "  % .";
echo"</li>";
}

if(!empty($_POST["educ1"])){
echo"<li>";
echo "Complated ";
echo $_POST["educ1"];
echo " with ";
echo $_POST["educ2"];
echo "  % .";
echo"</li>";
}

if(!empty($_POST["edud1"])){
echo"<li>";
echo "Complated ";
echo $_POST["edud1"];
echo " with ";
echo $_POST["edud2"];
echo "  % .";
echo"</li>";
}
echo"</ul>";

echo"<br>";
echo "</div>";


echo '<div style="background-color:'.$Colo.'">'.$txt4.'</div>';
echo "<div style='line-height:25px'>";
echo"<ul>";
if(!empty($_POST["wea1"])){
echo"<li>";
echo "Worked in ";
echo $_POST["wea1"];
echo " as ";
echo $_POST["wea2"];
echo " for ";
echo $_POST["wea3"];
echo "  years.";
echo"</li>";
}

if(!empty($_POST["web1"])){
echo"<li>";
echo "Worked in ";
echo $_POST["web1"];
echo " as ";
echo $_POST["web2"];
echo " for ";
echo $_POST["web3"];
echo "  years.";
echo"</li>";
}

if(!empty($_POST["wec1"])){
echo"<li>";
echo "Worked in ";
echo $_POST["wec1"];
echo " as ";
echo $_POST["wec2"];
echo " for ";
echo $_POST["wec3"];
echo "  years.";
echo"</li>";
}

if(!empty($_POST["wed1"])){
echo"<li>";
echo "Worked in ";
echo $_POST["wed1"];
echo " as ";
echo $_POST["wed2"];
echo " for ";
echo $_POST["wed3"];
echo "  years.";
echo"</li>";
}
echo"</ul>";
echo"<br>";
echo "</div>";
echo '<div style="background-color:'.$Colo.'">'.$txt5.'</div>';
echo "<p>I hereby declare that the information furnished above is true to the best of my knowledge.</p>";
echo"<br><br>";
echo "Date :";
echo date("d/m/y");
echo"<br><br>";
echo "Place :";
echo"<br><br>";
echo'<div style="text-align:'.$align.'">';
echo $_POST["fn"];
echo " ";
echo $_POST["mn"];
echo " ";
echo $_POST["ln"];
echo "</div>";
echo"<br><br>";
echo "</div>";
echo "</div>";
echo "</div>";
?>