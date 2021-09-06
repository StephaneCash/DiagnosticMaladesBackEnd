<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'postnom', 'prenom', 'specialte', 'adress', 'contact',
    ];
/*
public function Maladie(){
    return $this->hasMany(Maladie::class);
}*/
}
