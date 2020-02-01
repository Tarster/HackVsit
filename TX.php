<?php
/*This file should receive a link somethong like this: http://noobix.000webhostapp.com/TX.php
If you paste that link to your browser, it should update b1 value with this TX.php file. Read more details below.
The ESP will send a link like the one above but with more than just b1. It will have b1, b2, etc...
*/

require('db.php'); 	//We include the database_connect.php which has the data for the connection to the database
$query = 'Select * from ESP';

//Get all the values form the table on the database
$result = mysqli_query($conn,$query);	//table select is ESPtable2, must be the same on yor database

//Loop through the table and filter out data for this unit id equal to the one taht we've received. 

 $row = mysqli_fetch_all($result,MYSQLI_ASSOC);

 foreach($row as $row)
{
        $b1 = $row['BUTTON1'];	
		$b2 = $row['BUTTON2'];	
		$b3 = $row['BUTTON3'];
		$b4 = $row['BUTTON4'];	
}

echo "_b1$b1##_b2$b2##_b3$b3##_b4$b4##";
?>




