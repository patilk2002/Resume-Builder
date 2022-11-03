#!"C:\xampp\perl\bin\perl.exe"

use CGI qw(:cgi);

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
$first_name = $FORM{first_name};
$last_name  = $FORM{last_name};
$dob=$FORM{bd};
(my $y = $dob) =~ s/(\w+).*/$1/;
$y=int($y);
$age=2021-$y;
print "Content-type:text/html\n\n";
print "<html>";
print "<head>";
print "<title>Age calculater</title>";
print "</head>";
print "<body style='background-color:#312f2f;color:white;border:orange;border-width:3px; border-style:solid;'>";
print "<br><h1 style='color:#ff9800;'><center>Hello $first_name your details</center></h1><hr>";
print "<center><h2>Name : $first_name $last_name <br><br> D.O.B.: $dob <br><br> Your Age is : $age </h2></center><hr>";
print "<br><h1 style='color:#ff9800;'><center>The File created and the data is stored on database </center></h1><hr>";
{
    open my $fh, '>', 'kiran.txt';
    print {$fh} $first_name . "\n";
    print {$fh} $last_name . "\n";
    print {$fh} $dob . "\n";
    print {$fh} $age . "\n";
    close $fh;
}


use DBI;
use strict;


my $dbh = DBI->connect("DBI:mysql:kiran:localhost",'kiran','pass@123');
my $fh;



use Time::Piece;

my $date = localtime->strftime('%m/%d/%Y');
my $file=localtime->strftime('%m.%d.%Y.%H.%M');
print $date;

print $file;

# Opening of File
open($fh, "Resumes/$file.pdf");

# Reading File data and saved in data variable
my $data;
$data .= $_ while <$fh>;

close($fh);

# Just to print the information
#print("\n<center>********************* file data *********************** <br>");
#print("Data: ", $data, "<br>");

# File name
my $file_name = "Resumes/$file.pdf";

if(!$dbh){
 die "failed to connect to MySQL database DBI->errstr()";
}else{
 print("Connected to MySQL server successfully.<br></center>");
}


my($name,$os);


# File Upload Code
my $p = $dbh->prepare("insert into `filedemo` (`fname`,`file`) values (?,?)");
$p->execute($file_name, $data);
$p->finish();

print "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
print "window.open('Resumes/$file.pdf', '_blank');";
print "window.location = 'index.html';";
print "</SCRIPT>";




# Retriving Info
my $sth = $dbh->prepare("SELECT file FROM filedemo where fname='tyco1'") or die "prepare statement failed: $dbh->errstr()";
$sth->execute() or die "execution failed: $dbh->errstr()"; 

# Retriving File from Server
open(FILE, ">" , "tyco1_output.txt");

# Used to output the file contents into another file
while (my $row = $sth->fetchrow()) {
    # Save blob data into this file:
    print FILE $row;   
}
close FILE;



print "</body>";
print "</html>";