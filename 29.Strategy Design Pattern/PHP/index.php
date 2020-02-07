<?Php include 'inc/header.Php';?>
<?Php


//Strategy Design Pattern



spl_autoload_register(function($class){

	   include 'classes/'.$class.".Php";
});



$user = new User();
$msg = $user->getMsg();

switch ($msg ) {

	case 'email':
		$objmsg = new SendEmail();
		break;
	case 'sms':
		$objmsg = new SendSms();
		break;
	case 'fax':
		$objmsg = new SendFax();
		break;
 
}

$objmsg->notification();

 


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>