<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex1Controller extends Controller
{
  public function index(){
    return view('welcome');
  }
  
  public function create(){
    return view('create');
  }

  public function update(String $name){
    return view('update',compact('name'));
  }

  public function getByName(String $name){
    return view('scientific',['name' => $name]);
  }
}
