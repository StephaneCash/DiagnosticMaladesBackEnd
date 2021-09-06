<?php

namespace App\Models;

use App\Models\Doctors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mal2 extends Model
{
    use HasFactory;

    public function doctors(){
        return $this->hasMany(Doctors::class);
    }
}
