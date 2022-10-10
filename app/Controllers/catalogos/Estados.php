<?php

namespace App\Controllers\Catalogos;
use App\Controllers\BaseController;
use App\Models\Mestados;

class Estados extends BaseController
{
    public function index()
    {
        $estados = new Mestados();
        $respuesta =  $estados->findAll();

        $datos = array(
            'estados' => $respuesta 
        );

        return view('catalogos/estados/listado',$datos);
    }

    public function nuevo()
    {
        return view('catalogos/estados/nuevo');
    }

    public function guardar()
    {
        $estado = $this->request->getPost('estado');
        $idpais = $this->request->getPost('idpais');

        $datos = array(
            'estado' => $estado,
            'idpais' => $idpais 
        );
        
        $estados = New Mestados();
        $respuesta = $estados->insert($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/catalogos/estados');          
        }

    }
}
