<?php
////////////////////// MAMP version ///////////////////////

	$dbhost = 'localhost:8889';
	$dbuser = 'root';
	$dbpwd  = 'root';
	$dbname = 'rscomer';  //'<your MAMP database name>';

	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

	if (!$link) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}

//////////////////////////////////////////////////////////

////////////////////// web-4 method /////////////////////

//	$dbhost = 'localhost';
//	$dbuser = '<your CAS user name>';
//	$dbpwd  = '<your CAS user name>';
//	$dbname = '<your CAS user name>_db';
//	
//	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
//
//	if (!$link) {
//		die('Connect Error (' . mysqli_connect_errno() . ') '
//				. mysqli_connect_error());
//	}
?>