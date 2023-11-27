<!DOCTYPE html>
<html lang="en">
<head>
	<title>AJAX/JSON</title>
	<script>

		// We create the HTTP Object
		var http = new XMLHttpRequest();

		function getUsers(){

			if(http){

			}
		}

		function handleHttpResponse(){


		}



	</script>
</head>
<body onload="getUsers()">
	<h3>The List</h3>
	<div id="list"></div>
	<hr/>
	<h3>Add to the list</h3>
	First name: <input type="text" id="first" />
	Last name: <input type="text" id="last" />
	<input type="submit" value="Add Name to List"> </button>
</body>
</html>