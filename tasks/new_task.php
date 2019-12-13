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
	//document.getElementById('head').id = 'head#'+str;
    
	$("#task").keyup(function() {
		  
			
		
		

		res = document.getElementById("task").value.split('\n');
		$('#name').html(res[0]);
		
		$('#linesbox').html('');
		
		for (var i=1; i<res.length; i++){
			if (res[i]!=''){
				var line = document.createElement("li");
				var box = document.getElementById("linesbox");
				line.innerHTML = '<label><input class="step" type="checkbox" hidden><span>'+ res[i] +'</span></label>';
				box.appendChild(line);
			}	
		}
		
	
	})
	
	
	
	
	
	
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
                data: {head: name, linesbox: data ,type:'INSERT'},
				success : function (d){
					//		alert(d); 
					location.reload();
					}
				
                
            });
        }
        return false;
    });
	//*/
}
</script>

<?php
echo '
		
		<table>
		  <tr>
			<td><textarea rows="10" cols="45" id="task"></textarea></td>
			
			<td>
			<div id = "taskname">
			<b> <input id = "head" name="head" type="checkbox" hidden><span><div id="name"></div></span> </b>
				</div>
				<div id = "tasklines">
					<ul id = "linesbox" name="linesbox">

					</ul>
		</div>
			</td>
		  </tr>
		</table>
		<input type="button" id="send" value="Записать!">
		
		

		
		
		
		<div id = "result"></div>
		';
		
?>