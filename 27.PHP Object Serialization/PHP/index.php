<?php include 'inc/header.php';?>
<?php


//php object serialization



spl_autoload_register(function($class){

	   include 'classes/'.$class.".php";
});


$pro = new Programming();
$ser = serialize($pro);

/*
file_put_contents("programming.txt", $ser);
echo $ser;
*/
$getcontent = file_get_contents("programming.txt");
$unser = unserialize($getcontent);

echo "<pre>";
print_r($unser);
echo "</pre>";
 


 
 
 

 



















?>
<?php include 'inc/footer.php';?>