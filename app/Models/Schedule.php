<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'day_id' ,
        'doctors_id' ,
        'time'
    ];

    public function Doctor(){
        return $this->hasMany(Doctor::class);
    }

    public function Day(){
        return $this->hasMany(Day::class);
    }


}
