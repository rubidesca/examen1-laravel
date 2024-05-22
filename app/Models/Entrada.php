<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'fecha',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'placa', 'placa');
    }
}