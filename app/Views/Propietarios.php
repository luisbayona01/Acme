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
   <body >
 <?php require_once('header.php')  ?>
      <div class="container">
      <h2>listarPropietarios</h2> 

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalinsertpropietario">
  Agregrar Propietario
</button>
      <div class="table-responsive">
         <div class="table-responsive">
         <table class="table" id="tablepropietarios">
            <thead>
               <tr>
                  <th>id</th>
                  <th>cedula</th>
                  <th>primer_nombre</th>
                  <th>segundo_nombre</th>
                  <th>apellidos</th>
                  <th>direccion</th>
                  <th>telefono</th>
                  <th>ciudad</th>
 <th>editar </th>                 
 <th>eliminar </th>
               </tr>
            </thead> 
            <tbody  class="cuerpoTableP">
               
            </tbody>
         </table>
      </div> 

      <div id="myModalinsertpropietario" class="modal fade" role="dialog">
      
     <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
<h4 class="modal-title">insertPropietario </h4>               
<button type="button" class="close" data-dismiss="modal">&times;</button>
               
            </div>
            <div class="modal-body">
               <form id="FormsaveP" class="needs-validation" novalidate >
               
               <div class="form-group">
                  <label for="cedula">cedula:</label>
                  <input type="text" class="form-control" id="cedula" placeholder="Enter cedula" name="cedula" required>
                 <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>               
</div>
               <div class="form-group">
                  <label for="primer_nombre">primer_nombre:</label>
                  <input type="text" class="form-control" id="primer_nombre" placeholder="Enter primer_nombre" name="primer_nombre" required>
                    <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>
               </div>
               <div class="form-group">
                  <label for="segundo_nombre">segundo_nombre:</label>
                  <input type="text" class="form-control" id="segundo_nombre" placeholder="Enter segundo_nombre" name="segundo_nombre" required>
               <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>     
           </div>
               <div class="form-group">
                  <label for="apellidos">apellidos:</label>
                  <input type="text" class="form-control" id="apellidos" placeholder="Enter apellidos" name="apellidos" required>
        <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>           
     </div>
               <div class="form-group">
                  <label for="direccion">direccion:</label>
                  <input type="text" class="form-control" id="direccion" placeholder="Enter direccion" name="direccion" required>
<div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>               
</div>
               <div class="form-group">
                  <label for="telefono">telefono:</label>
                  <input type="text" class="form-control" id="telefono" placeholder="Enter telefono" name="telefono" required>
<div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>               
</div>
               <div class="form-group">
                  <label for="ciudad">ciudad:</label>
                  <input type="text" class="form-control" id="ciudad" placeholder="Enter ciudad" name="ciudad" required>
   <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>               
</div>
            </div>
 </form>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
             <button type="button" class="btn btn-primary" id="GuardarC">Guardar</button>
            </div>
         </div>
      </div>  
 </div>  





      <div id="myModalshowPropietario" class="modal fade" role="dialog">
      
     <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               
<button type="button" class="close" data-dismiss="modal">&times;</button>
               
            </div>
            <div class="modal-body" id="mostrarPropietario">
              
          </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
             <button type="button" class="btn btn-primary" id="UpdateP">Guardar</button>
            </div>
         </div>
      </div>
 </div>  


 <script src="./public/js/propietarios.js"> </script>  
   </body>
</html>