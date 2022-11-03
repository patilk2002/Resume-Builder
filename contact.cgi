#!"C:\xampp\perl\bin\perl.exe"
use CGI qw(:cgi);
$whither  = "http://localhost/Resume%20Builder/index.html";
print redirect( -URL     => $whither);

print "Content-type:text/html\n\n";
print "<html>";
print "<head>";
print "<title>login</title>";
print "</head>";
print "<body style='background-color:#312f2f;color:white;border:orange;border-width:3px; border-style:solid;'>";

use DBI;
my $dbh = DBI->connect("DBI:mysql:kiran:localhost",'kiran','pass@123');

if(!$dbh){
 die "failed to connect to MySQL database DBI->errstr()";
}else{
 print("Connected to MySQL server successfully.<br></center>");
}



# Retriving Info
my $sth = $dbh->prepare("SELECT username, password FROM users") or die "prepare statement failed: $dbh->errstr()";
$sth->execute() or die "execution failed: $dbh->errstr()"; 

local ($buffer, @pairs, $pair, $name, $value, %FORM);
# Read in text
$ENV{'REQUEST_METHOD'} =~ tr/a-z/A-Z/;
if ($ENV{'REQUEST_METHOD'} eq "GET") {
   $buffer = $ENV{'QUERY_STRING'};
}
# Split information into name/value pairs
@pairs = split(/&/, $buffer);
foreach $pair (@pairs) {
   ($name, $value) = split(/=/, $pair);
   $value =~ tr/+/ /;
   $value =~ s/%(..)/pack("C", hex($1))/eg;
   $FORM{$name} = $value;
}


$username= $FORM{name};
$email=$FORM{email};
$msg= $FORM{message};

my $p = $dbh->prepare("insert into `contacts` (`Name`,`Email`,`Message`) values (?,?,?)");
$p->execute($username,$email,$msg);
$p->finish();

print "<br><h1 style='color:#ff9800;'><center>Hello $username your details</center></h1><hr>";
print "<center><h2>Name : $username $email<br><br> D.O.B.:$email<br><br> Your Age is : $email</h2></center><hr>";
print "<br><h1 style='color:#ff9800;'><center>The File created and the data is stored on database </center></h1><hr>";

$sth->finish();
$dbh->disconnect();

use CGI qw(:cgi);
$whither  = "http://localhost/Resume%20Builder/index.html";
print redirect( -URL     => $whither);


print "</body>";
print "</html>";