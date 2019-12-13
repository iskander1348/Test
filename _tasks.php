<script>

window.onload = init;

function init(){
    var addStr = document.getElementById("addLine");

    addStr.onclick = AddLine;
	$("#send").click(function() {
     
        var name = document.getElementById("taskname").innerHTML;
		//alert(name)
        var data = document.getElementById("tasklines").innerHTML;
		//alert(data)
        // если searchString не пустая
        if(send) {
            // делаем ajax запрос
            $.ajax({
                type: "POST",
                url: "send.php",
                data: {head: name, linesbox: data},
                
            });
        }
        return false;
    });
}


function AddLine(){
	
	var line = document.createElement("li");
	var box = document.getElementById("linesbox");
	line.innerHTML = '<label><input class="step" type="checkbox" hidden><span>'+ document.getElementById("IField").value +'</span></label>';
	box.appendChild(line);
}
	

	


	

</script>

<?php


//$id = rand(1000, 10000000);

if (isset($_POST['send'])) {
	echo "<script>alert('111')</script>";
$link = mysqli_connect('localhost', "root", '', 'CRM');
mysql_query("SET NAMES 'cp1251'");
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



?>




<div id = "taskname">
<b> <input id = "head" name="head" type="checkbox" hidden><span>Заголовок</span> </b>
</div>
<div id = "tasklines">
<ul id = "linesbox" name="linesbox">

</ul>
</div>
<input type="button" id="addLine" value="+">

<input type="text" id="IField" placeholder="Введите что-нибудь">
</br>
</br>

<input type="button" name="send" id="send" class="send" value="Записать!">




</ul>

   
 

