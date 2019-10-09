<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{
    public function primeira(Request $request){

        $n1 = $request->input('n1');
        $n2 = $request->input('n2');
        if ($n1 > $n2) {
            $texto =  "Está crescente";
         } elseif ($n1 == $n2) {
            $texto =  "Os dois estao iguais";
         } else {
            $texto =  "Está decrescente";
         }

        
        return view ('primeira', ['texto' => $texto]);

       
       
    }
  
}
