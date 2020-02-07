<?php include 'inc/header.php';?>
<?php include 'Student.php'; ?>
<?php
 


//Class & Method Existence


if (class_exists('Student')) {
   
    $st = new Student();

	if (method_exists($st, 'describe')) {

        $st->describe();

	}else{

		echo "method not found!";
	}

}else{

    echo "Class not found!";
}//




 





 














?>
<?php include 'inc/footer.php';?>