<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\ContactMailing;
use App\Models\MailTrapModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create(){
      return view('contact');
    }

    public function store(MailRequest $request){
      try{
        Mail::to($request->email)->send(new ContactMailing($request->validated()));
        MailTrapModel::create(array_merge(array_slice($request->validated(),0,3),['success' => 1]));
        return redirect()->route('exIndex')->with('mail',[true,'Message sent']);
      }catch(\Exception $ex){
        MailTrapModel::create(array_merge(array_slice($request->validated(),0,3),['success' => 0]));
        return redirect()->route('exIndex')->with('mail',[false,'Message not sent']);
      }
    }
}
