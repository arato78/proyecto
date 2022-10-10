<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\View;

class Acceso extends BaseController
{
    public function index()
    {
        
        return view('acceso');

    }
}
