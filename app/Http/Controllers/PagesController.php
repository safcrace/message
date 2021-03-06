<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreateMessageRequest;


class PagesController extends Controller
{

    public function __construct() {
        $this->middleware('example'/* , ['except' => ['home']] */);
    }
    public function home() {
        return view('home');
    }

    public function contact() {
        return view('contactos');
    }
    
    public function saludo() {

        $nombre = 'Sender';
        return view('saludo', compact('nombre'));
        
    }

    public function mensajes(CreateMessageRequest $request) {

       /*  $this->validate($request, [
            
        ]); */


        return back()->with('info', 'Tu mensaje se ha Enviado correctamente :)');//$request->all();
    }

}

