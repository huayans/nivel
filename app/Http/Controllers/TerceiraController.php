<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerceiraController extends Controller
{
    public function terceira(Request $request){

        $diurno=500;
        $noturno=800;
        $dia_d_sem = $request->input('dias');
        $hr_trab = $request->input('hrs_trab');
        $turno = $request->input('turno');
        $semana = $request->input('semana');
            
        
       
      //  if($turno==1){
       //    if($dia_d_sem == 7){
       //         $resul= (700 * $hr_trab) + (200 * $hr_trab);
        //        $texto="Seu total Diurno de hoje é de".$resul."Reais----";
         //   }else{
    //    /        $resul = (500 * $hr_trab);
          //      $texto="Seu total Diurno de hoje é de".$resul."Reais----";
         //   }
         //       $texto= "Seu total de hoje é:"."Diurno é de".$resul."Reais-----";
      //  }else if($turno==2){
           ///     if($dia_d_sem == 7){
                   // $resul = $noturno * $hr_trab + 300 * $hr_trab;
          //      }else{
                 //   $resul = $noturno * $hr_trab;
       //        }
           //     $texto="Seu total Noturno de hoje é de".$resul."Reais----";
           // }
/






           // if($dia_d_sem == $semana){
                   // $resul_dia = $diurno * $hr_trab + 200 * $hr_trab;
                   
                  //  $texto="Seu total no domingo diurno é de :". $resul_dia."----";
                 //   $texto="Seu total no domingo noturno é de :" . $resul_noite;
               // }
        $terceira = session ('terceira');
        return view ('terceira', ['texto'=>$texto,'resul'=>$resul]);
    }
}
