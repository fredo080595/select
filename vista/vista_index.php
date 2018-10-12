<!DOCTYPE html>
<html>
<head>
	<title>select2</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/select2.min.css">
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/select2.min.js"></script>
</head>
<body>


<div id="buscar"></div>




<script>
	$(document).ready(function(){

		$('#buscar').load('buscador/buscador.php');
	});

</script>

</body>
</html>