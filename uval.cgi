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

read (STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
@pairs = split(/&/, $buffer);
foreach $pair (@pairs)
{
	($name, $value) = split(/=/, $pair);
	$value =~ tr/+/ /;
	$value =~ s/%([a-fA-F0-9] [a-fA-F0-9])/pack("C", hex($1))/eg;
	$value =~ s/~!/ ~!/g;
	$FORM{$name} = $value;
}

$username= $FORM{'fn'};
$upass= $FORM{'pass'};


print "<br><h1 style='color:#ff9800;'><center>Hello $username your details</center></h1><hr>";
print "<center><h2>Name : $username $upass<br><br> D.O.B.: $upass<br><br> Your Age is : $upass </h2></center><hr>";
print "<br><h1 style='color:#ff9800;'><center>The File created and the data is stored on database </center></h1><hr>";

my($uname,$pass);
print("<br> Username    Password <br><br>");
# loop through each row of the result set, and print it
while(($uname,$pass) = $sth->fetchrow()){
print("$uname, $pass<br>");  
# Comparing the strings using eq operator

if ( $uname eq $username && $pass eq $upass)
{
    print("login success");


    
}


}
$sth->finish();
$dbh->disconnect();


print "</body>";
print "</html>";