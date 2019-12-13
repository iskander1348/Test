<script>
window.onload = init;
/*
var str           = '';
var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
var charactersLength = characters.length;

for ( var i = 0; i < 8; i++ ) {
      str += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
//alert(str);*/


function init(){
$("#send").click(function() {
     
        var name = document.getElementById("taskname")
			if(name != null)
				name = name.innerHTML;
		//alert(name)
        var data = document.getElementById("tasklines")
			if (data!= null)
				data = data.innerHTML;
		//alert(data)
		var task_id = document.getElementById("taskid").innerHTML
		//alert(id);
        // если searchString не пустая
        if(send) {
            // делаем ajax запрос
            $.ajax({
                type: "POST",
                url: "send.php",
                data: {id: task_id, head: name, linesbox: data ,type:'UPDATE'},
				//success : function (d){//если все ок
				//		alert(d); //запускаем парсер
				//	}
				
                
            });
        }
		document.location = "tasks.php"
        return false;
    });
}



</script>



<?php

$mode = $_GET['mode'];//ADD, GET

$id = $_GET['id'];

include "db.php";

echo '<a href="tasks.php">назад</a><br>';
		$query   =  "SELECT * FROM tasks WHERE `task_id` = '$id'";

		$result  =  mysqli_query( $link,  $query );



		while (  $row  =  mysqli_fetch_row($result)  )
			
		{	
		
			//echo "$row[0].  $row[1]. $row[2]. $row[3]. $row[4]. $row[5] $i <br>";
			
			echo '<table> <tr> <td><div id="taskid" hidden>';
			echo "$row[0]";
			echo '</div>';
			
			echo "<div id = 'taskname'> $row[1] </div><br><br>";
			
			
			echo "<div id = 'tasklines'>$row[3]</div>";
			//echo '</td>	<td><textarea rows="10" cols="45" id="task"></textarea></td></tr></table>';
			echo '<input type="button" id="send" value="Записать!">';
			
		}
mysqli_close( $link );
?>
	
			

