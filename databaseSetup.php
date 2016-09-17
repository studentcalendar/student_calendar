<?php

$user_name = "root";
$password = "hello";
$database = "event_schedule";
$server = "104.197.220.3";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
	//set variables for class tables

	//tb_address_book is the table
	//uerying
	$sql = "SELECT * FROM ". $class_schedule;
	$result = mysql_query($sql);

	//going through everything, can check 'ID' to find right one
	while ( $db_field = mysql_fetch_assoc($result) ) {

		print $db_field['ID'] . "<BR>";
		print $db_field['Name'] . "<BR>";
		print $db_field['Month'] . "<BR>";
		print $db_field['Date'] . "<BR>";
		print $db_field['Year'] . "<BR>";
		print $db_field['Description'] . "<BR>";

	}

	//inserting
	$sql = "INSERT INTO ". $class_schedule. " (Name, Month, Date, Year, Description)
	VALUES ('John', 'Doe', 'john@example.com')";

	//updating
	$sql = "UPDATE ". $class_schedule. " SET email = 'new_email_address' WHERE First_Name = 'Bill' AND Surname = 'Gates'";

	//deleting
	$sql = "DELETE FROM ". $class_schedule ."MyGuests WHERE id=3";

	mysql_close($db_handle);
}
else {
	print "Database NOT Found ";
	mysql_close($db_handle);
}

?>