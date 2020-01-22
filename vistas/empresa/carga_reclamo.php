<!DOCTYPE html>
<html lang="es">

    <head>
    <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Inicio</title>
         <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    </head>
       <link rel="stylesheet" href="../css/bootstrap.css">
      
<body> 
    <form>
        <h5>Reclamo</h5>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="nombre">Trabajo</label>
      <input type="text" class="form-control" name="nombre" placeholder="Trabajo">
    </div>
    <div class="form-group col-md-2">
      <label for="Apellido">Fecha de inicio</label>
      <input type="data-time" class="form-control" name="inicio_fecha" placeholder="inicio_fecha">
    </div>
      <div class="form-group col-md-2"> 
          <label for="inputPassword4">Fecha_fin</label>
          <input type="number" class="form-control"  name="fecha_fin"placeholder="fecha_fin">
          
        </div>
      <div class="form-group col-md-2"> 
          <label for="inputPassword4">Descripcion</label>
          <input type="text" class="form-control"  name="descripcion"placeholder="descripcion">
        </div>
      <div class="form-group col-md-2"> 
          <label for="inputPassword4">Estado</label>
          <input type="text" class="form-control"  name="estado"placeholder="Opciones">
        </div>
      <div class="form-group col-md-2"> 
      <button type="sumit" class="btn btn-info">Guardar</button>
      </div>
        </div>
    </form>
    </body>