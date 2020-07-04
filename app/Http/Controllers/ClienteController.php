<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index()
    {
    	return view('cliente.index',
        [
            'clientes' => Cliente::latest()->paginate('10')
        ]);
    }
}
