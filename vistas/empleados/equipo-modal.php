<!DOCTYPE html>
<html>
	<head>
	  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
	</head>
	<body>
		<div class="modal-dialog" role="document">
		    <div class="modal-content bg-modal">
		      <div class="modal-header">
		      <h5 class="modal-title" id="modalLabel">Agregar equipo</h5>
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		      </div>
		  	
			  	<form action=""></br>
			        <div class="form-row justify-content-center">
			        	<div class="col-lg-5">
			            	<label>Equipo</label>
			            	<input type="text" name="equipo-name" class="form-control" placeholder="Nombre" required>
				        </div>
			          	<div class="col-lg-5">
                			<label>Oficial a Cargo</label>
	                		<select name="empresa" class="form-control">
	                  			<option selected> Baez Juan</option>
	                  			<option>Padilla Hernesto</option>
	                   			<option>Pintos Maximiliano</option>
	                    		<option>Carranza</option>
	                		</select>
              			</div>
              		</div>
              		<div class="form-row justify-content-center">
              			<div class="col-lg-5">
			                <label>Ayudante 1</label>
			                <select name="empresa" class="form-control">
			                	<option> Molina Juan</option>
			                	<option>Calvo Carlos</option>
			                	<option>Pintos Ramon</option>
			                    <option>Carranza Roberto</option>
			                </select>
              			</div>
              			<div class="col-lg-5">
                			<label>Ayudante 2</label>
                			<select name="empresa" class="form-control">
                   				<option selected> Molina Juan</option>
                  				<option>Calvo Carlos</option>
                   				<option>Pintos Ramon</option>
                    			<option>Carranza Roberto</option>
                			</select>
              			</div>
              		</div></br>
			        <div class="form-row justify-content-end">
			            <div class="col-lg-6">
			            	<button class="btn btn-secondary" type="button" class="close" data-dismiss="modal" aria-label="Close">Cancelar</button>
			            	<button class="btn btn-primary" type="submit">Guardar</button>
			          	</div>
			        </div></br>
			    </form>
			</div>
		</div>
	</body>
</html>