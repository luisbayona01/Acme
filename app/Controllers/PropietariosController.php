<?php 
                      namespace app\Controllers;

                      use app\Models\ Propietarios
;
                      class PropietariosController {
                        Public static function addPropietarios()
    {
        $ModeloPropietarios = new Propietarios();
        
        $cedula = $_POST['cedula'];
        $ModeloPropietarios->setCedula($cedula);
        $primer_nombre = $_POST['primer_nombre'];
        $ModeloPropietarios->setPrimer_nombre($primer_nombre);
        $segundo_nombre = $_POST['segundo_nombre'];
        $ModeloPropietarios->setSegundo_nombre($segundo_nombre);
        $apellidos = $_POST['apellidos'];
        $ModeloPropietarios->setApellidos($apellidos);
        $direccion = $_POST['direccion'];
        $ModeloPropietarios->setDireccion($direccion);
        $telefono = $_POST['telefono'];
        $ModeloPropietarios->setTelefono($telefono);
        $ciudad = $_POST['ciudad'];
        $ModeloPropietarios->setCiudad($ciudad);
        //$respuesta;
        
        
        if ($ModeloPropietarios->addPropietarios() == '1') {
            $respuesta = 'operacion exitosa';
        }
        
        $Response = array(
            'respuesta' => $respuesta
        );
        $json     = json_encode($Response);
        return $json;
    }
    public static function deletePropietarios()
    {
        $ModeloPropietarios = new Propietarios();
       $id   = $_POST['id'];
      $ModeloPropietarios->setId($id);
  
if ($ModeloPropietarios->deletePropietarios() == '1') {
            $respuesta = 'operacion exitosa';
        }
        
        $Response = array(
            'respuesta' => $respuesta
        );
        $json     = json_encode($Response);
        return $json;
  
    }
    public static function mostrarPropietarios()
    {
        $ModeloPropietarios = new Propietarios();
        $datajson          = json_encode($ModeloPropietarios->Listar_Propietarios());
  //var_dump($datajson);        
return $datajson;
    }
    public static function editPropietarios()
    {   $id=$_POST['id'];
        $ModeloPropietarios = new Propietarios();
        $ModeloPropietarios->setId($id);          
       $datosP = $ModeloPropietarios->editPropietarios(); 
     return $datosP;    
}
    public static function updatePropietarios()
    {
        $ModeloPropietarios = new Propietarios();
        $id            = $_POST['id'];
        $cedula            = $_POST['cedula'];
        $ModeloPropietarios->setCedula($cedula);
        $primer_nombre = $_POST['primer_nombre'];
        $ModeloPropietarios->setPrimer_nombre($primer_nombre);
        $segundo_nombre = $_POST['segundo_nombre'];
        $ModeloPropietarios->setSegundo_nombre($segundo_nombre);
        $apellidos = $_POST['apellidos'];
        $ModeloPropietarios->setApellidos($apellidos);
        $direccion = $_POST['direccion'];
        $ModeloPropietarios->setDireccion($direccion);
        $telefono = $_POST['telefono'];
        $ModeloPropietarios->setTelefono($telefono);
        $ciudad = $_POST['ciudad'];
        $ModeloPropietarios->setCiudad($ciudad);
        $ModeloPropietarios->setid($id);
        
      if ($ModeloPropietarios->updatePropietarios() == '1') {
            $respuesta = 'operacion exitosa';
        }
        
        $Response = array(
            'respuesta' => $respuesta
        );
        $json     = json_encode($Response);
        return $json;
    }
}