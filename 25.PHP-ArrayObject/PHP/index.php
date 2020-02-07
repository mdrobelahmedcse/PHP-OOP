<?php include 'inc/header.php';?>
<?php


//PHP ArrayObject


$arr = array("HTML","CSS","JAVASCRIPT","PHP");
$coding = new ArrayObject($arr);
$coding->append("JAVA");
$iterator = $coding->getIterator();
while($iterator->valid()){

	echo $iterator->current()."<br/>";
	$iterator->next();
}
 


 
 
 

 



















?>
<?php include 'inc/footer.php';?>