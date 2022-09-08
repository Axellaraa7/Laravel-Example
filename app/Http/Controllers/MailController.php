<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function create(){
      return view('contact');
    }

    public function store(MailRequest $request){
      
    }
}
