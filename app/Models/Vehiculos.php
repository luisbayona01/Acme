<?php 
         namespace app\Models;
         use config\Main;    
         class Vehiculos{  
         protected $id;
public $placa;
public $color;
public $marca;
public $tipo_vehiculo;
public $conductor_id;
public $propietario_id;
public function  setPlaca($placa){
          $this->placa=$placa;

         }
public function  setColor($color){
          $this->color=$color;

         }
public function  setMarca($marca){
          $this->marca=$marca;

         }
public function  setTipo_vehiculo($tipo_vehiculo){
          $this->tipo_vehiculo=$tipo_vehiculo;

         }
public function  setConductor_id($conductor_id){
          $this->conductor_id=$conductor_id;

         }
public function  setPropietario_id($propietario_id){
          $this->propietario_id=$propietario_id;

         }

         public function setId($id){
         $this->id= $id;
        }  
        public function addVehiculos(){
            $Main=new main();
            $sql="insert into vehiculos(placa,color,marca,tipo_vehiculo,conductor_id,propietario_id) values('".$this->placa."','".$this->color."','".$this->marca."','".$this->tipo_vehiculo."','".$this->conductor_id."','".$this->propietario_id."')"; 
            $Query= $Main->dbAbreDatabase($sql); 
             if($Query){
               return true;    
             } else{
               return false;
             }
           }

   
           public function deleteVehiculos(){
            $Main=new main();
            $sql=" delete  from vehiculos where id='".$this->id."'"; 
            $Query= $Main->dbAbreDatabase($sql); 
             if($Query){
               return 1;    
             } else{
               return 0;
             }
           } 
       

           public  function Listar_Vehiculos(){
           $Main=new main();
           $sql='SELECT * FROM vehiculospropietariosconductores';
          $Query=$Main->dbAbreDatabase($sql);
           $data=array();
           while($rows=$Main->dbTrareGistro($Query)){
           $data[]=$rows;
          
           }
          
            return $data;
           }    


       }