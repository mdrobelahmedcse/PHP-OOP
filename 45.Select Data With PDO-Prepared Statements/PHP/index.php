<?Php include 'inc/header.Php';?>
<?Php


//Select Data With PDO-Prepared Statements

$dsn = "mysql:dbname=userdata;host:localhost;";
$user = "root";
$pass = "";

try{

    $pdo = new PDO($dsn, $user, $pass);

}catch(PDOexception $e){

    echo "connection fail.....".$e->getMessage();

}


/*

formula: 1

$id = 2;

$sql = "select * from tbl_user where id=:id"; 
$stml = $pdo->prepare($sql);
$stml->execute(array(':id'=>$id));
while($data = $stml->fetch()){

     echo "Name :".$data['name']."<br/>";
     echo "Skill :".$data['skill']."<br/>";
}


*/

 

 
/*

formula: 2

$id =3;

$sql = "select * from tbl_user where id=?"; 
$stml = $pdo->prepare($sql);
$stml->execute(array($id));
while($data = $stml->fetch()){

     echo "Name :".$data['name']."<br/>";
     echo "Skill :".$data['skill']."<br/>";
}


*/



/* 


formula: 3


$id =2;
$skill = "JAVA";

$sql = "select * from tbl_user where id=? and skill=?"; 
$stml = $pdo->prepare($sql);
$stml->bindParam(1,$id);
$stml->bindParam(2,$skill);
$stml->execute();
while($data = $stml->fetch()){

     echo "Name :".$data['name']."<br/>";
     echo "Skill :".$data['skill']."<br/>";
}
 
 
*/

 
/* 

formula: 4

$id =1;
$sql = "select * from tbl_user where id=?"; 
$stml = $pdo->prepare($sql);
$stml->bindValue(1,$id);
$stml->execute();
while($data = $stml->fetch()){

     echo "Name :".$data['name']."<br/>";
     echo "Skill :".$data['skill']."<br/>";
}
 
 
*/
 



















?>
<?Php include 'inc/footer.Php';?>