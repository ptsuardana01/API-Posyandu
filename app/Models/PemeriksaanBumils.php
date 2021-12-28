<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PemeriksaanBumils extends Model
{
    use HasFactory;
    protected $table = 'pemeriksaan_bumils';
    protected $primaryKey = 'id';
    protected $guarded = [];

    static function getPemeriksaanBumil()
    {
        $return = DB::table('pemeriksaan_bumils')
            ->join('ortus', 'pemeriksaan_bumils.id_bumil', '=', 'ortus.id')
            ->select(
                'pemeriksaan_bumils.*',
                'ortus.nama_ibu',
                'ortus.nik_ibu',
                'ortus.tmpt_lahir_ibu',
                'ortus.tgl_lahir_ibu',
                'ortus.stts_bumil',
                'ortus.tgl_meninggal as tgl_meninggal_bumil',
                'ortus.id_kader_bumil'
            );

        return $return;
    }

    // public function pemeriksaanBumil()
    // {
    //     return $this->belongsTo(Ortus::class, 'id_pemeriksaan_bumil', 'id');
    // }
}
