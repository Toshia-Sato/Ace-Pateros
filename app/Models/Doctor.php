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
        'service_id' ,
        'specialization_id' ,
        'category' ,
        'room' ,
        'schedule_id'
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function specialization(){
        return $this->belongsTo(specialization::class);
    }

}
