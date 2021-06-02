<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competition;
use App\Models\Player;

class School extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function competition(){
        return $this->belongsTo(Competition::class , 'competition_id');
    }

    public function players()
    {
        return $this->hasMany(Player::class , 'school_id');
    }
}
