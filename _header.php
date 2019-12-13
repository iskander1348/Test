
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
document.onchange = function Checked(){
	if (document.getElementById("head") != null){
	var list = document.getElementsByClassName("step");
	
	var state = true;
	if (list.length == 0)
		state = false;
	for (var i=0; i<list.length; i++){
		if (false == list[i].checked){
			list[i].removeAttribute("checked");
			state = false;
		}
		else
			list[i].setAttribute("checked", true);
	}
	if
	(state){
	document.getElementById("head").checked = state;
	document.getElementById("head").setAttribute("checked", true)
	
	}
	else
	{
	document.getElementById("head").checked = state;
	document.getElementById("head").removeAttribute("checked");
		
	}
	}
}
	
</script>

<head>
  <title>CRM</title>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <style type="text/css">
  input:checked + span {
	text-decoration: line-through
;
   }
  <!--
    html, body { padding: 0px; margin: 0px; }
    .menu { padding: 4px 10px 4px 10px; border-bottom: 3px double #999999; background: #FFFFFF; font-size: 85%; font-weight: bold; }
    p { text-align: justify }
    h1 { font-size: 150%; }
    h2 { font-size: 130%; }
  -->
  
  </style>
  

</head>


<body bgcolor="white" text="#000000" link="#00639C" alink="#ffaa00" vlink="#00437C">
<a href="tasks.php">Задачи</a>
<a href="list.php">списки для билли</a>
<br>
<br>
