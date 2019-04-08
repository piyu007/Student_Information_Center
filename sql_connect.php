<?php
mysqli_connect("localhost", "root", "","sample") or die("mysql connection is failure.");
$result = mysqli_query("show databases"); // run the query and assign the result to $result
while($table = mysqli_fetch_array($result)) { // go through each row that was returned in $result
echo($table[0] . "<BR>"); }
?>