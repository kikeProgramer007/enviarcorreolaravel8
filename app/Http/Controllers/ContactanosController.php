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
            'name'=>'required',
            'correo'=>'required|email',
            'mensaje'=>'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('xthewonderlanx25996@gmail.com')->send($correo); //CORREO AL QUE SE DESEA MANDAR EL MSM
        return redirect()->route('contactanos.index')->with('info','mensaje enviado');//ENVIANDO CON UNA VARIABLE SESSION
    }

}
