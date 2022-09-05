<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEx1 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          'name' => 'required',
          'bio' => 'required',
          'birthday' => 'required'
        ];
    }

    //To change the attribute name of the input which had an error
    public function attributes(){
      return[
        'name' => 'example name'
      ];
    }

    //To change the message showed of the input which had an error
    public function messages(){
      return [
        'bio.required' => 'A biography it\'s required!!'
      ];
    }
}
