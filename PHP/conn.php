<?php

// phpinfo();
// $conn = @mysqli_connect('localhost','root','root');
 $conn = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'App#cns11643');


if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
 // mysql_select_db('mydb', $conn); 
?>