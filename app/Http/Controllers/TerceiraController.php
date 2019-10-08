<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerceiraController extends Controller
{
    public function terceira(Request $request, $diurno=500,$noturno=800, $dia_d_sem=7){
        $hr_trab = $request->input('hrs_trab');
        $turno = $request->input('turno');
        $semana = $request->input('semana');
            
        $resul_dia = $diurno * $hr_trab;
        $resul_noite = $noturno * $hr_trab;
        if($turno==1){
                echo "Seu total de hoje é:"."Diurno é de".$resul_dia."Reais-----";
        }if($turno==2){
                echo"Seu total Noturno de hoje é de".$resul_noite."Reais----";
            }
            if($dia_d_sem == $semana){
                    $resul_dia = $diurno * $hr_trab + 200 * $hr_trab;
                    $resul_noite = $noturno * $hr_trab + 300 * $hr_trab ;
                    echo"Seu total no domingo diurno é de :". $resul_dia."----";
                    echo"Seu total no domingo noturno é de :" . $resul_noite;
                }if ($dia_d_sem != $semana)
                
        $terceira = session ('terceira');
        return view ('terceira', compact(['terceira']));
    }
}
