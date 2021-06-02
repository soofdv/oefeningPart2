<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\School;

class Player extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function school(){
        return $this->belongsTo(School::class , 'school_id');
    }
}
