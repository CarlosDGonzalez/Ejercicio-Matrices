<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicaMatrizController extends Controller
{
    
    public function gestionMatriz(Request $request)
    {
        $name = $request->input('nombre');
        $apellido = $request->input('apellido');
        $edad = $request->input('edad');
        $telefono = $request->input('telefono');

        $cont1=0;
        $cont2=0;
        $cont3=0;
        $cont4=0;

        $matrizNueva[]=['Carlos','David','Camilo','Andres','Hector','Hugo','Dora','Janeth','Manuel','Jeffrey'];
        $matrizNueva[]=['Carlos1','David1','Camilo1','Andres1','Hector1','Hugo1','Dora1','Janeth1','Manuel1','Jeffrey1'];
        $matrizNueva[]=['Carlos2','David2','Camilo2','Andres2','Hector2','Hugo2','Dora2','Janeth2','Manuel1','Jeffrey2'];

        foreach ($matrizNueva as $key => $nombres) {
            foreach ($nombres as $key => $value) {
                if ($value==$name){
                    $cont1++;
                }
            }
        }

        if($cont1>0){
            echo $name," aparece en la matriz. ";

        }
        if($cont1<1){
            echo $name," no aparece en la matriz. ";

        }

    	$apellidos[]=['Gonzalez','Rodriguez','Perez','Velasquez','Peña','Morales','Flechas','Bernal','Castillo','Sastre'];
    	$apellidos[]=['Gonzalez2','Rodriguez1','Perez1','Velasquez1','Peña1','Morales1','Flechas1','Bernal1','Castillo1','Sastre1'];
    	$apellidos[]=['Gonzalez3','Rodriguez2','Perez2','Velasquez2','Peña2','Morales2','Flechas2','Bernal2','Castillo2','Sastre2'];

        foreach ($apellidos as $key => $ape) {
            foreach ($ape as $key => $value) {
                if ($value==$apellido){
                    $cont2++;
                }
            }
        }

        if($cont2>0){
            echo $apellido," aparece en la matriz. ";

        }
        if($cont2<1){
            echo $apellido," no aparece en la matriz. ";

        }


    	$edades[]=['12','45','12','45','5','34','38','10','25','36'];
    	$edades[]=['32','41','65','78','9','19','34','13','27','41'];
    	$edades[]=['14','56','45','7','23','18','31','14','34','56'];

        foreach ($edades as $key => $age) {
            foreach ($age as $key => $value) {
                if ($value<$edad){
                    $cont3++;
                }
            }
        }

        if($cont3>0){
            echo "Hay ",$cont3," personas menoras a ",$edad," años. ";

        }
        if($cont3<1){
            echo "No hay personas menores a esa edad. ";

        }


    	$telefonos[]=['3138566014','3115152110','3115152110','3138566014','3115152110','3115152210','3138566014','3115152210','3105797937','3115152211'];
    	$telefonos[]=['3105797937','3138566014','3105797937','3115152110','3105797937','3138566014','3115152210','3138566014','3115152211','3115152211'];
    	$telefonos[]=['3105797937','3115152110','3138566014','3115152110','3138566014','3115152210','3105797937','3115152211','3138566014','3115152211'];

        foreach ($telefonos as $key => $tel) {
            foreach ($tel as $key => $value) {
                if ($value==$telefono){
                    $cont4++;
                }
            }
        }

        if($cont4>0){
            echo $telefono," aparece en la matriz. ";

        }
        if($cont4<1){
            echo $telefono," no aparece en la matriz. ";

        }


        return view('welcome');
    }
}
