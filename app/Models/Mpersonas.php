<?php
namespace App\Models;
use CodeIgniter\Model;

class Mpersonas extends Model{
    
    public function listarPersonas(){

        $personas = $this->db->query('select * from personas');
        return $personas->getResult();

    }

    public function agregar($datos){
        
        $personas = $this->db->table('personas');
        $personas->insert($datos);
        return $this->db->insertID();

    }

    public function editar($datos){

        $personas = $this->db->table('personas');
        $personas->where($datos);
        return $personas->get()->getResultArray();  

    }

    public function actualizar($id,$datos){
        
        $personas = $this->db->table('personas');
        $personas->set($datos);
        $personas->where('id',$id);
        return $personas->update();

    }

    public function eliminar($datos){
        
        $personas = $this->db->table('personas');
        $personas->where($datos);
        return $personas->delete();
        
    }


    
}