<?php

namespace App\Http\Controllers;

use App\Models\Ex1;
use Illuminate\Http\Request;

class Ex1Controller extends Controller
{
  public function index(){
    $ex = Ex1::all();
    return view('welcome',compact('ex'));
  }
  
  public function create(){
    return view('create');
  }

  public function update($id){
    $ex = Ex1::find($id);

    return view('update',compact('ex'));
  }

  public function getById($id){
    $ex = Ex1::find($id);

    return view('getById',['ex' => $ex]);
  }
}
