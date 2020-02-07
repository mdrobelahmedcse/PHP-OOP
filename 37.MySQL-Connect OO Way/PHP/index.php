<?Php include 'inc/header.Php';?>
<?Php


//MySQL-Connect OO Way

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
    echo "Connectin fail........";
    exit();
}else{
   echo "Connection sucessfull......";
}






 
 

 



















?>
<?Php include 'inc/footer.Php';?>