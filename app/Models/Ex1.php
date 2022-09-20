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
        get: fn($name) => ucwords(strtolower($name)),
        set: fn($name) => strtoupper($name)
      );
    }

    //Change the db field used to show in the url as parameter. By default is the id or the primary key, but if u change it u'll get the field choosen
    public function getRouteKeyName()
    {
      return 'slug';
    }

    public function phone()
    {
      return $this->hasOne(Phone::class);
    }

    public function candy(){
      return $this->hasMany(Candy::class);
    }

    public function classes(){
      return $this->belongsToMany(Classes::class,'classes_ex1','ex1_id','class_id');
    }
}
