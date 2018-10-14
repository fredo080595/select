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


    <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="dato.php" method="post">
                  <div class="form-group row">
                    <label for="exampleFormControlSelect1 col-sm-2" >Example select</label>
                    <select class="form-control  " id="exampleFormControlSelect1" name="dato">
                      <option selected>buscar</option>
                      <?php foreach ($dato as $value): ?>
                      <option value="<?php echo $value['nom_libro']; ?>" ><?php echo $value['nom_libro']; ?></option>
                        <?php endforeach ?>
                    </select>
                    <button class="btn btn-primary" type="submit">enviar</button>
                  </div>

            </form>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
    </div>
</div>





<script>
	$(document).ready(function(){

		$('#exampleFormControlSelect1').select2();
	});

</script>

</body>
</html>