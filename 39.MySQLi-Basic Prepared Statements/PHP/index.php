<?Php include 'inc/header.Php';?>
<?Php


//MySQLi-Basic Prepared Statements

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
    echo "Connectin fail........<br/>";
    exit();
}else{
   echo "Connection sucessfull......<br/>";
}

 
$sql = "select name, skill from tbl_user order by id";
$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->bind_result($name, $skill);

while($stmt->fetch()){

     echo "$skill<br/>";
}

 
 

 



















?>
<?Php include 'inc/footer.Php';?>