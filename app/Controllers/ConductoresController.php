<?php
namespace app\Controllers;

use app\Models\Conductores;
class ConductoresController
{
    Public static function addConductores()
    {
        $ModeloConductores = new Conductores();
        
        $cedula = $_POST['cedula'];
        $ModeloConductores->setCedula($cedula);
        $primer_nombre = $_POST['primer_nombre'];
        $ModeloConductores->setPrimer_nombre($primer_nombre);
        $segundo_nombre = $_POST['segundo_nombre'];
        $ModeloConductores->setSegundo_nombre($segundo_nombre);
        $apellidos = $_POST['apellidos'];
        $ModeloConductores->setApellidos($apellidos);
        $direccion = $_POST['direccion'];
        $ModeloConductores->setDireccion($direccion);
        $telefono = $_POST['telefono'];
        $ModeloConductores->setTelefono($telefono);
        $ciudad = $_POST['ciudad'];
        $ModeloConductores->setCiudad($ciudad);
        //$respuesta;
        
        
        if ($ModeloConductores->addConductores() == '1') {
            $respuesta = 'operacion exitosa';
        }
        
        $Response = array(
            'respuesta' => $respuesta
        );
        $json     = json_encode($Response);
        return $json;
    }
    public static function deleteConductores()
    {
        $ModeloConductores = new Conductores();
       $id   = $_POST['id'];
      $ModeloConductores->setId($id);
  
if ($ModeloConductores->deleteConductores() == '1') {
            $respuesta = 'operacion exitosa';
        }
        
        $Response = array(
            'respuesta' => $respuesta
        );
        $json     = json_encode($Response);
        return $json;
  
    }
    public static function mostrarConductores()
    {
        $ModeloConductores = new Conductores();
        $datajson          = json_encode($ModeloConductores->Listar_Conductores());
  //var_dump($datajson);        
return $datajson;
    }
    public static function editConductores()
    {   $id=$_POST['id'];
        $ModeloConductores = new Conductores();
        $ModeloConductores->setId($id);          
       $datosC = $ModeloConductores->editConductores(); 
     return $datosC;    
}
    public static function updateConductores()
    {
        $ModeloConductores = new Conductores();
        $id            = $_POST['id'];
        $cedula            = $_POST['cedula'];
        $ModeloConductores->setCedula($cedula);
        $primer_nombre = $_POST['primer_nombre'];
        $ModeloConductores->setPrimer_nombre($primer_nombre);
        $segundo_nombre = $_POST['segundo_nombre'];
        $ModeloConductores->setSegundo_nombre($segundo_nombre);
        $apellidos = $_POST['apellidos'];
        $ModeloConductores->setApellidos($apellidos);
        $direccion = $_POST['direccion'];
        $ModeloConductores->setDireccion($direccion);
        $telefono = $_POST['telefono'];
        $ModeloConductores->setTelefono($telefono);
        $ciudad = $_POST['ciudad'];
        $ModeloConductores->setCiudad($ciudad);
        $ModeloConductores->setid($id);
        
      if ($ModeloConductores->updateConductores() == '1') {
            $respuesta = 'operacion exitosa';
        }
        
        $Response = array(
            'respuesta' => $respuesta
        );
        $json     = json_encode($Response);
        return $json;
    }
}