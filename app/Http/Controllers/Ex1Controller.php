<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEx1;
use App\Models\Ex1;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Ex1Controller extends Controller
{
  public function index(){
    $ex = Ex1::select('id','name','birthday','bio','slug')->orderBy('id','desc')->get();
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

      //Validation to avoid injection of input fields
      Ex1::create($request->safe()->merge(['slug' => Str::slug($request->name,'-')])->all());
      return redirect()->route('exIndex');
  }

  public function edit($id){ 
    $ex = Ex1::find($id);
    return view('update',compact('ex')); 
  }

  public function update(RequestEx1 $request, $id){
    $ex = Ex1::find($id);
    $ex->update(array_merge($request->all(),['slug' => Str::slug($request->name,'-')]));
    return redirect()->route('exIndex');
  }

  //It's possible to receive an object of the model even if u just send the id, laravel will interprete it and will get all the information that match with the object from the db.
  public function show(Ex1 $ex){ return view('getById',['ex' => $ex]); }

  public function destroy($id){
    $ex = Ex1::find($id);
    $ex->delete();
    return redirect()->route('exIndex');
  }
}
