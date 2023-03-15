<html lang="en">
                        <head>
                          <title>Bootstrap Example</title>
                          <meta charset="utf-8">
                          <meta name="viewport" content="width=device-width, initial-scale=1">
                           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   <script src="./public/js/toastr.min.js"> </script>
           
    <link href="./public/css/toastr.min.css" rel="stylesheet">                         


</head>
                         <body>
 <?php require_once('header.php')  ?>               
<div class="container">
<h2>listarVehiculos</h2> 

     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalinsertV">
  Agregrar  vehiculo
</button>
<div class="table-responsive">
   <table class="table">
      <thead>
         <tr>
            <th>id</th>
            <th>placa</th>
            <th>color</th>
            <th>marca</th>
            <th>tipo_vehiculo</th>
            <th>conductor</th>
            <th>propietario</th>
        
<th>eliminar</th>
         </tr>
      </thead>
      <tbody class="tablevehiculos"> 
     
      </tbody>
   </table>
</div>
<div id="myModalinsertV" class="modal fade" role="dialog">
<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title">insert Vehiculos </h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         
      </div>
      <div class="modal-body">
         <form  id ="vehiculos"  class="needs-validation" novalidate>
         
         <div class="form-group">
            <label for="placa">placa:</label>
            <input type="text" class="form-control" id="placa" placeholder="Enter placa" name="placa" required>
     <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>          
</div>
         <div class="form-group">
            <label for="color">color:</label>
            <input type="text" class="form-control" id="color" placeholder="Enter color" name="color" required>
         </div>
         <div class="form-group">
            <label for="marca">marca:</label>
            <input type="text" class="form-control" id="marca" placeholder="Enter marca" name="marca" required> 
     <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>          
</div>
         <div class="form-group">
            <label for="tipo_vehiculo">tipo_vehiculo:</label>
            <select  class="form-control" id="tipo_vehiculo" name="tipo_vehiculo" required>
           <option value=""> seleccione </option>            
<option value="publico">publico </option>
            <option value="publico">privado </option>           
   </select>
         
     <div class="invalid-feedback">
                    selecione  un valor
                     </div> 
</div>
         <div class="form-group">
            <label for="conductor_id">conductor:</label>
             <select class="form-control" id="conductor_id" name="conductor_id" required>
 <option value=''> seleccione </option>
                </select>
 <div class="invalid-feedback">
                    selecione  un valor
                     </div> 
         </div>
         <div class="form-group">
            <label for="propietario_id">propietario:</label>
             <select class="form-control" id="propietario_id"  name="propietario_id" required>
            <option value=''> seleccione </option>
</select>
   <div class="invalid-feedback">
                    selecione  un valor
                     </div>          
</div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
   <button type="button" class="btn btn-primary" id="saveVehiculo">Guardar</button>
      </div>
   </div>
</div>


 <script src="./public/js/vehiculos.js"> </script> 
                        </body>
                        </html>