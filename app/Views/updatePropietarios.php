

  

<div class="container">
  
   <h2> updatepropietarios</h2>
   <form id="FormupadteP" class="needs-validation" novalidate >
               <input type="hidden"  value=<?= $Propietarios['id']  ?> name="id" >
               <div class="form-group">
                  <label for="cedula">cedula:</label>
                  <input type="text" class="form-control" id="cedula"  name="cedula" value=<?= $Propietarios['cedula']  ?>   required>
                 <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>               
</div>
               <div class="form-group">
                  <label for="primer_nombre">primer_nombre:</label>
                  <input type="text" class="form-control" id="primer_nombre"  value=<?= $Propietarios['primer_nombre']  ?>  name="primer_nombre"  required>
                    <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>
               </div>
               <div class="form-group">
                  <label for="segundo_nombre">segundo_nombre:</label>
                  <input type="text" class="form-control" id="segundo_nombre" value=<?= $Propietarios['segundo_nombre']  ?> name="segundo_nombre" required>
               <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>     
           </div>
               <div class="form-group">
                  <label for="apellidos">apellidos:</label>
                  <input type="text" class="form-control" id="apellidos" value=<?= $Propietarios['apellidos']  ?> name="apellidos"  required>
        <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>           
     </div>
               <div class="form-group">
                  <label for="direccion">direccion:</label>
                  <input type="text" class="form-control" id="direccion" value=<?= $Propietarios['direccion']  ?> name="direccion" required>
<div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>               
</div>
               <div class="form-group">
                  <label for="telefono">telefono:</label>
                  <input type="text" class="form-control" id="telefono" value=<?= $Propietarios['telefono']  ?> name="telefono" required>
<div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>               
</div>
               <div class="form-group">
                  <label for="ciudad">ciudad:</label>
                  <input type="text" class="form-control" id="ciudad" value=<?= $Propietarios['ciudad']  ?>  name="ciudad" required>
   <div class="invalid-feedback">
                    este campo  no puede estar  vacio
                     </div>               
</div>
            </div>
 </form>
</div>