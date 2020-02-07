<?Php include 'inc/header.Php';?>
<?Php


//Prepared Statements with PDO

$dsn = "mysql:dbname=userdata;host:localhost;";
$user = "root";
$pass = "";

try{

    $pdo = new PDO($dsn, $user, $pass);

}catch(PDOexception $e){

    echo "connection fail.....".$e->getMessage();

}


$name = "Abdul bari";
$email = "abdulbari@gmail.com";
$skill = "Codeigniter";


$sql = "insert into tbl_user(name, email, skill) values(?,?,?)";
$stmt = $pdo->prepare($sql);
$arr = array($name,$email,$skill);
$stmt->execute($arr);


/*

$sql = "insert into tbl_user(name, email, skill) values(:name, :email, :skill)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name',$name, PDO::PARAM_STR);
$stmt->bindParam(':email',$email, PDO::PARAM_STR);
$stmt->bindParam(':skill',$skill, PDO::PARAM_STR);

$stmt->execute();

*/
 


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>