<?php
error_reporting(0);
date_default_timezone_set("America/Chicago");
/* $to = "Toly_00100@hotmail.com"; //site admin
$subject = "Viza Mail list";
$msg = "The information was sent!";
$msg = wordwrap($msg,70);
mail($to,$subject,$msg); */

if(isset($_POST['Submit']))
{
	$today = date("Y,m,d");
	$getbday = date("Y,m,d", strtotime($_POST['birthDate']));
	$age = abs($today - $getbday);
	if($age <= 18 && $age >= 13 ){
		echo "You must have a parent's or guardians permission to be on the mailing list.";
	} else if($age < 13){
		echo "Sorry you are not old enough to enter the mailing list! You can still enjoy sound of Viza!<br />";
	} else {
		echo "Thank you for signing up for the Viza mailing list!";
			$to = "Toly_00100@hotmail.com"; //site admin
			$subject = "Viza Mail list";
			$msg = "The information was sent!";
			$msg = wordwrap($msg,70);
			mail($to,$subject,$msg); //send information
			
		echo "<p>Your information:</p>";
		echo '<p>First Name: ' . $_POST['firstName']. '</p>';
		echo '<p>Last Name: ' . $_POST['lastName']. '</p>';
		echo '<p>Birthdate: ' . $_POST['birthDate']. '</p>';
		echo '<p>Email: ' . $_POST['email']. '</p>';
		echo '<p>Phone Number: ' . $_POST['phoneNumber']. '</p>';
		echo '<p>Street Adress: ' . $_POST['street']. '</p>';
		echo '<p>City: ' . $_POST['city']. '</p>';
		echo '<p>State: ' . $_POST['state']. '</p>';
		echo '<p>Zipcode: ' . $_POST['zip']. '</p>';
		echo '<p>Comments: ' . $_POST['comments']. '</p><br />';
		
		echo '<form><p><input type="button" value="Back" onClick="history.go(-1);return true;"></p></form>';
	}
}

?>

