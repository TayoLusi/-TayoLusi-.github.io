<!DOCTYPE html>
<html>
<title></title>
<body>
<h1></h1>
<p></p>

<div align="center">



<?php
$fname = $_POST['first'];
$lname = $_POST['last'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Street = $_POST['Street'];
$Zip = $_POST['Zip'];
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$ReEnterEmail = $_POST['ReEnterEmail'];
$PhoneNumber = isset($_POST['PhoneNumber']) ? $_POST['PhoneNumber'] : '';
$Password = $_POST['Password'];
$ReEnterPassword = $_POST['ReEnterPassword'];
$Going = isset($_POST['Going']) ? $_POST['Going'] : '';
$Dinner = isset($_POST['Dinner']) ? $_POST['Dinner'] : '';
$PreConference = isset($_POST['PreConference']) ? $_POST['PreConference'] : '';

function CheckEmailAddress($Email)
{
if (filter_var($Email, FILTER_VALIDATE_EMAIL))
	echo "Email address ".$Email." is considered valid.<br />";
else
	echo "Email address ".$Email." is considered not valid.<br />";
}
		
echo"First Name: $fname</br>";
echo"Last Name: $lname</br>";
echo"Address: $Address</br>";
echo"City: $City</br>";
echo"Street: $Street</br>";
echo"Zip: $Zip</br>";
echo"Email: $Email</br>";
echo"ReEnterEmail: $ReEnterEmail</br>";
$result = preg_match("/([0-9]{10})/",$PhoneNumber);
if ($result == 1)
	print"Phone Number: $PhoneNumber<br/>";
else
	print"ERROR: Phone Number doesn't contain 10 digits<br/>";
CheckEmailAddress($Email);		
$firstChar = $Password[0];
$lastChar = substr($Password, -1);
$PasswordLength = strlen($Password);
		
$PassHash1 = md5($Password);
$PassHash2 = md5($ReEnterPassword);
		
if ($PassHash1 != $PassHash2)
	print"Password Does Not Match !</br>";
else{
	print"Password: $firstChar";
	for($counter=2;$counter<$PasswordLength;$counter++)//i is made to be equal to 2, keeps going until i is equal to $PasswordLength, and is added by 1 until the loop ends
				print"*";
	print"$lastChar<br />";
}	

if(!isset($_POST['Going']))
{
	$errorMessage .= "<li>You forgot to select if you are attending the conference!</li>";
}
if(!isset($_POST['Dinner']))
{
	$errorMessage .= "<li>You forgot to select if you are attending the Dinner!</li>";
}
if(!isset($_POST['PreConference']))
{
	$errorMessage .= "<li>You forgot to select if you are attending the PreConference!</li>";
}

$Going0 = "Yes";
$Going1 = "No";
$Cost = 0;
$GoingC = array("$Going0", "$Going1");
$Dinner0 = "None";
$Dinner1 = "20";
$Dinner2 = "40";
$Dinner3 = "60";
$Dinner4 = "80";
$Dinner5 = "100";
$DinnerC = array("$Dinner0","$Dinner1","$Dinner2","$Dinner3","$Dinner4","$Dinner5");
$PreConferece0 = "Yes";
$PreConferece1 = "No";
$PreConferenceC = array("$PreConferece0", "$PreConferece1");


if ($Going == $GoingC[0]) {
	$Cost = $Cost + 50;
}
else {
	$Cost = 0;
}
if ($PreConference == $PreConferenceC[0]) {
	$Cost = $Cost + 5;
}
else {
	$Cost = $Cost;
}

$ExtraTicket = 20*$Dinner ;
$TotalBill = $Cost + $ExtraTicket;

	
echo "Your total bill amount to the IT Conference is: $TotalBill.</br>";

$TheRecord = <<<HERE
$fname,$lname,$Address,$City,$Zip,$Email,$ReEnterEmail,$PhoneNumber,$Password,$ReEnterPassword,$Going,$Dinner,$PreConference \n 
HERE;

//now we obtain a handle on our file
		
$fp = fopen("ITConferenceList.csv", "a");
		
//now we can put the data into the file 
fputs($fp,$TheRecord);
		
//always close your handle
fclose($fp);

chmod("ITConferenceList.csv", 0777);

?>

</div>	
		
</body>
</html>