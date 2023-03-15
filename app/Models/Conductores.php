<?php
namespace app\Models;
use config\Main;
class Conductores
{
    protected $id;
    public $cedula;
    public $primer_nombre;
    public $segundo_nombre;
    public $apellidos;
    public $direccion;
    public $telefono;
    public $ciudad;
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
        
    }
    public function setPrimer_nombre($primer_nombre)
    {
        $this->primer_nombre = $primer_nombre;
        
    }
    public function setSegundo_nombre($segundo_nombre)
    {
        $this->segundo_nombre = $segundo_nombre;
        
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        
    }
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
        
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    public function addConductores()
    {
        $Main  = new main();
        $sql   = "insert into conductores(cedula,primer_nombre,segundo_nombre,apellidos,direccion,telefono,ciudad) values('" . $this->cedula . "','" . $this->primer_nombre . "','" . $this->segundo_nombre . "','" . $this->apellidos . "','" . $this->direccion . "','" . $this->telefono . "','" . $this->ciudad . "')";
   //echo $sql;        
$Query = $Main->dbAbreDatabase($sql);
        if ($Query) {
            return true;
        } else {
            return false;
        }
    }
    
    public function updateConductores()
    {
        $Main  = new main();
        $sql   = "update  conductores set cedula='" . $this->cedula . "',primer_nombre='" . $this->primer_nombre . "',segundo_nombre='" . $this->segundo_nombre . "',apellidos='" . $this->apellidos . "',direccion='" . $this->direccion . "',telefono='" . $this->telefono . "',ciudad='" . $this->ciudad . "'where id='" . $this->id . "'";
        $Query = $Main->dbAbreDatabase($sql);
        if ($Query) {
            return 1;
        } else {
            return 0;
        }
    }
    public function deleteConductores()
    {
        $Main  = new main();
        $sql   = " delete  from conductores where id='" . $this->id . "'";
        $Query = $Main->dbAbreDatabase($sql);
        if ($Query) {
            return 1;
        } else {
            return 0;
        }
    }
    public function editConductores()
    {
        $Main  = new main();
        $sql   = " select * from conductores where id='" . $this->id . "'";
        $Query = $Main->dbAbreDatabase($sql);
        $rows  = $Main->dbTrareGistro($Query);
        return $rows;
    }
    
    public function Listar_Conductores()
    {
        $Main  = new main();
        $sql   = 'SELECT * FROM conductores';
        $Query = $Main->dbAbreDatabase($sql);
        $data  = array();
        while ($rows = $Main->dbTrareGistro($Query)) {
            $data[] = $rows;
            
        }
        
        return $data;
    }
    
    
}