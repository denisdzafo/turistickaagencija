<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StatistikaController extends Controller
{
  public function show(){
   $statistika = $this-> Statistika ->findOrFail(1);
    return response()->json($statistika);
  }
}
