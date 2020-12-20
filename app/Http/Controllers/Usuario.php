<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    private $data = [];

    public function lista() {


        $this->data['main'] = 'usuario_lista';

        return view('usuario', $this->data);
    }
}
