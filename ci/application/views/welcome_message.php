<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<h4>JS对DOM-ID元素的操作</h4>
<p id="dom_id">JS_DOM_ID操作-现在我要改变字体颜色</p>

<h4>JS对DOM-CLASS元素的操作</h4>
<p class="dom_class">JS_DOM_class操作-现在我要改变字体大小</p>
<p class="dom_class">JS_DOM_class操作-现在我要改变字体大小</p>


</body>
</html>
<script type="text/javascript">


	document.getElementById("dom_id").style.color = "red";


	var array_dom_class = document.getElementsByClassName("dom_class");

	for(var i=0;i<array_dom_class.length;i++){

		array_dom_class[0].style.backgroundColor = "pink";
	}
	array_dom_class[0].style.color="green";
	document.write(array_dom_class.length);




	function select(options){
		var select_div = document.getElementById(options["scrNode"]);
		var select_data = options["data"];
	}


	select({

		scrNode:"select",
		data:["北京","上海","杭州"],
		onChange:(ev)=>{
			console.log(ev.value);
		}



	});


</script>