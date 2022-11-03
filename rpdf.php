<?php  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('vendor/autoload.php');
$data='';
$data .='<div style="border:2px solid black">';
$data .='<div style="margin-left:20px">';
$data .='<div style="margin-right:20px">';
$data .= '<div style="Color:#2196f3;text-align:center;font-size:25px;margin-top:5px;">RESUME</div>';
$data .="<hr>";
$data .= "<div style='line-height:25px'>";
$data .= "<b>";
$data .= $_POST["fn"];
$data .= " ";
$data .= $_POST["mn"];
$data .= " ";
$data .= $_POST["ln"];
$data .="<br>";
$data .= "Address : </b> ";
$data .= $_POST["addr"];
$data .="<br>";
$data .= "<b>E-mail Id: </b>";
$data .= $_POST["email"];
$data .="<br>";
$data .= "<b>Contact no : </b>";
$data .= $_POST["cn"];
$data .="<br>";
$data .= "</div>";
$data .= "<hr>";
$data .= '<div style="background-color:#f3f2ee">Career Objective :</div>';
$data .= "<div style='line-height:25px'>";
$data .= "<p>Seeking to work as a key player in a challenging and creative environment in an esteemed organization where I can utilize my abilities and have the opportunity for professional growth, which in turn leads to the growth of the organization.</p>";
$data .= "</div>";
$data .= '<div style="background-color:#f3f2ee"> personal Information :</div>';
$data .="<br>";
$data .="Name: ";
$data .= $_POST["fn"];
$data .= " ";
$data .= $_POST["mn"];
$data .= " ";
$data .= $_POST["ln"];
$data .="<br><br>";
$data .="Date Of Birth : ";
$data .= $_POST["dob"];
$data .="<br><br>";
$data .="Nationality: ";
$data .= $_POST["nat"];
$data .="<br><br>";
$data .="Maritial status : ";
$data .= $_POST["ms"];
$data .="<br><br>";
$data .="Gender : ";
$data .= $_POST["gen"];
$data .="<br><br>";
$data .="Languages Known : ";

$data .= $_POST["lang"];
//if(!empty($_POST["lang"]))
//{
//foreach($_POST["lang"] as $value)
//{
//$data .=($value);
//$data .=(", ");
//}
//}
$data .="<br><br>";
$data .="Hobbies & Interest : ";
$data .= $_POST["hobbi"];
$data .="<br><br>";

$data .= '<div style="background-color:#f3f2ee"> Educational Qualification :</div>';
$data .= "<div style='line-height:25px'>";

$data .="<ul>";
if(!empty($_POST["edua1"]))
{
$data .="<li>";
$data .= "Complated ";
$data .= $_POST["edua1"];
$data .= " from ";
$data .= $_POST["edua2"];
$data .= " board with ";
$data .= $_POST["edua3"];
$data .= "  % .";
$data .="</li>";
}

if(!empty($_POST["edub1"]))
{
$data .="<li>";
$data .= "Complated ";
$data .= $_POST["edub1"];
$data .= " from ";
$data .= $_POST["edub2"];
$data .= " board with ";
$data .= $_POST["edub3"];
$data .= "  % .";
$data .="</li>";
}

if(!empty($_POST["educ1"])){
$data .="<li>";
$data .= "Complated ";
$data .= $_POST["educ1"];
$data .= " with ";
$data .= $_POST["educ2"];
$data .= "  % .";
$data .="</li>";
}

if(!empty($_POST["edud1"])){
$data .="<li>";
$data .= "Complated ";
$data .= $_POST["edud1"];
$data .= " with ";
$data .= $_POST["edud2"];
$data .= "  % .";
$data .="</li>";
}
$data .="</ul>";

$data .="<br>";
$data .= "</div>";


$data .= '<div style="background-color:#f3f2ee"> Work Experience :</div>';
$data .= "<div style='line-height:25px'>";
$data .="<ul>";
if(!empty($_POST["wea1"])){
$data .="<li>";
$data .= "Worked in ";
$data .= $_POST["wea1"];
$data .= " as ";
$data .= $_POST["wea2"];
$data .= " for ";
$data .= $_POST["wea3"];
$data .= "  years.";
$data .="</li>";
}

if(!empty($_POST["web1"])){
$data .="<li>";
$data .= "Worked in ";
$data .= $_POST["web1"];
$data .= " as ";
$data .= $_POST["web2"];
$data .= " for ";
$data .= $_POST["web3"];
$data .= "  years.";
$data .="</li>";
}

if(!empty($_POST["wec1"])){
$data .="<li>";
$data .= "Worked in ";
$data .= $_POST["wec1"];
$data .= " as ";
$data .= $_POST["wec2"];
$data .= " for ";
$data .= $_POST["wec3"];
$data .= "  years.";
$data .="</li>";
}

if(!empty($_POST["wed1"])){
$data .="<li>";
$data .= "Worked in ";
$data .= $_POST["wed1"];
$data .= " as ";
$data .= $_POST["wed2"];
$data .= " for ";
$data .= $_POST["wed3"];
$data .= "  years.";
$data .="</li>";
}
$data .="</ul>";
$data .="<br>";
$data .= "</div>";
$data .= '<div style="background-color:#f3f2ee">Declaration :</div>';
$data .= "<p>I hereby declare that the information furnished above is true to the best of my knowledge.</p>";
$data .="<br>";
$data .= "Date :";
$data .= date("d/m/y");
$data .="<br><br>";
$data .= "Place :";
$data .="<br><br>";
$data .='<div style="text-align:right">';
$data .= $_POST["fn"];
$data .= " ";
$data .= $_POST["mn"];
$data .= " ";
$data .= $_POST["ln"];
$data .= "</div>";
$data .="<br><br>";
$data .= "</div>";
$data .= "</div>";
$data .= "</div>";
date_default_timezone_set('Asia/Kolkata'); 
$date = date("m.d.Y.G.i"); 

$mpdf=new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4','margin_left' => 10,'margin_right' => 10,'margin_top' => 6,'margin_bottom' => 6,'margin_header' => 0,'margin_footer' => 0]);

$mpdf-> WriteHTML($data);
$pdf=$mpdf ->output('C:\xampp\htdocs\Resume Builder\Resumes/'.$date.'.pdf','F');
// header('location:submit.cgi');
$pdf=$mpdf ->output($date.'.pdf','D');

