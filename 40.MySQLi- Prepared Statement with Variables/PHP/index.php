<?Php include 'inc/header.Php';?>
<?Php


//MySQLi- Prepared Statement with Variables

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
    echo "Connectin fail........<br/>";
    exit();
}else{
   echo "Connection sucessfull......<br/>";
}

 
$sql = "insert into tbl_user(name, email, skill) values(?,?,?)";
$stmt = $db->prepare($sql);

$stmt->bind_param('sss',$name, $email, $skill);

$name = "Ariful islam";
$email = "ariful@gmail.com";
$skill = "Blogging";

$stmt->execute();
$stmt->close();
$db->close();

 
 


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>