<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;       //IMPORTAMOS LA CLASE MAILABLE
use Illuminate\Support\Facades\Mail;    //IMPORTAMOS LA CLASE MAIL

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }
    
    public function store(Request $request){

        $request->validate([
            'asunto'=>'required',
            'name'=>'required',
            'correo'=>'required|email',
            'mensaje'=>'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        //CORREO AL QUE SE DESEA MANDAR EL MSM
        Mail::to('xthewonderlanx25996@gmail.com')->send($correo);
        //Mail::to('administrador@corre.panaderia.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','Tu mensaje ha sido enviado correctamente.');//ENVIANDO CON UNA VARIABLE SESSION
    }

}
