<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEx1;
use App\Models\Ex1;
use Illuminate\Http\Request;

class Ex1Controller extends Controller
{
  public function index(){
    $ex = Ex1::orderBy('id','desc')->get();
    return view('welcome',compact('ex'));
  }
  
  public function create(){ return view('create'); }

  public function store(RequestEx1 $request){
      //Request validation
      /* $request->validate([
        'name' => 'required',
        'bio' => 'required',
        'birthday' => 'required'
      ]); */

      /* NO MASS ASSIGNMENT */ 
      /* $ex = new Ex1();
      $ex->name = $request->name;
      $ex->bio = $request->bio;
      $ex->birthday = $request->birthday;
      $ex->save(); */

      Ex1::create($request->all());

      return redirect()->route('exIndex');

  }

  public function edit($id){
    $ex = Ex1::find($id);
    return view('update',compact('ex'));
  }

  public function update(RequestEx1 $request, $id){
    /* NO MASS ASSIGNAMENT */
    /*$ex->name = $request->name;
    $ex->bio = $request->bio;
    $ex->birthday = $request->birthday;
    $ex->save(); */
    $ex = Ex1::find($id);
    $ex->update($request->all());
    return redirect()->route('exIndex');
    
  }

  public function show($id){
    $ex = Ex1::find($id);
    return view('getById',['ex' => $ex]);
  }

  public function destroy($id){
    $ex = Ex1::find($id);
    $ex->delete();
    return redirect()->route('exIndex');
  }
}
