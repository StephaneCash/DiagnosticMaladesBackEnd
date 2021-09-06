<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'type', 'symptomes', 'description', 'prevention',
    ];

    /* public function doctors(){
        return $this->belongsTo(Doctors::class);
    }*/
}
