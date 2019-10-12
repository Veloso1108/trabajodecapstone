<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
   // public function inicio(){
   //     $infoprofe = App\User::all();
   //     return view('welcome', compact('infoprofe'));
   // }

    public function salas(){
        $infosala = App\Sala::all();
        return view('salas',compact('infosala'));
        
    }

    public function disponibilidades(){
        $infodispo = App\Horario::all();
        return view('disponibilidades',compact('infodispo'));
        
    }

    public function profesores(){
        $infoprofe = App\User::all();
        return view('profesores',compact('infoprofe'));

    }
//boton editar
    //public function dispoprofesores($idUsuario){
        //$dispoprofe =App\User::findOrFail($idUsuario);
        //return view('editar.dispoprofe', compact('dispoprofe'));
    //}   
    
//email del profe
    public function dispoprofesores($idUsuario){
        $dispoprofe = App\User::findOrFail($idUsuario);
        return view('editar.dispoprofe',compact('dispoprofe'));
    }
    
    public function crear(Request $request){
        //return $request->all();
        $request->validate([
            'nombres'=> 'required',
            'apellidoPaterno'=> 'required',
            'idCarrera'=> 'required',
            'email'=> 'required',
           
        ]);

        $notanueva = new App\User;
        $notanueva->nombres = $request->nombres;
        $notanueva->apellidoPaterno = $request->apellidoPaterno;
        $notanueva->idCarrera = $request->idCarrera;
        $notanueva->email = $request->email;
        

        $notanueva->save();

        return back()->with('mensajeprofe', 'Profesor Agregado' );
    }
     
    //public function editar($id){
    //    $notaeditarprofe= App\Profesor_1::findOrFail($id);
    //    return view('editarprofe', compact('notaeditarprofe'));
    //}
}


