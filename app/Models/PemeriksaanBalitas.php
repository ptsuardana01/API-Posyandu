<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanBalitas extends Model
{
    use HasFactory;
    protected $table = 'pemeriksaan_balitas';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function pemeriksaanBalita()
    {
        return $this->belongsTo(Balitas::class, 'id_pemeriksaan_balita', 'id');
    }
}
