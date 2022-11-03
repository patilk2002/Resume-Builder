use DBI;
use strict;

my $dbh = DBI->connect("DBI:mysql:kiran:localhost",'kiran','pass@123');

if(!$dbh){
 die "failed to connect to MySQL database DBI->errstr()";
}else{
 print("Connected to MySQL server successfully.\n");
}

# $dbh->disconnect();

my $sth = $dbh->prepare("SELECT username, password FROM users") or die "prepare statement failed: $dbh->errstr()";

$sth->execute() or die "execution failed: $dbh->errstr()"; 

my($id,$name);
print("\n******** Initial Data *********\n");
print("\n Username    Password \n\n");
# loop through each row of the result set, and print it
while(($id,$name) = $sth->fetchrow()){
   print("$id, $name\n");                   
}
$sth->finish();
$dbh->disconnect();