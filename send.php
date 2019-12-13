<?php



	echo "<script>alert('111')</script>";
include "db.php";
$id = $_POST['id'];
$name = $_POST['head'];
$text = $_POST['linesbox'];
$type = $_POST['type'];
if ($type == 'INSERT')
	$query= "INSERT INTO `tasks` (task_name,description) VALUES ('$name','$text')";
if ($type == 'UPDATE')
	$query= "UPDATE `tasks` SET `task_name`='$name',`description`='$text' WHERE `task_id`=$id";
//echo "$query <br>";
$result  =  mysqli_query( $link,  $query );


if ($result == true){
	echo "Информация занесена в базу данных";
}else{
	echo "Информация не занесена в базу данных";
	
}
//*/
mysqli_close( $link );//

?>