<?php 
// open connection
	$conn = mysqli_connect("localhost","root","","ecoma");
	if(!$conn){
		die('cannot connecto to server');
	}