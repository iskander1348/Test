








<?php
require "_header.php";

$mode = $_GET['mode'];//ADD, GET

$id = $_GET['id'];

//подключение к БД

include "db.php";


//echo "$mode";
//Добавление ADD
	if ($mode!=GET)
		include "tasks/new_task.php";



//просмотр GET
	if ($mode=='GET') {
	//просмотр задачи
		include "tasks/get_task.php";
		}


		
		
		
		
		



//просмотр (без модификаторов)
	if ($mode!='GET') {
		$query   =  "SELECT * FROM tasks";

		$result  =  mysqli_query( $link,  $query );
		mysqli_close( $link );
		while (  $row  =  mysqli_fetch_row($result)  )
			
		{	$i = count($row);

			echo '<a href="tasks.php?mode=GET&id=';
			echo "$row[0]";
			echo '"> ';
			echo "$row[1]";
			echo ' </a><br>';
		}
	}
//*/




/*




$id = rand(1000, 10000000);
echo "$id";
$name = $_POST['head'];
$text = $_POST['linesbox'];
$query("INSERT INTO `tasks` (name,description) VALUES ('$name','$text')");
$result  =  mysqli_query( $link,  $query );
if ($result == true){
	echo "Информация занесена в базу данных";
}else{
	echo "Информация не занесена в базу данных";
}
/*
$query = "INSERT INTO `tasks`( `name`, `status`, `description`) VALUES ('тест4цедача','2','фыаорловарукеадыгшуырвола')";

mysqli_query($link, $query) ;


$query   =  "SELECT * FROM tasks";

$result  =  mysqli_query( $link,  $query );



while (  $row  =  mysqli_fetch_row($result)  )
	
{	$i = count($row);
    echo "$row[0].  $row[1]. $row[2]. $row[3]. $row[4]. $row[5] $i <br>";
}
//

mysqli_close( $link );
}//*/
//закрытие БД

require "_footer.php";
?>