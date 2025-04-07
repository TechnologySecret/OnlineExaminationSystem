<?php
//all the variables defined here are accessible in all the files that include this one

$con= mysqli_connect('localhost','root','','oesm')or die("Could not connect to mysql".mysqli_error($con));

echo "Connection Done";

?>