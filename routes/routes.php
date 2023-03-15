<?php

require_once 'autoload.php';

require_once __DIR__.'/router.php';

use app\Controllers\PropietariosController;

use app\Controllers\ConductoresController;
use app\Controllers\VehiculosController;


get('/', '/app/views/Conductores.php');
get('/mostrarConductores', function(){
$conductores=  new ConductoresController();

echo  $conductores->mostrarConductores();

});

post('/addConductores', function(){
$conductores=  new ConductoresController();

echo  $conductores->addConductores();

});

post('/deleteConductores', function(){
$conductores=  new ConductoresController();

echo  $conductores->deleteConductores();


});


post('/showconductores', function(){
$conductores=  new ConductoresController();
$Conductores=$conductores->editConductores();

require_once('./app/views/updateconductores.php');  
});
 //
post('/updateConductor', function(){
$conductores=  new ConductoresController();

echo  $conductores->updateConductores();


});

/*propietarios*/


       get('/propietarios', '/app/views/Propietarios.php');
get('/mostrarPropietarios', function(){
$Propietarios=  new PropietariosController();

echo  $Propietarios->mostrarPropietarios();

});

post('/addPropietarios', function(){
$Propietarios=  new PropietariosController();

echo  $Propietarios->addPropietarios();

});

post('/deletePropietarios', function(){
$Propietarios=  new PropietariosController();

echo  $Propietarios->deletePropietarios();


});


post('/showPropietarios', function(){
$Propietarios=  new PropietariosController();
$Propietarios=$Propietarios->editPropietarios();

require_once('./app/views/updatePropietarios.php');  
});
 //
post('/updatePropietarios', function(){
$Propietarios=  new PropietariosController();

echo  $Propietarios->updatePropietarios();


});

/*vehiculos*/
 get('/vehiculos', '/app/views/Vehiculos.php');
  

get('/mostrarVehiculos', function(){
$vehiculos=  new VehiculosController();

echo  $vehiculos->mostrarVehiculos();

});


post('/addVehiculos', function(){
$vehiculos=  new VehiculosController();

echo  $vehiculos->addvehiculos();

});



post('/deleteVehiculos', function(){
$Vehiculos=  new VehiculosController();

echo  $Vehiculos->deleteVehiculos();


});
any('/404','views/404.php');
