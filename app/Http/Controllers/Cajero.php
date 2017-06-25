<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Cajero extends Controller
{
    public function retiro(Request $request)
    {
      $retiro=$request->retiro;
      $billetes=array(100,50,20,10);
      $billetero=array();
      $contador=0;

      while ($retiro>=10) {
        if ($retiro>=$billetes[$contador]) {
          $retiro=$retiro-$billetes[$contador];
          $billetero[]=$billetes[$contador];
        }
        else {
          $contador++;
        }
      }
      return view('retiro', ['billetes'=>$billetero]) ;
    }
}
