<?Php include 'inc/header.Php';?>
<?Php


//PDO - PHP Data Objects

$dsn = "mysql:dbname=userdata;host:localhost;";
$user = "root";
$pass = "";

try{

    $pdo = new PDO($dsn, $user, $pass);

}catch(PDOexception $e){

    echo "connection fail.....".$e->getMessage();

}
 
$sql = "select * from tbl_user";
$result = $pdo->query($sql); 

foreach($result as $value){

      echo $value['skill']."<br/>";
}


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>