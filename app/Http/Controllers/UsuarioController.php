<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
	    return view('usuario.index',
	    [
	    	'usuarios' => User::latest()->paginate('5')
	    ]);
    }
}
