<?php include 'inc/header.php';?>
<?php


//Standard PHP Library - SPL

//https://www.php.net/manual/en/book.spl.php

$arr = array("HTML","CSS","JAVASCRIPT","PHP","AJAX");

$ai = new ArrayIterator($arr);
$ci = new CachingIterator($ai);


foreach ($ci as $value) {
	
	echo $value;

	if ($ci->hasNext()) {
		
		echo ", ";
	}
}

 


 
 
 

 



















?>
<?php include 'inc/footer.php';?>