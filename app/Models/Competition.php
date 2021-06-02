<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\School;

class Competition extends Model
{
    use HasFactory;

    public function schools()
    {
        return $this->hasMany(School::class, 'competition_id');
    }

}
