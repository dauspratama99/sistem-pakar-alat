<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='db_fotocopy_cbr';
$con=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($con->connect_error) {
	die('Connect Error ('.$con->connect_errno.')'.$con->connect_error);
}
?>