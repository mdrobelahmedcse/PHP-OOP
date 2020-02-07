<?Php include 'inc/header.Php';?>
<?Php


//MySQLi-Select/Update Data OO Way

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
    echo "Connectin fail........<br/>";
    exit();
}else{
   echo "Connection sucessfull......<br/>";
}

/*
//select
$sql = "select * from tbl_user";
$result = $db->query($sql);
 
while($data = $result->fetch_object()){

    echo $data->skill."<br/>";

}

*/


//update
$sql = "update tbl_user set skill='Python,C#' where id='1'";
$result = $db->query($sql);


 
 

 



















?>
<?Php include 'inc/footer.Php';?>