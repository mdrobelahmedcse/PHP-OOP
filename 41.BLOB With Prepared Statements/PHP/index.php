<?Php include 'inc/header.Php';?>
<?Php


//BLOB With Prepared Statements

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
    echo "Connectin fail........<br/>";
    exit();
}else{
   echo "Connection sucessfull......<br/>";
}

 
$sql = "select image from images where id=?";
$stmt = $db->prepare($sql);
$stmt->bind_param('i', $id);
$id = 5;
$stmt->execute();
$stmt->bind_result($image);
$stmt->fetch();
header("content-type: png");
echo '<img src="data:image/png;base64, '.base64_encode($image).'">';


/*

$sql = "insert into images(image) values(?)";
$stmt = $db->prepare($sql);

$stmt->bind_param("b",$image);
$image = file_get_contents("me.png");
$stmt->send_long_data(0,$image);
$stmt->execute();
 
*/
 
 


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>