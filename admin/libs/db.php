<?php
	$host='localhost';
	$user='root';
	$pass='12345';
	$db='bbuster';
	$link=mysqli_connect($host,$user,$pass,$db) or die('Lỗi kết nối');
	//Dong bo charset (collation)
	mysqli_query($link,'set names utf8');
?>
