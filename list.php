<?php
require "_header.php";
echo '<textarea rows="10" cols="45" id="task"></textarea>';
echo '<ul id = "linesbox" name="linesbox">	</ul>';
////line.innerHTML = '<a href="https://billy-partners.kontur.ru/Search?EntityId=&EntityType=&SearchString='+res[i]+'" target="_blank"">'+res[i]+'</a>';
require "_footer.php";
?>

<script>
function unique(arr) {
  var obj = {};

  for (var i = 0; i < arr.length; i++) {
    var str = arr[i];
    obj[str] = true; // запомнить строку в виде свойства объекта
  }

  return Object.keys(obj); // или собрать ключи перебором для IE8-
}
$("#task").keyup(function() {
		  
			
		
		

		res = document.getElementById("task").value.split('\n');
		res = unique(res); 
		
		$('#linesbox').html('');
		
		for (var i=0; i<res.length; i++){
			if (res[i]!=''){
				
				var line = document.createElement("li");
				var box = document.getElementById("linesbox");
				line.innerHTML = '<a href="https://billy-partners.kontur.ru/Search?SearchString='+res[i]+'" target="_blank">'+res[i]+'</a>';
				box.appendChild(line);
			}	
		}
		
	
	})
</script>

