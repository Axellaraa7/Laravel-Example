<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candy extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ex1(){
      return $this->belongsTo(Ex1::class);
    }
}
