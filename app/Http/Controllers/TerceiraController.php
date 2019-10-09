<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerceiraController extends Controller
{
    public function terceira(Request $request){

        $dia_d_sem = $request->input('semana');
        $hr_trab = $request->input('hrs_trab');
        $turno = $request->input('turno');
        $texto ='' ;
        $resul = 0;

    
       switch($turno){
            case 1:
                if($dia_d_sem == 7){
                    
                    $resul= (700 * $hr_trab);
                    $texto;
                }else{

                        $resul = (500 * $hr_trab);
                    $texto;
                }
                    $texto;

                break;

            case 2:
                if($dia_d_sem == 7){
                   $resul = 1100 * $hr_trab;
                }else{
                   $resul = 800 * $hr_trab;
                }

               $texto;

               break;
           }


        return view ('terceira', ['texto'=>$texto,'resul'=>$resul]);
    }
}
