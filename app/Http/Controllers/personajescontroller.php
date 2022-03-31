<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personajes;

class personajescontroller extends Controller
{
    
    public function gallery (){
        $publicacion= Publicacion::find(1);
        $n_personaje= $publicacion->personaje;
        $n_actor= $publicacion->actor;
        $p_aparicion= $publicacion->prim_aparicion;
        $sexo= $publicacion->sexo;
        $u_aparicion= $publicacion->ult_aparicion;
        return view ('gallery',['Personaje'=>$n_personajes,'Actor'=>$n_actor,'aparicion'=>$n_aparicion,'Sexo'=>$sexo,'ult_aparicion'=>$u_aparicion]);
    }
    
    
}
