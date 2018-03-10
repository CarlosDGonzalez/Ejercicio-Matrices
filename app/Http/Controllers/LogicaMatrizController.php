<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicaMatrizController extends Controller
{
    
    public function gestionMatriz(Request $request)
    {
        $datoBusqueda = $request->input('datoBusqueda');
	    	$buscador = $request->input('buscador');
	    	$bandera=0;
	        
	    	$datos=[];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Gonzalez','edad'=>'17','pais'=>'Colombia','profesion'=>'Estudiante'];
	    	$datos[]=['nombres'=>'Juan','apellidos'=>'Hernandez','edad'=>'34','pais'=>'Venezuela','profesion'=>'Estudiante'];
	    	$datos[]=['nombres'=>'Manuel','apellidos'=>'Martinez','edad'=>'18','pais'=>'Colombia','profesion'=>'Bombero'];
	    	$datos[]=['nombres'=>'Carlos','apellidos'=>'Garcia','edad'=>'22','pais'=>'Chile','profesion'=>'Bombero'];
	    	$datos[]=['nombres'=>'Hugo','apellidos'=>'Gordillo','edad'=>'45','pais'=>'Argentina','profesion'=>'Profesor'];
	    	$datos[]=['nombres'=>'Dora','apellidos'=>'Bernal','edad'=>'47','pais'=>'USA','profesion'=>'Astronauta'];
	    	$datos[]=['nombres'=>'Camilo','apellidos'=>'Gonzalez','edad'=>'23','pais'=>'Mexico','profesion'=>'Policia'];
	    	$datos[]=['nombres'=>'Tatiana','apellidos'=>'Pachon','edad'=>'19','pais'=>'España','profesion'=>'Comerciante'];
	    	$datos[]=['nombres'=>'Jose','apellidos'=>'Benitez','edad'=>'72','pais'=>'Italia','profesion'=>'Comerciante'];
	    	$datos[]=['nombres'=>'Natalia','apellidos'=>'Velasquez','edad'=>'17','pais'=>'Francia','profesion'=>'Estudiante'];
	      
	    	$info=[
	    		'datos'=>$datos,
	    		'buscador'=>$buscador,
	    		'datoBusqueda'=>$datoBusqueda
	    	];
	    	
	    return view('contenido',$info);
	}
}
