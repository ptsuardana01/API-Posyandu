<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Balitas extends Model
{
    use HasFactory;
    protected $table = 'balitas';
    protected $primaryKey = 'id';
    protected $guarded = [];

    static function getBalitas()
    {
        $return = DB::table('balitas')
                ->join('kaders','balitas.id_kader_balita','=','kaders.id')
                ->join('ortus','balitas.id_ortu','=','ortus.id')
                ->select('balitas.*','ortus.nama_ibu','ortus.nik_ibu','ortus.nama_ayah','ortus.nik_ayah','kaders.nama as nama_kader');
        return $return;

    }

    // public function dataPemeriksaanBalita()
    // {
    //     return $this->belongsTo(PemeriksaanBalitas::class, 'id_pemeriksaan_balita', 'id');
    // }
}
