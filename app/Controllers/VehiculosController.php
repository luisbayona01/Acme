<?php
namespace app\Controllers;

use app\Models\Vehiculos;
class VehiculosController
{
    Public static function addVehiculos()
    {
        $ModeloVehiculos = new Vehiculos();
        
        $placa = $_POST['placa'];
        $ModeloVehiculos->setPlaca($placa);
        $color = $_POST['color'];
        $ModeloVehiculos->setColor($color);
        $marca = $_POST['marca'];
        $ModeloVehiculos->setMarca($marca);
        $tipo_vehiculo = $_POST['tipo_vehiculo'];
        $ModeloVehiculos->setTipo_vehiculo($tipo_vehiculo);
        $conductor_id = $_POST['conductor_id'];
        $ModeloVehiculos->setConductor_id($conductor_id);
        $propietario_id = $_POST['propietario_id'];
        $ModeloVehiculos->setPropietario_id($propietario_id);
        //$respuesta;
        
        
        if ($ModeloVehiculos->addVehiculos() == '1') {
            $respuesta = 'operacion exitosa';
        }
        
        $Response = array(
            'respuesta' => $respuesta
        );
        $json     = json_encode($Response);
        return $json;
    }
    public static function deleteVehiculos()
    {
        $id              = $_POST['id'];
        $ModeloVehiculos = new Vehiculos();
        $ModeloVehiculos->setId($id);
        
        if ($ModeloVehiculos->deleteVehiculos() == '1') {
            $respuesta = 'operacion exitosa';
        }
        
        $Response = array(
            'respuesta' => $respuesta
        );
        $json     = json_encode($Response);
        return $json;
    }
    public static function mostrarVehiculos()
    {
        $ModeloVehiculos = new Vehiculos();
        
        
        $datajson = json_encode($ModeloVehiculos->Listar_Vehiculos());
        //var_dump($datajson);        
        return $datajson;
    }
   
}