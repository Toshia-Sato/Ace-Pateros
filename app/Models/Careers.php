<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{

    protected $table = 'careers';

    use HasFactory;

    protected $fillable = [
        'name' ,
        'url',
        'image'
    ];
}
