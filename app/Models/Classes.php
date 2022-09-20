<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ex1(){
      return $this->belongsToMany(Ex1::class,'classes_ex1','class_id','ex1_id');
    }
}
