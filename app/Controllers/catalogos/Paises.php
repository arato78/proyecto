<?php

namespace App\Controllers\Catalogos;
use App\Controllers\BaseController;
use App\Models\Mpaises;

class Paises extends BaseController
{
    public function index()
    {
        $paises = new Mpaises(); 
        $respuesta = $paises->findAll();

        $datos = array(
            'paises' => $respuesta 
        );

        return view('catalogos/paises/listado',$datos);
    }

    public function nuevo()
    {
        return view('catalogos/paises/nuevo');
    }

    public function guardar()
    {
        $pais = $this->request->getPost('pais');

        $datos = array(
            'pais' => $pais, 
        );

        $paises = new Mpaises(); 
        $respuesta = $paises->insert($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/catalogos/paises');
        }
    }

    public function editar($idpais)
    {
        $paises = new Mpaises(); 
        $respuesta =  $paises->where('idpais', $idpais)->first();

        $datos = array(
            'paises' => $respuesta 
        );

        return view('catalogos/paises/editar',$datos);
    }

    public function actualizar()
    {
        $idpais = $this->request->getPost('idpais');
        $pais = $this->request->getPost('pais');

        $datos = array(
            'idpais' => $idpais,
            'pais' => $pais 
        );

        $paises = new Mpaises();
        $respuesta = $paises->update($idpais,$datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/catalogos/paises');
        }
    }
    
}
