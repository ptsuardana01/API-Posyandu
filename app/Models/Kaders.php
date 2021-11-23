<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaders extends Model
{
    use HasFactory;
    protected $table = 'kaders';
    protected $primaryKey = 'id';
    protected $guarded = [];

    // public function balita()
    // {
    //     return $this->hasMany(Balitas::class, 'id_balita', 'id');
    // }


    // public function ortu()
    // {
    //     return $this->hasMany(Ortus::class, 'id_ortu', 'id');
    // }
}
