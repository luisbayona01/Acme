
function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}
 var  url=getAbsolutePath();
cargarpropietarios();

function  cargarpropietarios(){
  console.log(url);
let urlpropietariosget=url+'mostrarPropietarios' 
fetch(urlpropietariosget, {
            method: 'get'
           
        })
        .then(response => response.json())
        .then(result => {
     $(".cuerpoTableP").html("");
        for (let propietarios = 0; propietarios < result.length; propietarios++) {
        //console.log(result[propietarios].id);
          //const element = array[index];
        //document.getElementById("")          

						
   
       let rows="<tr>"
                +"<td>"+result[propietarios].id+"</td>"
                +"<td>"+result[propietarios].cedula+"</td>"
                +"<td>"+result[propietarios].primer_nombre+"</td>"
                +"<td>"+result[propietarios].segundo_nombre+"</td>"
                +"<td>"+result[propietarios].apellidos+"</td>"   
                +"<td>"+result[propietarios].direccion+"</td>" 
                +"<td>"+result[propietarios].telefono+"</td>"
                +"<td>"+result[propietarios].ciudad+"</td>"
                +"<td> <button type='button' onclick=showPropietarios("+result[propietarios].id+")  class='btn btn-info'>Editar Propietario</button>       </td>"      
                +"<td> <button type='button' onclick=deletePropietarios("+result[propietarios].id+")  class='btn btn-danger'>Eliminar Propietario</button>       </td>"
               +"</tr>"    
  //console.log(rows);
      $(".cuerpoTableP").append(rows);           
} 
           
        })
        .catch(error => {
            toastr.error("hubo un error al cargar los datos verifique");
            //console.log()
        });
}



function showPropietarios(id){
 //alert(id);
let urlshowconductor= url+'showPropietarios'
$.post( urlshowconductor,  {id: id } ,function( data ) {
  $( "#mostrarPropietario" ).html( data );
 $("#myModalshowPropietario").modal('show');
})

}

 function deletePropietarios(id){
 //alert(id);
 let  urldelete  = url+'deletePropietarios';
const formData = new FormData();

formData.append("id", id);
runajax(urldelete,formData) 


}



$("#GuardarC").click(function(){
  let isValid = document.querySelector('#FormsaveP').reportValidity(); 
if (isValid==false) {
    $('#FormsaveP').addClass('was-validated')
   //return false;
   }else{
    let  urlsave  = url+'addPropietarios';
   let form = document.getElementById("FormsaveP");
    const formData = new FormData(form);
    runajax(urlsave,formData)
    $("#FormsaveP")[0].reset();
    $("#myModalinsertpropietario .close").click()
      //$('#Formsavecond').removeClass('was-validated')
   }


})


$("#UpdateP").click(function(){
//FormupadteC 


 let isValid = document.querySelector('#FormupadteP').reportValidity(); 
if (isValid==false) {
    $('#FormupadteP').addClass('was-validated')
   //return false;
   }else{
  let  urlupdate  = url+'updatePropietarios';
   let form = document.getElementById("FormupadteP");
    const formData = new FormData(form);
    runajax(urlupdate,formData)
    $("#FormupadteP")[0].reset();
    $("#myModalshowPropietario .close").click()
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
           cargarpropietarios();


        })
        .catch(error => {
            toastr.error("hubo un error  porfavor verifique");
            
        });





}



 //

  
   //if (isValid==false) {