<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanBumils extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'pemeriksaan_bumils';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function pemeriksaanBumil()
    {
        return $this->belongsTo(Ortus::class, 'id_pemeriksaan_bumil', 'id');
    }
}
