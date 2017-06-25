<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Intervalo extends Controller
{
  public function intervalo(Request $request)
  {
    $intervalo = $request->intervalo;
    $intervaloacumulado=$intervalo;
    $secuencia = $request->secuencia;
    $ordenados = array();
    $contador=0;
    $haynegativos=false;

    //ordenamiento
    for ($i=0;$i<count($secuencia);$i++){
       for($j=0;$j<count($secuencia);$j++){
              if ($secuencia[$i]< $secuencia[$j]){
                      $temp = $secuencia[$i];
                      $secuencia[$i]=$secuencia[$j];
                      $secuencia[$j]=$temp;
               }
       }

    }

    //seccionado
    foreach ($secuencia as $numero) {
      if ($numero<0) {
        $ordenados[$contador][]=$numero;
        $haynegativos=true;
      }
      else {
        if ($haynegativos) {
          $contador++;
          $haynegativos=false;
        }
        if ($numero<=$intervaloacumulado) {
          $ordenados[$contador][]=$numero;
        }
        else {
           $contador++;
          while ($numero > $intervaloacumulado) {
            $intervaloacumulado=$intervaloacumulado+$intervalo;
          }
          if ($numero<=$intervaloacumulado) {
            $ordenados[$contador][]=$numero;
          }
        }
      }


    }

  return view('ordenamiento', ['ordenados'=>$ordenados,'intervalo'=>$intervalo]) ;
  }
}
