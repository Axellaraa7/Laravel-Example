<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ex1 extends Model
{
    use HasFactory;

    protected $table = 'ex1';

    /* Allowed fields Mass Assignment */
    //protected $fillable = ['name','bio','birthday'];
    /* Forbidden fields Mass Assignment */
    protected $guarded = [];
    /* Mutators and Accesors */
    protected function name(): Attribute{
      // return new Attribute(
      //   get: fn($name) => ucwords($name),
      //   set: fn($name) => strtoupper($name)
      // );
      return Attribute::make(
        get: fn($name) => ucwords($name),
        set: fn($name) => strtoupper($name)
      );
    }
}
