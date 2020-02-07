<?Php include 'inc/header.Php';?>
<?Php


//bindValue() and bindParam()

$dsn = "mysql:dbname=userdata;host:localhost;";
$user = "root";
$pass = "";

try{

    $pdo = new PDO($dsn, $user, $pass);

}catch(PDOexception $e){

    echo "connection fail.....".$e->getMessage();

}


$name = "Ivan habib pro";
$email = "ivan@gmail.com";
$skill = "PHP";

/*
  pdo calss er bindParam() method ti reference hisebe shodo variable pass kore, bindValue() method ti reference hisebe variable and value 2ta e pass kore,,,,,,,

*/

$sql = "insert into tbl_user(name, email, skill) values(:name, :email, :skill)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':name',$name);
$stmt->bindValue(':email',$email);
$stmt->bindValue(':skill',$skill);

$stmt->execute();


 


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>