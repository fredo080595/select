<div class="container">
	<div class="row">
		<div class="col-sm-4">
			
			
				
			
				  <div class="form-group row">
				    <label for="exampleFormControlSelect1 col-sm-2" >Example select</label>
				    <select class="form-control  " id="exampleFormControlSelect1">
				      <option selected>buscar</option>
				      <?php foreach ($dato as $value): ?>
				      <option><?php echo $value['nombre']; ?></option>
						<?php endforeach ?>
				    </select>
				  </div>
			
		</div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
	</div>
</div>
