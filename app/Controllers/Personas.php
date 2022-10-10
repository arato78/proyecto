<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Mpersonas;

class Personas extends BaseController
{
    public function index()
    {
        $personas = new Mpersonas(); 
        $datos = $personas->listarPersonas();

        $data = [
            "personas" => $datos
        ];

        return view('catalogos/personas',$data); 
    }


    public function agregar(){
        
        return view('agregar');

    }

    public function recibe(){

        $nombre = $this->request->getPost('nombre');
        $materno = $this->request->getPost('materno');
        $paterno = $this->request->getPost('paterno');

        $datos = array(
            'nombre' => $nombre, 
            'paterno' => $paterno,
            'materno' => $materno,
        );

        $personas = new Mpersonas(); 
        $respuesta = $personas->agregar($datos);

        if($respuesta >0 ){
            //Correcto
            return redirect()->to(base_url().'/personas');
        }
        else{
            return redirect()->to(base_url().'/personas');   
        }
    }

    public function editar($id){

        $datos = array(
            'id' => $id
        );

        $personas = new Mpersonas();
        $respuesta = $personas->editar($datos);

        $data = array(
            'personas' => $respuesta
        );

        return view('editar',$data);

    }

    public function actualizar(){

        $id = $this->request->getPost('id');
        $nombre = $this->request->getPost('nombre');
        $materno = $this->request->getPost('materno');
        $paterno = $this->request->getPost('paterno');

        $datos = array(
            'nombre' => $nombre, 
            'paterno' => $paterno,
            'materno' => $materno,
        );

        $personas = new Mpersonas(); 
        $respuesta = $personas->actualizar($id,$datos);

        if($respuesta > 0){
            //Correcto
            return redirect()->to(base_url().'/personas');
        }
        else {
            //Error
            return redirect()->to(base_url().'/personas');
        }

    }


    public function eliminar($id){

        $datos = array(
            'id' => $id
        );

        $personas = new Mpersonas(); 
        $respuesta = $personas->eliminar($datos);

        if($respuesta){
            //Correcto
            return redirect()->to(base_url().'/personas');
        }
        else {
            //Error
            return redirect()->to(base_url().'/personas');
        }

    }
}
