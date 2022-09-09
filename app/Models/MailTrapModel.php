<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailTrapModel extends Model
{
    use HasFactory;

    protected $table = 'mailing';
    protected $guarded = [];
}
