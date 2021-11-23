<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ortus extends Model
{
    use HasFactory;
    protected $table = 'ortus';
    protected $primaryKey = 'id';
    protected $guarded = [];

    static function getOrtus()
    {
        $return = DB::table('ortus')
                ->join('kaders','ortus.id_kader_ortus','=','kaders.id');
        return $return;

    }

    // public function dataPemeriksaanBumil()
    // {
    //     return $this->belongsTo(PemeriksaanBumils::class, 'id_pemeriksaan_bumil', 'id');
    // }
}
