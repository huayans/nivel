<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundaController extends Controller
{
    public function segunda(Request $request, $dis_p_dia=114.2857142857143,$preco_pk=2.5,$pctgm = 30.00){
      $num_dia = $request->input('estadias_n');

        $resultado_k = $dis_p_dia * $num_dia;
        $resultado_pass = $resultado_k * $preco_pk;
       
        if($num_dia > 7 ){
          $resultado_pass_final = $resultado_pass - ($resultado_pass /100 *$pctgm);
          
          echo "Sua passagem  com desconto é de:".$resultado_pass_final;  
        }else{echo "Sua passagem custa :". $resultado_pass;
        }
        
        $segunda = session ('segunda');
        return view ('segunda', compact(['segunda']));
    }
}
