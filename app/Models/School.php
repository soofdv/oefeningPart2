<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function competition(){
        return $this->belongsTo(competitionModel::class , 'competition_id');
    }

    public function players()
    {
        return $this->hasMany(playerModel::class , 'school_id');
    }
}
