<!DOCTYPE html>
<html>
	<head>
	  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
	</head>
	<body>
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content bg-modal">
		      <div class="modal-header">
		      <h5 class="modal-title" id="modalLabel">Agregar empleado</h5>
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		      </div>
		  	
			  	<form action=""></br>
			        <div class="form-row justify-content-center">
			          <div class="col-lg-4">
			            <label>Apellido</label>
			            <input type="text" name="equipo-name" class="form-control" placeholder="Apellido" required>
			          </div>
			          <div class="col-lg-4">
			            <label>Nombre</label>
			            <input type="text" name="equipo-name" class="form-control" placeholder="Nombre" required>
			          </div>
			          <div class="col-lg-2">
			            <label>Dni</label>
			            <input type="number" name="equipo-name" class="form-control" placeholder="Dni" required>
			          </div>
			        </div>
			        <div class="form-row justify-content-center">
			        	<div class="col-lg-4">
			        		<label>Cargo</label>
			        		<select name="empresa" class="form-control">
                   				<option selected> Oficial</option>
                  				<option>Ayudante</option>
                   				<option>Otro</option>
                			</select>
			        	</div>
			        	<div class="col-lg-6">
				            <label>Telefono</label>
				            <input type="number" name="equipo-name" class="form-control" placeholder="Telefono" required>
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