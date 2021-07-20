<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Doctor extends Authenticatable
{
    use HasFactory;

    protected $table = 'doctors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,
        'specialization_id' ,
        'category' ,
        'schedule' ,
        'image'
    ];


    public function schedule(){
        return $this->BelongstoMany(Schedule::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function specialization(){
        return $this->belongsTo(specialization::class);
    }

}
