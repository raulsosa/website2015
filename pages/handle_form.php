<?php
$fname = $_REQUEST['field1'];
$lname = $_REQUEST['field2'];
$email = $_REQUEST['field3'];
$comments = $_REQUEST['field5'];

#echo $fname . ' ' . $lname . ' ' . $email;

echo '<p> Thanks, ' . $fname . ' for the following message <br/>' . $comments 
	. ' we will write to you at the following address: ' . $email;

?>