function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}

var  url=getAbsolutePath();

cargarvehiculos();

function  cargarvehiculos(){
  //console.log(url);
let urlvehiculosget=url+'mostrarVehiculos' 
fetch(urlvehiculosget, {
            method: 'get'
           
        })
        .then(response => response.json())
        .then(result => {
     $(".tablevehiculos").html("");
        for (let vehiculos = 0; vehiculos < result.length; vehiculos++) {
        //console.log(result[vehiculos].id);
          //const element = array[index];
        //document.getElementById("")          

			
   
       let rows="<tr>"
                +"<td>"+result[vehiculos].id+"</td>"
                +"<td>"+result[vehiculos].placa+"</td>"
                +"<td>"+result[vehiculos].color+"</td>"
                +"<td>"+result[vehiculos].marca+"</td>"
                +"<td>"+result[vehiculos].tipo_vehiculo+"</td>"   
                +"<td>"+result[vehiculos].nombreconductor+"</td>" 
                +"<td>"+result[vehiculos].nombrepropietario+"</td>"
               
  
                +"<td> <button type='button' onclick=deleteVehiculos("+result[vehiculos].id+")  class='btn btn-danger'>Eliminar vehiculo</button>       </td>"
               +"</tr>"    
  //console.log(rows);
      $(".tablevehiculos").append(rows);           
} 
           
        })
        .catch(error => {
            toastr.error("hubo un error al cargar los datos verifique");
            //console.log()
        });
}


cargarconductores();

function  cargarconductores(){
  //console.log(url);
let urlconductoresget=url+'mostrarConductores' 
fetch(urlconductoresget, {
            method: 'get'
           
        })
        .then(response => response.json())
        .then(result => {
     //$("#conductor_id").html("");
        for (let conductores = 0; conductores < result.length; conductores++) {
        //console.log(result[conductores].id);
          //const element = array[index];
        //document.getElementById("")          

						
   
       let rows="<option value="+result[conductores].id+">"+result[conductores].primer_nombre+''+result[conductores].apellidos +  "</option>"
                
                 
  //console.log(rows);
      $("#conductor_id").append(rows);           
} 
           
        })
        .catch(error => {
            toastr.error("hubo un error al cargar los datos  del conductor");
            //console.log()
        });
}

cargarpropietarios();

function  cargarpropietarios(){
  console.log(url);
let urlpropietariosget=url+'mostrarPropietarios' 
fetch(urlpropietariosget, {
            method: 'get'
           
        })
        .then(response => response.json())
        .then(result => {
     //$("#propietario_id").html("");
        for (let propietarios = 0; propietarios < result.length; propietarios++) {
        //console.log(result[propietarios].id);
          //const element = array[index];
        //document.getElementById("")          

				    let rows="<option value="+result[propietarios].id+">"+result[propietarios].primer_nombre+''+result[propietarios].apellidos +  "</option>"		
   

      $("#propietario_id").append(rows);           
} 
           
        })
        .catch(error => {
            toastr.error("hubo un error al cargar los datos verifique");
            //console.log()
        });
}





 function deleteVehiculos(id){
 //alert(id);
 let  urldelete  = url+'deleteVehiculos';
const formData = new FormData();

formData.append("id", id);
runajax(urldelete,formData) 


}



$("#saveVehiculo").click(function(){
  let isValid = document.querySelector('#vehiculos').reportValidity(); 
if (isValid==false) {
    $('#vehiculos').addClass('was-validated')
   //return false;
   }else{
    let  urlsave  = url+'addVehiculos';
   let form = document.getElementById("vehiculos");
    const formData = new FormData(form);
    runajax(urlsave,formData)
    $("#vehiculos")[0].reset();
    $("#myModalinsertV .close").click()
      //$('#Formsavecond').removeClass('was-validated')
   }


})




function runajax(url,data) {
 
fetch(url, {
            method: 'POST',
            body: data
        })
        .then(response => response.json())
        .then(result => {
            //console.log(result);
   toastr.success(result.respuesta);
           cargarvehiculos();


        })
        .catch(error => {
            toastr.error("hubo un error  porfavor verifique");
            
        });





}