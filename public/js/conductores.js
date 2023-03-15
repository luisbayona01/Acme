function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}

var  url=getAbsolutePath();
cargarconductores();

function  cargarconductores(){
  //console.log(url);
let urlconductoresget=url+'mostrarConductores' 
fetch(urlconductoresget, {
            method: 'get'
           
        })
        .then(response => response.json())
        .then(result => {
     $(".cuerpoTableC").html("");
        for (let conductores = 0; conductores < result.length; conductores++) {
        //console.log(result[conductores].id);
          //const element = array[index];
        //document.getElementById("")          

						
   
       let rows="<tr>"
                +"<td>"+result[conductores].id+"</td>"
                +"<td>"+result[conductores].cedula+"</td>"
                +"<td>"+result[conductores].primer_nombre+"</td>"
                +"<td>"+result[conductores].segundo_nombre+"</td>"
                +"<td>"+result[conductores].apellidos+"</td>"   
                +"<td>"+result[conductores].direccion+"</td>" 
                +"<td>"+result[conductores].telefono+"</td>"
                +"<td>"+result[conductores].ciudad+"</td>"
                +"<td> <button type='button' onclick=showConductores("+result[conductores].id+")  class='btn btn-info'>Editar Conductor</button>       </td>"      
                +"<td> <button type='button' onclick=deleteConductores("+result[conductores].id+")  class='btn btn-danger'>Eliminar Conductor</button>       </td>"
               +"</tr>"    
  //console.log(rows);
      $(".cuerpoTableC").append(rows);           
} 
           
        })
        .catch(error => {
            toastr.error("hubo un error al cargar los datos verifique");
            //console.log()
        });
}



function showConductores(id){
 //alert(id);
let urlshowconductor= url+'showconductores'
$.post( urlshowconductor,  {id: id } ,function( data ) {
  $( "#mostrarConductor" ).html( data );
 $("#myModalshowConductor").modal('show');
})

}

 function deleteConductores(id){
 //alert(id);
 let  urldelete  = url+'deleteConductores';
const formData = new FormData();

formData.append("id", id);
runajax(urldelete,formData) 


}



$("#GuardarC").click(function(){
  let isValid = document.querySelector('#Formsavecond').reportValidity(); 
if (isValid==false) {
    $('#Formsavecond').addClass('was-validated')
   //return false;
   }else{
    let  urlsave  = url+'addConductores';
   let form = document.getElementById("Formsavecond");
    const formData = new FormData(form);
    runajax(urlsave,formData)
    $("#Formsavecond")[0].reset();
    $("#myModalinsertConductor .close").click()
      //$('#Formsavecond').removeClass('was-validated')
   }


})


$("#UpdateC").click(function(){
//FormupadteC 


 let isValid = document.querySelector('#FormupadteC').reportValidity(); 
if (isValid==false) {
    $('#FormupadteC').addClass('was-validated')
   //return false;
   }else{
  let  urlupdate  = url+'updateConductor';
   let form = document.getElementById("FormupadteC");
    const formData = new FormData(form);
    runajax(urlupdate,formData)
    $("#FormupadteC")[0].reset();
    $("#myModalshowConductor .close").click()
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
           cargarconductores();


        })
        .catch(error => {
            toastr.error("hubo un error  porfavor verifique");
            
        });





}



 //

  
   //if (isValid==false) {