<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PemeriksaanBalitas extends Model
{
    use HasFactory;
    protected $table = 'pemeriksaan_balitas';
    protected $primaryKey = 'id';
    protected $guarded = [];

    static function getPemeriksaanBalita()
    {
        $return = DB::table('pemeriksaan_balitas')
                ->join('balitas','pemeriksaan_balitas.id_balita','=','balitas.id')
                ->select('pemeriksaan_balitas.*','balitas.*');

        return $return;
    }

    // public function pemeriksaanBalita()
    // {
    //     return $this->belongsTo(Balitas::class, 'id_pemeriksaan_balita', 'id');
    // }
}
