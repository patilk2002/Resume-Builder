<?php  
$mar="50px";
$bor="2px solid black";
$Color = "red";
$Colo = "#c4c1bdd1";
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
echo "<h4>";
echo $_POST["fn"];
echo " ";
echo $_POST["mn"];
echo " ";
echo $_POST["ln"];
echo"<br>";
echo "Address : ";
echo $_POST["addr"];
echo"<br>";
echo "E-mail Id:";
echo $_POST["email"];
echo"<br>";
echo "Contact no :";
echo $_POST["cn"];
echo"<br>";
echo "</h4>";
echo "<hr>";
echo '<div style="background-color:'.$Colo.'">'.$txt1.'</div>';
echo "<p>Seeking to work as a key player in a challenging and creative environment in an esteemed organization where I can utilize my abilities and have the opportunity for professional growth, which in turn leads to the growth of the organization.</p>";
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
$edu1=$_POST["ed1"];
$edu2=$_POST["ed2"];
$edu3=$_POST["ed3"];
$edu4=$_POST["ed4"];
if(isset($edu1) && $edu1=="1")
{
echo '<div style="background-color:'.$Colo.'">'.$txt3.'</div>';
echo"<ul>";
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
if(isset($edu2) && $edu2=="1")
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
if(isset($edu3) && $edu=="3")
{
echo"<li>";
echo "Complated ";
echo $_POST["educ1"];
echo " with ";
echo $_POST["educ2"];
echo "  % .";
echo"</li>";
}
if(isset($edu4) && $edu=="4")
{
echo"<li>";
echo "Complated ";
echo $_POST["edud1"];
echo " with ";
echo $_POST["edud2"];
echo "  % .";
echo"</li>";
echo"</ul>";
}
echo"<br><br>";

echo '<div style="background-color:'.$Colo.'">'.$txt4.'</div>';
echo"<ul>";
echo"<li>";
echo "Worked in ";
echo $_POST["wea1"];
echo " as ";
echo $_POST["wea2"];
echo " for ";
echo $_POST["wea3"];
echo "  years.";
echo"</li>";
echo"<li>";
echo "Worked in ";
echo $_POST["web1"];
echo " as ";
echo $_POST["web2"];
echo " for ";
echo $_POST["web3"];
echo "  years.";
echo"</li>";
echo"<li>";
echo "Worked in ";
echo $_POST["wec1"];
echo " as ";
echo $_POST["wec2"];
echo " for ";
echo $_POST["wec3"];
echo "  years.";
echo"</li>";
echo"<li>";
echo "Worked in ";
echo $_POST["wed1"];
echo " as ";
echo $_POST["wed2"];
echo " for ";
echo $_POST["wed3"];
echo "  years.";
echo"</li>";
echo"</ul>";
echo"<br><br>";
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