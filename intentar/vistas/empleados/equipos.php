<!DOCTYPE html>
<html>
	<?php
      require_once "../includes/header.php";
    ?>
<head>
	<title>Equipos</title>
</head>
<body>
	<div class="navbar navbar-light bg-light">
      <!--TITULO DE LA VISTA-->
      <h2><a class="navbar-brand">Equipos</a></h2>
      <div class="form-row justify-content-end">
        <!--FUTURO BUSCADOR A TIEMPO REAL-->
        <div class="col-lg-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
        </div>
        <!--BOTON QUE DESPLAZA EL MODAL PARA AGREGAR EUIPOS-->
        <div class="col-lg-auto">
          <a class="btn btn-primary" data-toggle="modal" href="#euipoModal" role="button" aria-expanded="false" aria-controls="euipoModal">Agregar equipo</a>
        </div>
      </div>
    </div>


    <!--MODAL CON FORMULARIO PARA AGREGAR EMPRESA-->
    <div class="modal fade" id="euipoModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
      <?php
        require_once "../includes/modals/equipo-modal.php";
      ?>
    </div>


    <!--TRABLA DE EMPRESAS-->
    <div class="form-group container-center">
		<table class="table table-striped table-primary table-hover">
		  <thead>
		    <tr>
		      
		      <th scope="col" class="table-danger">Equipo</th>
		      <th scope="col" >Oficial</th>
		      <th scope="col">Ayudante1</th>
		      <th scope="col">ayudante2</th>
		      <th scope="col">Hoja de ruta corespondiente</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td class="table-danger">pepito</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      
		    </tr>
		    <tr>
		  
		      <td class="table-danger">pepito</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		    </tr>
		    <tr>
		      
		      <td class="table-danger">pepito</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		    </tr>
		        <tr>
		      
		      <td class="table-danger">pepito</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		    </tr>
		        <tr>
		      
		      <td class="table-danger">pepito</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		    </tr>
		        <tr>
		      
		      <td class="table-danger">pepito</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		      <td>ejemplo</td>
		    </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>