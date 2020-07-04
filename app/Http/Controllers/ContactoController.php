<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
    	return view('contacto.index');
    }

    public function store()
    {
    	$msg=request()->validate(
    	[
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:100'

    	]);
        Mail::to('dabliu.682@gmail.com')->queue(new MensajeRecibido($msg));
    	return back()->with('status','Recibimos tu mensaje, te responderemos dentro de las 24 horas siguientes');
    }
}
